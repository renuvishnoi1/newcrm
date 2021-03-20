<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProjectController extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/ProjectModel');  
  }

  public function index()
  {
    $data['title'] = "Project";
     $data['tag']= $this->ProjectModel->get_tag_data();
    $data['records']= $this->ProjectModel->get_project_data();
    $data['members']= $this->ProjectModel->get_member_data();
    // echo "<pre>";
    // print_r($data);
    // die;
 
    $this->admin_load('projects/project_list',$data); 
  }
  public function addProject(){
   $data['title'] = "Add Project";
   $data['tags']= $this->ProjectModel->get_list('tbltags');
   $data['clients']= $this->ProjectModel->get_list('tblclients');
   $data['project_members']= $this->ProjectModel->get_list('tblstaff');
   
   $this->admin_load('projects/add_project',$data); 
 }
 public function saveProject(){
  

   if ($this->form_validation->run('add_project') == FALSE)
  {
   $data['title'] = "Add Project";
   $data['tags']= $this->ProjectModel->get_list('tbltags');
   $data['clients']= $this->ProjectModel->get_list('tblclients');
   $data['project_members']= $this->ProjectModel->get_list('tblstaff');   
   $this->admin_load('projects/add_project',$data); 
  }
  else
  {    
    $data= array(
      'name'=>$this->input->post('name'),
      'clientid'=>$this->input->post('customer'),
      'progress'=>$this->input->post('progress'),
      'billing_type'=>$this->input->post('billing_type'),
      'status'=>$this->input->post('status'),
      'project_cost'=>$this->input->post('project_cost'),
      'project_rate_per_hour'=>$this->input->post('project_rate_per_hour'),
      'estimated_hours'=>$this->input->post('estimated_hours'),
      'description'=>$this->input->post('editor1'),
      'start_date' =>$this->input->post('start_date'),
      'deadline' =>$this->input->post('deadline'),
      'project_created' =>date('Y-m-d')
    );
    $table='tblprojects';
    $projectData = $this->ProjectModel->insert($table,$data);
    if($projectData){
     
      $staff_id=$this->input->post('member');

      if(is_array($staff_id)){
        foreach ($staff_id as $key => $value) {
       $memberProject=array();
       $memberProject['project_id']= $projectData;
       $memberProject['staff_id'] = $value;
      
       $memberData = $this->ProjectModel->insert('tblproject_members',$memberProject);
       // if($memberData){
       //  redirect('admin/projects');
       // }
     }
      }
       $tag = $this->input->post('tag_id');
        if(is_array($tag)){
        foreach ($tag as $key => $value) {
          $tagdata=array();
          $tagdata['rel_id']=$projectData;
          $tagdata['tag_id']=$value;
           $tagdata['rel_type']='project';          
          $tagInsert= $this->ProjectModel->insert('tbltaggables',$tagdata);                 
          // if($tagInsert){             
          //   redirect('admin/projects');
          // }
        }
    }
    $available_features = serialize($_POST['available_features']);
    $setdata=array(
      'project_id'=>$projectData,
      'name'=>'available_features',
      'value'=>$available_features 
       );

    $settingData= $this->ProjectModel->insert('tblproject_settings',$setdata);

    for ($i=0; $i<count($_POST['settings']); $i++) { 

      $intdata=[];
      $intdata['name']=$_POST['settings'][$i];
      $intdata['value']=1;
      $intdata['project_id']=$projectData;
      $this->ProjectModel->insert('tblproject_settings',$intdata);
    }
            // redirect('admin/projects');
  }
  redirect('admin/projects');
 }
}
public function editProject($id){

   $data['title'] = "Edit Project";
    $data['project']= $this->ProjectModel->get_data_by_id($id,'tblprojects');
    $data['tag']= $this->ProjectModel->get_tag_data_by_id($id);
    $data['prject_member'] = $this->ProjectModel->get_project_members($id);
    // $data['project_settings'] = $this->ProjectModel->get_project_settings($id);
    $data['clients']= $this->ProjectModel->get_list('tblclients');
     
$data['setting']=unserialize($this->db->where('name','available_features')->where('project_id',$id)->get('tblproject_settings')->row()->value);
$data['available_features']=$this->db->where('name!=','available_features')->where('project_id',$id)->get('tblproject_settings')->result();
 // echo "<pre>";print_r($data['setting']);
 //      die;
   // 
   // $data['member']= $this->ProjectModel->get_list('tblstaff');
   
   $this->admin_load('projects/edit_project',$data);
}
public function updateProject(){
  $id= $this->input->post('id');
  if ($this->form_validation->run('edit_project') == FALSE)
  {
   $data['title'] = "Edit Project";
    $data['project']= $this->ProjectModel->get_data_by_id($id,'tblprojects');
    $data['tag']= $this->ProjectModel->get_tag_data_by_id($id);
   $this->admin_load('projects/edit_project',$data);
  }
  else
  {    
    $data= array(
      'name'=>$this->input->post('name'),
      'clientid'=>$this->input->post('customer'),
      'progress'=>$this->input->post('progress'),
      'billing_type'=>$this->input->post('billing_type'),
      'status'=>$this->input->post('status'),
      'project_cost'=>$this->input->post('project_cost'),
      'project_rate_per_hour'=>$this->input->post('project_rate_per_hour'),
      'estimated_hours'=>$this->input->post('estimated_hours'),
      'description'=>$this->input->post('editor1'),
      'start_date' =>$this->input->post('start_date'),
      'deadline' =>$this->input->post('deadline'),
      'project_created' =>date('Y-m-d')
    );
    $table='tblprojects';
    $projectData = $this->ProjectModel->insert($table,$data);
    if($projectData){
      $memberProject= array(
        'project_id'=>$projectData,
        'staff_id'=>$this->input->post('member'),
       );
      $memberData = $this->ProjectModel->insert('tblproject_members',$memberProject);
       $tag = $this->input->post('tag_id');
        if(is_array($tag)){
        foreach ($tag as $key => $value) {
          $tagdata=array();
          $tagdata['rel_id']=$projectData;
          $tagdata['tag_id']=$value;
           $tagdata['rel_type']='project';          
          $tagInsert= $this->ProjectModel->insert('tbltaggables',$tagdata);
                 
          if($tagInsert){
             $Specilized_category = $this->input->post('setting');
             // echo "<pre>";
             // print_r($Specilized_category);die;
             //if($Specilized_category)
        $data=array(
          'name'=>'',
        'value'=> serialize($Specilized_category)      
      
    );
            redirect('admin/projects');
          }
        }
    }
    redirect('admin/projects');
  }
  redirect('admin/projects');
 }
}
public function viewProject($id){

   $data['title'] = " Project";
    $data['project']= $this->ProjectModel->get_data_by_id($id,'tblprojects');
    $data['tag']= $this->ProjectModel->get_tag_data_by_id($id);
    $data['prject_member'] = $this->ProjectModel->get_project_members($id);
    $data['project_settings'] = $this->ProjectModel->get_project_settings($id);

      // echo "<pre>";print_r($data);
      // die;
   
   $this->admin_load('projects/view_project',$data);
}
public function delete($id){
  $deleteProject = $this->ProjectModel->delete($id);
  if($deleteProject){
    redirect('admin/projects');
  }
}

}
