<?php

defined('BASEPATH') or exit('No direct script access allowed');

class QuoteController extends MY_Controller
{


  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/QuoteModel');
  }

  /* List all available Quote */
  public function index(){
    $data['title'] = "Quote";

    $data['quote']= $this->QuoteModel->get_quote();
  // echo "<pre>";
  // print_r($data);
  // die;
   
    $this->admin_load('quote/quote_list',$data); 
  }
  /* function to load add Quote view */
  public function addQuote(){
   $data['title'] = "Quote";
    $data['clients']= $this->QuoteModel->get_list('tblclients');
    $data['leads']= $this->QuoteModel->get_list('tblleads');
    $data['tags']= $this->QuoteModel->get_list('tbltags');
    $data['assignee']= $this->QuoteModel->get_list('tblstaff');
    $data['country']= $this->QuoteModel->get_list('tblcountries');
    $data['items']= $this->QuoteModel->get_list('tblitems');
    $data['tax']= $this->QuoteModel->get_list('tbltaxes');
    $data['currencies']= $this->QuoteModel->get_list('tblcurrencies');
    
  
   $this->admin_load('quote/add_quote',$data); 
 }
 /* function for get item data by item id  */
  public function getItemDataById(){
 
  $id = $this->input->post('id');
  $data= $this->QuoteModel->get($id);

   echo json_encode($data);
}
public function getCustomerDataById(){
   $id = $this->input->post('id');
  $data = $this->QuoteModel->getCustomer($id);

   echo json_encode($data);
}
public function getLeadDataById(){
   $id = $this->input->post('id');
  $data = $this->QuoteModel->getLead($id);

   echo json_encode($data);
}
/* function insert quote  */
public function insertQuote(){
// echo "<pre>";
// print_r($_POST['long_description']);die;
$data['subject'] = isset($_POST['subject']) ? $_POST['subject'] : '';
$data['rel_id'] = isset($_POST['rel_id']) ? $_POST['rel_id'] : '';
$data['rel_type'] = isset($_POST['rel_type']) ? $_POST['rel_type'] : '';
$data['assigned'] = isset($_POST['assigned']) ? $_POST['assigned'] : '';
$data['date'] = isset($_POST['date']) ? $_POST['date'] : '';
$data['open_till'] = isset($_POST['open_till']) ? $_POST['open_till'] : '';
$data['currency'] = isset($_POST['currency']) ? $_POST['currency'] : '';
$data['discount_type'] = isset($_POST['discount_type']) ? $_POST['discount_type'] : '';
$data['allow_comments'] = isset($_POST['allow_comments']) ? $_POST['allow_comments'] : '';
$data['proposal_to'] = isset($_POST['proposal_to']) ? $_POST['proposal_to'] : '';
$data['address'] = isset($_POST['address']) ? $_POST['address'] : '';
$data['city'] = isset($_POST['city']) ? $_POST['city'] : '';
$data['state'] = isset($_POST['state']) ? $_POST['state'] : '';
$data['country'] = isset($_POST['country']) ? $_POST['country'] : '';
$data['zip'] = isset($_POST['zip']) ? $_POST['zip'] : '';
$data['email'] = isset($_POST['email']) ? $_POST['email'] : '';
$data['phone'] = isset($_POST['phonenumber']) ? $_POST['phonenumber'] : '';
$data['subtotal'] = isset($_POST['subtotal']) ? $_POST['subtotal'] : '';
$data['adjustment'] = isset($_POST['adjustment']) ? $_POST['adjustment'] : '';
$data['total'] = isset($_POST['total']) ? $_POST['total'] : '';

    $table = 'tblproposals';
    $insertData = $this->QuoteModel->insert($table, $data);
    $itemTable='tblitem_tax';
  //echo $insertData;die;
    if( $insertData){
      $rateArray = isset($_POST['rate1']) ? $_POST['rate1'] : '';
$taxArray = isset($_POST['tax1']) ? $_POST['tax1'] : '';
if (is_array($rateArray) || is_object($rateArray))
{
foreach($rateArray as $index => $value) {
   $itemData['taxrate']= $rateArray[$index];
   $itemData['rel_id']= $insertData;
   $itemData['rel_type']= 'proposal';
   $itemData['itemid']= isset($_POST['itemid']) ? $_POST['itemid'] : '';
   $itemData['taxname']= isset($_POST['taxname']) ? $_POST['taxname'] : '';
$item = $this->QuoteModel->insert($itemTable, $itemData);   
}
}
if (is_array($rateArray) || is_object($rateArray))
{
foreach($rateArray as $index => $value) {
   $itemArrData['rate']= $rateArray[$index];
   $itemArrData['rel_id']= $insertData;
   $itemArrData['rel_type']= 'proposal';
   $itemArrData['description']= isset($_POST['description']) ? $_POST['description'] : '';
   $itemArrData['long_description']= isset($_POST['long_description']) ? $_POST['long_description'] : '';
   $itemArrData['unit'] = isset($_POST['unit']) ? $_POST['unit'] : '';
$itemD = $this->QuoteModel->insert('tblitemable', $itemArrData);   
}
}
$tagTable = 'tbltaggables';
$tagArray = isset($_POST['tag']) ? $_POST['tag'] : '';
if (is_array($tagArray) || is_object($tagArray))
{
foreach($tagArray as $index => $value) {
   $tagData['tag_id']= $tagArray[$index];
   $tagData['rel_id']= $insertData;
   $tagData['rel_type']= 'proposal';
  
  // echo "<pre>";
  // print_r($tagData);die;
$tags = $this->QuoteModel->insert($tagTable, $tagData);
}
}
 }
}

// /* function to load edit items view */
public function editQuote($id){
    $data['title'] = "Edit Quote";
    $data['clients']= $this->QuoteModel->get_list('tblclients');
    $data['leads']= $this->QuoteModel->get_list('tblleads');
    $data['tags']= $this->QuoteModel->get_list('tbltags');
    $data['assignee']= $this->QuoteModel->get_list('tblstaff');
    $data['country']= $this->QuoteModel->get_list('tblcountries');
    $data['items']= $this->QuoteModel->get_list('tblitems');
    $data['tax']= $this->QuoteModel->get_list('tbltaxes');
    $data['currencies']= $this->QuoteModel->get_list('tblcurrencies');
    $data['quote']= $this->QuoteModel->get_quote($id);
    $data['quote_item'] = $this->QuoteModel->getItem($id);
    $data['item_tax'] = $this->QuoteModel->getItemTax($id);
   // echo "<pre>";
   // print_r($data);die;
   $this->admin_load('quote/edit_quote',$data);  
}


}
