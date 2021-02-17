<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CustomersGroupController extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/CustomersGroupModel');    

  }
  public function index(){
    $data['title'] = "Groups";
    $data['records'] = $this->CustomersGroupModel->get_list('tblcustomers_groups');
    $this->admin_load('contacts/groups/group_list',$data); 
  }
  public function add(){
    //die('hi');
    $data['title'] = "Add Group";
    $this->admin_load('contacts/groups/add_group',$data);
  }
  public function insert(){
    if($this->form_validation->run('add_group') == FALSE){
     $data['title'] = "Add Group";
     $this->admin_load('contacts/groups/add_group',$data);
   }else{

    $data= array(
      'name'=>$this->input->post('name')
    );
    $table = 'tblcustomers_groups';
    $insertData= $this->CustomersGroupModel->insert($table, $data);
    if($insertData){
        // $this->session->set_flashdata('success','Add Successfully');
      redirect('admin/clients/groups');
    }
  }

}
public function edit($id){
    //echo $id;die;
 $data['title'] = "Edit Group";
 $data['group']=$this->CustomersGroupModel->get_source_row($id);
     // echo "<pre>";
     // print_r($data['source']);die;
 $this->admin_load('contacts/groups/edit_group',$data);
}
public function update(){
  $id= $this->input->post('id');
  if($this->form_validation->run('edit_group')== FALSE){
    $data['title'] = "Edit Group";
    $data['group']=$this->CustomersGroupModel->get_source_row($id);        
    $this->admin_load('contacts/groups/edit_group',$data);
  }else{     
    $data= array(
      'name'=> $this->input->post('name')
    );
    $update = $this->CustomersGroupModel->update($data, $id);
    if($update){
      redirect('admin/clients/groups');
    }

  }
}
public function delete($id){
  $delete= $this->CustomersGroupModel->delete( $id);
  if($delete){
    redirect('admin/clients/groups');
  }
}

}
?>