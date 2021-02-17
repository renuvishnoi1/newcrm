<?php

defined('BASEPATH') or exit('No direct script access allowed');

class InvoiceItemsController extends MY_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/invoiceItemsModel');
    }

    /* List all available items */
    public function index(){
        $data['title'] = "Item";
        //$data['records']= $this->invoiceItemsModel->get_list();

        $this->admin_load('invoice_items/item_list',$data); 
    }
    /* function to load add items view */
    public function addItem(){
       $data['title'] = "Item";
       $data['group']= $this->invoiceItemsModel->get_list('tblitems_groups');
       $data['tax']= $this->invoiceItemsModel->get_list('tbltaxes');

       $this->admin_load('invoice_items/add_item',$data); 
   }
   /* function insert item  */
   public function insertItem(){
    
       if($this->form_validation->run('add_item') == FALSE){
          $data['title'] = "Item";
          $data['tax']= $this->invoiceItemsModel->get_list('tbltaxes');
          $data['group']= $this->invoiceItemsModel->get_list('tblitems_groups');
          $this->admin_load('invoice_items/add_item',$data); 
      }else{

        $data= array(
          'description'=>$this->input->post('description'),
          'long_description'=>$this->input->post('long_description')
      );
        $table = 'tblitems';
        $insertData= $this->invoiceItemsModel->insert($table, $data);
        if($insertData){

          redirect('admin/invoice_items');
      }
    }

    }
/* function to load add item group view */
public function group(){

    $data['title'] = "Groups";
    $data['records']= $this->invoiceItemsModel->get_list('tblitems_groups');

    $this->admin_load('invoice_items/item_group/item_group_list',$data); 
}
/* function insert item group */
public function addGroup(){
    if($this->form_validation->run('add_item_group') == FALSE){
       $data['title'] = "Add Group";
       $data['records']= $this->invoiceItemsModel->get_list('tblitems_groups');
       $this->admin_load('invoice_items/item_group/item_group_list',$data);
   }else{

    $data= array(
      'name'=>$this->input->post('name')
  );
    $table = 'tblitems_groups';
    $insertData= $this->invoiceItemsModel->insert($table, $data);
    if($insertData){

      redirect('admin/invoice_items/item_group');
  }
}

}

}
