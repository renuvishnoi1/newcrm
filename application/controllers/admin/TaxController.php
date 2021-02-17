<?php

defined('BASEPATH') or exit('No direct script access allowed');

class TaxController extends MY_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/TaxModel');
    }

    /* List all available Tax */
    public function index(){
        $data['title'] = "Taxes";
        $data['records']= $this->TaxModel->get_list('tbltaxes');

        $this->admin_load('taxes/tax_list',$data); 
    }
    /* function to load add tax view */
    public function addTax(){
       $data['title'] = "Add Tax";
       $this->admin_load('taxes/add_tax',$data); 
   }
   /* function insert tax  */
   public function insertTax(){
    
       if($this->form_validation->run('add_tax') == FALSE){
         $data['title'] = "Add Tax";
       $this->admin_load('taxes/add_tax',$data); 
      }else{

        $data= array(
          'name'=>$this->input->post('name'),
          'taxrate'=>$this->input->post('taxrate')
      );
        $table = 'tbltaxes';
        $insertData= $this->TaxModel->insert($table, $data);
        if($insertData){

          redirect('admin/taxes');
      }
    }

    }
    public function editTax($id){

       $data['title'] = "Edit Tax";
       $data['tax'] = $this->TaxModel->get_tax_row($id);
       $this->admin_load('taxes/edit_tax',$data); 
    }
    public function update(){
  $id= $this->input->post('id');
  if($this->form_validation->run('edit_tax')== FALSE){
   $data['title'] = "Edit Tax";
       $data['tax'] = $this->TaxModel->get_tax_row($id);
       $this->admin_load('taxes/edit_tax',$data); 
  }else{     
    $data= array(
      'name'=>$this->input->post('name'),
      'taxrate'=>$this->input->post('taxrate')
    );
    $update = $this->TaxModel->update($data, $id);
    if($update){
      redirect('admin/taxes');
    }

  }
}
public function deleteTax($id){
  $delete= $this->TaxModel->delete( $id);
  if($delete){
    redirect('admin/taxes');
  }
}

}
