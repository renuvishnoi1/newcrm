<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ContractTypeController extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/ContractTypeModel');
    

  }

  public function index()
  {
    $data['title'] = "Contract Types";
    $data['records']= $this->ContractTypeModel->get();
  // echo "<pre>";
  // print_r($data);
  // die;
    
    $this->admin_load('contracts/contract_type/type_list.php',$data); 
  }
  public function addType(){

   $data['title'] = "Add Types";
   $this->admin_load('contracts/contract_type/add_type.php',$data);
 }
 public function insertType(){
  if($this->form_validation->run('add_c_type') == FALSE){
   $data['title'] = "Add Types";
   $this->admin_load('contracts/contract_type/add_type.php',$data);
 }else{

  $data= array(
    'name'=>$this->input->post('name')

  );

  $insertData= $this->ContractTypeModel->add( $data);
  if($insertData){

    redirect('admin/contracts/types');
  }
}
}
public function editType($id)
{
  $data['title'] = "Edit Type";
  $data['contract']= $this->ContractTypeModel->get($id);
  $this->admin_load('contracts/contract_type/edit_type.php',$data); 
  }

public function updateType(){
  $id= $this->input->post('id');
  if($this->form_validation->run('edit_c_type')== FALSE){
    $data['title'] = "Edit Type";
    $data['contract']= $this->ContractTypeModel->get($id);
    $this->admin_load('contracts/contract_type/edit_type.php',$data); 
  }else{     
    $data= array(
      'name'=>$this->input->post('name')
    );
    $update = $this->ContractTypeModel->update($data, $id);
    if($update){
      redirect('admin/contracts/types');
    }

  }
}
public function delete($id){
  $delete= $this->ContractTypeModel->delete( $id);
  if($delete){
    redirect('admin/contracts/types');
  }
}

}
