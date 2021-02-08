<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LeadsStatusController extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/LeadsStatusModel');    

  }
  public function index(){
    $data['title'] = "Lead Status";
  	$data['records'] = $this->LeadsStatusModel->get_list('tblleads_status');
    //die('hre');
  	$this->admin_load('leads/statuses/status_list',$data);  	
  }
  public function add(){
    $data['title'] = "Add Lead Status";
  	$this->admin_load('leads/statuses/add_status',$data);
  }
  public function insert(){
  	if($this->form_validation->run('add_status') == FALSE){
       $data['title'] = "Add Lead Status";
    $this->admin_load('leads/statuses/add_status',$data);
  	}else{

      $data= array(
      	'name'=>$this->input->post('name'),
        'statusorder'=>$this->input->post('statusorder'),
        'color'=>$this->input->post('color'),
      );

      $table = 'tblleads_status';
      $insertData= $this->LeadsStatusModel->insert($table, $data);
      if($insertData){
      	redirect('admin/leads/statuses');
      }
  	}

  }
  public function edit($id){
  	//echo $id;die;
  	 $data['title'] = "Edit Lead Status";
  	 $data['status']=$this->LeadsStatusModel->get_status_row($id);
     // echo "<pre>";
     // print_r($data['source']);die;
     $this->admin_load('leads/statuses/edit_status',$data);
  }
  public function update(){
  	$id= $this->input->post('id');
  	if($this->form_validation->run('edit_status')== FALSE){
 $data['source']=$this->LeadsStatusModel->get_source_row($id);
    
     $this->admin_load('leads/statuses/edit_source',$data);
  	}else{
  		//$name= $this->input->post('name');
  		$data= array(
  			'name'=> $this->input->post('name'),
        'statusorder'=>$this->input->post('statusorder'),
        'color'=>$this->input->post('color'),
  		);
  		$update = $this->LeadsStatusModel->update($data, $id);
  		if($update){
  			redirect('admin/leads/statuses');
  		}

  	}
  }
  public function delete($id){
    $delete= $this->LeadsStatusModel->delete( $id);
      if($delete){
        redirect('admin/leads/statuses');
      }
  }

}
?>