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
   $data['tags']= $this->invoiceModel->get_list('tbltags');
   $data['clients'] = $this->invoiceModel->get_list('tblclients');
   $data['country']= $this->invoiceModel->get_list('tblcountries');
   $data['items']= $this->invoiceModel->get_list('tblitems');
   $data['tax']= $this->invoiceModel->get_list('tbltaxes');
   $data['currencies']= $this->invoiceModel->get_list('tblcurrencies');
  //   echo "<pre>";
  // print_r($data);
  // die;
   $this->admin_load('invoices/add_invoice',$data);  
 }
 public function get_country_by_id(){
  $id = $this->input->post('s_c_id');
  $data = $this->invoiceModel->get_country_by_id($id); 
   echo json_encode($data);
 }
 public function insertInvoice(){
  //   echo "<pre>";
  // print_r($_POST['tag']);
  // die;
  $data['clientid'] = isset($_POST['clientid']) ? $_POST['clientid'] : '';
  $data['billing_street'] = isset($_POST['billing_street']) ? $_POST['billing_street'] : '';
  $data['billing_city'] = isset($_POST['billing_city']) ? $_POST['billing_city'] : '';
  $data['billing_state'] = isset($_POST['billing_state']) ? $_POST['billing_state'] : '';
  $data['billing_country'] = isset($_POST['billing_country']) ? $_POST['billing_country'] : '';
  $data['billing_zip'] = isset($_POST['billing_zip']) ? $_POST['billing_zip'] : '';
  $data['shipping_street'] = isset($_POST['shipping_street']) ? $_POST['shipping_street'] : '';
  $data['shipping_city'] = isset($_POST['shipping_city']) ? $_POST['shipping_city'] : '';
  $data['shipping_state'] = isset($_POST['shipping_state']) ? $_POST['shipping_state'] : '';
  $data['shipping_country'] = isset($_POST['shipping_country']) ? $_POST['shipping_country'] : '';
  $data['shipping_zip'] = isset($_POST['shipping_zip']) ? $_POST['shipping_zip'] : '';
  //$data['invoice_number'] = isset($_POST['invoice_number']) ? $_POST['invoice_number'] : '';
  $data['date'] = isset($_POST['invoice_date']) ? $_POST['invoice_date'] : '';
  $data['duedate'] = isset($_POST['due_date']) ? $_POST['due_date'] : '';
  $data['currency'] = isset($_POST['currency']) ? $_POST['currency'] : '';
  $data['sale_agent'] = isset($_POST['sale_agent']) ? $_POST['sale_agent'] : '';//serialize
  $payment_modes = isset($_POST['payment_modes']) ? $_POST['payment_modes'] : '';
  $data['allowed_payment_modes'] =  serialize($payment_modes);
  $data['terms'] = isset($_POST['terms']) ? $_POST['terms'] : '';
  $data['clientnote'] = isset($_POST['clientnote']) ? $_POST['clientnote'] : '';
  $data['adminnote'] = isset($_POST['adminnote']) ? $_POST['adminnote'] : '';
  $data['cycles'] = isset($_POST['cycles']) ? $_POST['cycles'] : '';
  $data['custom_recurring'] = isset($_POST['custom_recurring']) ? $_POST['custom_recurring'] : '';
  $data['recurring_type'] = isset($_POST['recurring_type']) ? $_POST['recurring_type'] : '';
  $data['subtotal'] = isset($_POST['subtotal']) ? $_POST['subtotal'] : '';
  $data['adjustment'] = isset($_POST['adjustment']) ? $_POST['adjustment'] : '';
  $data['total'] = isset($_POST['total']) ? $_POST['total'] : '';

  $invoice_table ='tblinvoices';
  $invoiceData = $this->invoiceModel->insert($invoice_table,$data);
 
 $itemTable='tblitem_tax';
  //echo $insertData;die;
    if( $invoiceData){
      $rateArray = isset($_POST['rate1']) ? $_POST['rate1'] : '';
$taxArray = isset($_POST['tax1']) ? $_POST['tax1'] : '';
if (is_array($rateArray) || is_object($rateArray))
{
foreach($taxArray as $index => $value) {
  if($taxArray[$index] == 0 ||  $taxArray[$index] == ""){
  $taxvalue= '';
  }else{
    $taxvalue= $taxArray[$index];
       $itemData['taxrate']= $taxvalue;
   $itemData['rel_id']= $invoiceData;
   $itemData['rel_type']= 'proposal';
   $itemData['itemid'] = isset($_POST['itemid']) ? $_POST['itemid'] : '';
   $itemData['taxname'] = isset($_POST['taxname']) ? $_POST['taxname'] : '';
$item = $this->invoiceModel->insert($itemTable, $itemData);
  }
   
}
}
if (is_array($rateArray) || is_object($rateArray))
{
foreach($rateArray as $index => $value) {
   $itemArrData['rate']= $rateArray[$index];
   $itemArrData['rel_id']= $invoiceData;
   $itemArrData['rel_type']= 'proposal';
   $itemArrData['description']= isset($_POST['description']) ? $_POST['description'] : '';
   $itemArrData['long_description']= isset($_POST['long_description']) ? $_POST['long_description'] : '';
   $itemArrData['unit'] = isset($_POST['unit']) ? $_POST['unit'] : '';
$itemD = $this->invoiceModel->insert('tblitemable', $itemArrData);   
}
}
$tagTable = 'tbltaggables';
$tagArray = isset($_POST['tag']) ? $_POST['tag'] : '';
if (is_array($tagArray) || is_object($tagArray))
{
foreach($tagArray as $index => $value) {
   $tagData['tag_id']= $tagArray[$index];
   $tagData['rel_id']= $invoiceData;
   $tagData['rel_type']= 'proposal';
  
  // echo "<pre>";
  // print_r($tagData);die;
$tags = $this->invoiceModel->insert($tagTable, $tagData);
}
}
 }

} 



}
?>