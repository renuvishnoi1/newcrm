<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LeadsSourceController extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/LeadsSourceModel');    

  }
  public function index(){
    $data['title'] = "Lead sources";
  	$data['records'] = $this->LeadsSourceModel->get_list('tblleads_sources');
  	$this->admin_load('leads/sources/source_list',$data);  	
  }
  public function add(){
    $data['title'] = "Add Lead source";
  	$this->admin_load('leads/sources/add_source',$data);
  }
  public function insert(){
  	if($this->form_validation->run('add_source') == FALSE){
       $data['title'] = "Add Lead source";
    $this->admin_load('leads/sources/add_source',$data);
  	}else{

      $data= array(
      	'name'=>$this->input->post('name')
      );
      $table = 'tblleads_sources';
      $insertData= $this->LeadsSourceModel->insert($table, $data);
      if($insertData){
      	// $this->session->set_flashdata('success','Add Successfully');
      	redirect('admin/leads/sources');
      }
  	}

  }
  public function edit($id){
  	//echo $id;die;
  	 $data['title'] = "Edit Lead source";
  	 $data['source']=$this->LeadsSourceModel->get_source_row($id);
     // echo "<pre>";
     // print_r($data['source']);die;
     $this->admin_load('leads/sources/edit_source',$data);
  }
  public function update(){
  	$id= $this->input->post('id');
  	if($this->form_validation->run('edit_source')== FALSE){
 $data['source']=$this->LeadsSourceModel->get_source_row($id);
    
     $this->admin_load('leads/sources/edit_source',$data);
  	}else{
  		//$name= $this->input->post('name');
  		$data= array(
  			'name'=> $this->input->post('name')
  		);
  		$update = $this->LeadsSourceModel->update($data, $id);
  		if($update){
  			redirect('admin/leads/sources');
  		}

  	}
  }
  public function delete($id){
    $delete= $this->LeadsSourceModel->delete( $id);
      if($delete){
        redirect('admin/leads/sources');
      }
  }

}
?>