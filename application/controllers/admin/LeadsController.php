<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LeadsController extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/LeadsModel');  
      $this->load->model('admin/ContactsModel');
     // $this->load->model('admin/LeadsStatusModel');    

  }
  public function index(){
  	$data['title'] = "Lead";
  	 $data['records'] = $this->LeadsModel->get_list('tblleads');
     // echo "<pre>";
     // print_r($data);die;
     
  	$this->admin_load('leads/leads_list',$data); 
  }
  public function addLead(){
    $data['title'] = "Lead";
    $data['source'] = $this->LeadsModel->get_list('tblleads_sources');
    $data['status'] = $this->LeadsModel->get_list('tblleads_status');
    $data['assign'] = $this->LeadsModel->get_assign_list('tblstaff');
    $data['country'] = $this->ContactsModel->get_countries();
     // echo "<pre>";
     // print_r($data['assign']);
     // die;
    $this->admin_load('leads/add_lead',$data); 
  }
  public function insertLead(){
   // echo "<pre>";
   // print_r($_POST);
   // die;
    if($this->form_validation->run('add_lead') == FALSE){
      $data['title'] = "Lead";
      $this->admin_load('leads/add_lead',$data); 
    }else{

      $data= array(
        'name'=>$this->input->post('name'),
        'title'=>$this->input->post('title'),
        'source'=>$this->input->post('source'),
        'company'=>$this->input->post('company'),
        'description'=>$this->input->post('description'),
        'country'=>$this->input->post('country'),
        'zip'=>$this->input->post('zip'),
        'city'=>$this->input->post('city'),
        'state'=>$this->input->post('state'),
        'address'=>$this->input->post('address'),
        'assigned'=>$this->input->post('assigned'),
        'dateadded'=>date('Y-m-d H:i:s'),
        'status'=>$this->input->post('status'),
        'source'=>$this->input->post('source'),
        'lastcontact'=>$this->input->post('lastcontact'),
        'email'=>$this->input->post('email'),
        'website'=>$this->input->post('website'),
        'is_public'=>$this->input->post('is_public'),
        'default_language'=>$this->input->post('default_language'),
        'lead_value'=>$this->input->post('lead_value'),
      );
      $table = 'tblleads';
      $insertData= $this->LeadsModel->insert($table, $data);
       // echo "<pre>";
       //  print_r($insertData);die;
      if($insertData){
        if($this->input->post('tag') !=''){
        $tag= array('name'=>$this->input->post('tag'));
        $taginsert = $this->LeadsModel->insert('tbltags', $tag);
        if($taginsert){
          $taggable= array(
            'rel_id'=>$insertData,
            'rel_type'=>'lead',
            'tag_id'=>$taginsert,
        );
          $taggableinsert= $this->LeadsModel->insert('tbltaggables', $taggable);
          if($taggableinsert){
            redirect('admin/leads');
          }
        }
        // echo "<pre>";
        // print_r($taginsert);die;
       }
        // $this->session->set_flashdata('success','Add Successfully');
        redirect('admin/leads');
      }
    }


  }
  public function editLead($id){
    $data['title'] = "Edit Lead";
    $data['leads'] = $this->LeadsModel->get_lead_row($id);
     $data['source'] = $this->LeadsModel->get_list('tblleads_sources');
    $data['status'] = $this->LeadsModel->get_list('tblleads_status');
    $data['assign'] = $this->LeadsModel->get_assign_list('tblstaff');
    $data['country'] = $this->ContactsModel->get_countries();
    // echo "<pre>";
    // print_r($data);
    // die;
    $this->admin_load('leads/edit_lead',$data);
  }
  public function updateLead(){
    
  }
  public function fetchLead(){
    $this->load->view();
    $fetch_data=$this->LeadsModel->make_datatables();
    $data = array();
    foreach ($fetch_data as $row) {
      $sub_array = array();
      $sub_array[] = $row->id;
      $sub_array[] = $row->company;
      $sub_array[] = '<button type="button" name = "update" id="'.$row->id.'" class="btn  btn-info">Update</button>';
       $sub_array[] = '<button type="button" name = "delete" id="'.$row->id.'" class="btn  btn-info">Delete</button>';
       $data[]= $sub_array;
       $output= array(
        "draw"=>intval($_POST["draw"]),
        "recordTotal "=>$this->LeadsModel->get_all_data(),
        "recordFiltered"=>$this->LeadsModel->get_filtered_data(),
        "data"=> $data
         );
       echo json_encode($output);

    }
  }
}
?>