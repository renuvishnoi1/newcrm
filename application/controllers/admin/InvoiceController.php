<?php
defined('BASEPATH') or exit('No direct script access allowed');

class InvoiceController extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/invoiceModel');    

  }
  public function index(){
     $data['title'] = "Invoices";

   $this->admin_load('invoices/invoice_list',$data);  	
  }
  public function addInvoice(){
     $data['title'] = "Add Invoices";
      $data['payment_modes'] = $this->invoiceModel->get_list('tblpayment_modes');
     $data['sale_agent'] = $this->invoiceModel->get_list('tblstaff');
      $data['clients'] = $this->invoiceModel->get_list('tblclients');
   $this->admin_load('invoices/add_invoice',$data);  
  }
  public function insertInvoice(){
    echo "<pre>";
    print_r($_POST);
    die;
  }
  
  

}
?>