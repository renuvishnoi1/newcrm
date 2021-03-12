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
     $data['member']= $this->ProjectModel->get_list('tblstaff');
 
    $this->admin_load('projects/project_list',$data); 
  }
  public function addProject(){
   $data['title'] = "Add Project";
   $data['tags']= $this->ProjectModel->get_list('tbltags');
   $data['clients']= $this->ProjectModel->get_list('tblclients');
   $data['member']= $this->ProjectModel->get_list('tblstaff');
   
   $this->admin_load('projects/add_project',$data); 
 }
 public function saveProject(){
  // echo "<pre>";
  // print_r($_POST);die;
 
   if ($this->form_validation->run('add_project') == FALSE)
  {
   $data['title'] = "Add Project";
   $data['tags']= $this->ProjectModel->get_list('tbltags');
   $data['clients']= $this->ProjectModel->get_list('tblclients');
   $data['member']= $this->ProjectModel->get_list('tblstaff');
   
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
public function editProject($id){

   $data['title'] = "Edit Project";
    $data['project']= $this->ProjectModel->get_data_by_id($id,'tblprojects');
    $data['tag']= $this->ProjectModel->get_tag_data_by_id($id);
      // echo "<pre>";print_r($data);
      // die;

   // $data['clients']= $this->ProjectModel->get_list('tblclients');
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
// public function project($id = '')
//     {
//         if (!has_permission('projects', '', 'edit') && !has_permission('projects', '', 'create')) {
//             access_denied('Projects');
//         }

//         if ($this->input->post()) {
//             $data                = $this->input->post();
//             $data['description'] = html_purify($this->input->post('description', false));
//             if ($id == '') {
//                 if (!has_permission('projects', '', 'create')) {
//                     access_denied('Projects');
//                 }
//                 $id = $this->projects_model->add($data);
//                 if ($id) {
//                     set_alert('success', _l('added_successfully', _l('project')));
//                     redirect(admin_url('projects/view/' . $id));
//                 }
//             } else {
//                 if (!has_permission('projects', '', 'edit')) {
//                     access_denied('Projects');
//                 }
//                 $success = $this->projects_model->update($data, $id);
//                 if ($success) {
//                     set_alert('success', _l('updated_successfully', _l('project')));
//                 }
//                 redirect(admin_url('projects/view/' . $id));
//             }
//         }
//         if ($id == '') {
//             $title                            = _l('add_new', _l('project_lowercase'));
//             $data['auto_select_billing_type'] = $this->projects_model->get_most_used_billing_type();
//         } else {
//             $data['project']                               = $this->projects_model->get($id);
//             $data['project']->settings->available_features = unserialize($data['project']->settings->available_features);

//             $data['project_members'] = $this->projects_model->get_project_members($id);
//             $title                   = _l('edit', _l('project_lowercase'));
//         }

//         if ($this->input->get('customer_id')) {
//             $data['customer_id'] = $this->input->get('customer_id');
//         }

//         $data['last_project_settings'] = $this->projects_model->get_last_project_settings();

//         if (count($data['last_project_settings'])) {
//             $key                                          = array_search('available_features', array_column($data['last_project_settings'], 'name'));
//             $data['last_project_settings'][$key]['value'] = unserialize($data['last_project_settings'][$key]['value']);
//         }

//         $data['settings'] = $this->projects_model->get_settings();
//         $data['statuses'] = $this->projects_model->get_project_statuses();
//         $data['staff']    = $this->staff_model->get('', ['active' => 1]);

//         $data['title'] = $title;
//         $this->load->view('admin/projects/project', $data);
//     }

}
