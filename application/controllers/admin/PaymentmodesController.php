<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PaymentmodesController extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/PaymentmodesModel');    

  }
  public function index(){
    $data['title'] = "Payment Modes";
  	$data['paymentmodes'] = $this->PaymentmodesModel->get_list('tblpayment_modes');
    //die('hre');
  	$this->admin_load('paymentmodes/paymentmode_list',$data);  	
  }
  /**/
   public function add(){
    $data['title'] = "Add Payment Mode";
    $this->admin_load('paymentmodes/add_paymentmode',$data);
  }
  /*function to save paymentmode data into database*/
  public function insert(){
    if($this->form_validation->run('add_paymentmode') == FALSE){
      $data['title'] = "Add Payment Mode";
    $this->admin_load('paymentmodes/add_paymentmode',$data);
   }else{
    $data= array(
     'name'=>$this->input->post('name'),
     'description'=>$this->input->post('description'),
     'active'=>$this->input->post('active'),
     'show_on_pdf'=>$this->input->post('show_on_pdf'),
     'selected_by_default'=>$this->input->post('selected_by_default'),
     'expenses_only'=>$this->input->post('expenses_only'),
     'invoices_only'=>$this->input->post('invoices_only')
   );
    $table = 'tblpayment_modes';
    $insertData= $this->PaymentmodesModel->insert($table, $data);
    if($insertData){
        // $this->session->set_flashdata('success','Add Successfully');
     redirect('admin/paymentmodes');
   }
 }

}
public function edit($id){
    //echo $id;die;
  $data['title'] = "Edit Lead source";
  $data['source']=$this->LeadsSourceModel->get_source_row($id);     
  $this->admin_load('leads/sources/edit_source',$data);
}
public function update(){
 $id= $this->input->post('id');
 if($this->form_validation->run('edit_source')== FALSE){
  $data['title'] = "Edit Lead source";
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