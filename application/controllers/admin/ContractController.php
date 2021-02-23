<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ContractController extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/ContractModel');
     $this->load->model('admin/ContractTypeModel');
    

  }

  public function index()
  {
    $data['title'] = "Contract ";
    $data['records']= $this->ContractModel->get();
  // echo "<pre>";
  // print_r($data);
  // die;
    
    $this->admin_load('contracts/contract_list',$data); 
  }
  public function addContract(){

   $data['title'] = "Add Contract";
   $data['customer']= $this->ContractModel->get_client();
   $data['contract_type'] = $this->ContractTypeModel->get();
  
   $this->admin_load('contracts/add_contract',$data);
 }
 public function saveContract(){
 
  if($this->form_validation->run('add_contract') == FALSE){
   $data['title'] = "Add Contract";
   $data['customer']= $this->ContractModel->get_client();
   $data['contract_type'] = $this->ContractTypeModel->get();
  
   $this->admin_load('contracts/add_contract',$data);
 }else{

  $data= array(
    'subject'=>$this->input->post('subject'),
    'client'=>$this->input->post('client'),
    'datestart'=>$this->input->post('datestart'),
    'dateend'=>$this->input->post('dateend'),
    'contract_value'=>$this->input->post('contract_value'),
    'contract_type'=>$this->input->post('contract_type'),
    'description'=>$this->input->post('description')
  );

  $insertData= $this->ContractModel->add( $data);
  if($insertData){

    redirect('admin/contracts');
  }
}
}
public function editContract($id)
{
   $data['title'] = "Contract";
    $data['customer']= $this->ContractModel->get_client();
   $data['contract_type'] = $this->ContractTypeModel->get();
    $data['contracts']= $this->ContractModel->get($id);
    // echo "<pre>";
    // print_r($data);
    // die;
  $this->admin_load('contracts/edit_contract',$data);
}

public function updateContract(){

  $id= $this->input->post('id');

  if($this->form_validation->run('edit_contract')== FALSE){
   $data['title'] = "Contract";
    $data['customer']= $this->ContractModel->get_client();
   $data['contract_type'] = $this->ContractTypeModel->get();
    $data['contracts']= $this->ContractModel->get($id);
    $this->admin_load('contracts/edit_contract',$data);
  }else{    

   $u_data= array(
    'subject'=>$this->input->post('subject'),
    'client'=>$this->input->post('client'),
    'datestart'=>$this->input->post('datestart'),
    'dateend'=>$this->input->post('dateend'),
    'contract_value'=>$this->input->post('contract_value'),
    'contract_type'=>$this->input->post('contract_type'),
    'description'=>$this->input->post('description')
  );
    
    $update = $this->ContractModel->update($u_data, $id);
    if($update){
      redirect('admin/contracts');
    }

  }
}
public function delete($id){
  $delete= $this->ContractModel->delete( $id);
  if($delete){
    redirect('admin/contracts');
  }
}

}
