<?php
defined('BASEPATH') or exit('No direct script access allowed');

class InvoiceController extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();
    //$this->load->model('admin/LeadsSourceModel');    

  }
  public function index(){
     $data['title'] = "Invoices";
    // $data['records'] = $this->LeadsSourceModel->get_list('tblleads_sources');
   $this->admin_load('invoices/invoice_list',$data);  	
  }
  
  

}
?>