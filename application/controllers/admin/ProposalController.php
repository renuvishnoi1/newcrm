<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ProposalController extends MY_Controller
{


  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/ProposalModel');
  }

  /* List all available items */
  public function index(){
    $data['title'] = "Proposals";

    $data['proposal']= $this->ProposalModel->get();
  
    // echo "<pre>";
    // print_r($data);die;
    $this->admin_load('proposals/proposal_list',$data); 
  }
  /* function to load add items view */
  public function addProposal(){
   $data['title'] = "Proposal";
    $data['clients']= $this->ProposalModel->get_list('tblclients');
    $data['leads']= $this->ProposalModel->get_list('tblleads');
    $data['tags']= $this->ProposalModel->get_list('tbltags');
    $data['assignee']= $this->ProposalModel->get_list('tblstaff');
    $data['country']= $this->ProposalModel->get_list('tblcountries');
    $data['items']= $this->ProposalModel->get_list('tblitems');
    $data['tax']= $this->ProposalModel->get_list('tbltaxes');
    // echo "<pre>";
    // print_r($data);die;

   $this->admin_load('proposals/add_proposal',$data); 
 }
 /* function for get item data by item id  */
  public function getItemDataById(){
 
 $id = $this->input->post('id');
  $data= $this->ProposalModel->get($id);

   echo json_encode($data);
}
public function getCustomerDataById(){
   $id = $this->input->post('id');
  $data = $this->ProposalModel->getCustomer($id);
// echo "<pre>";
// print_r($data);
// die;
   echo json_encode($data);
}

/* function insert proposal  */
public function insertProposal(){

 
}
/* function insert item  */
//  public function insertItem(){

//    if($this->form_validation->run('add_item') == FALSE){
//     $data['title'] = "Item";
//     $data['tax']= $this->invoiceItemsModel->get_list('tbltaxes');
//     $data['group']= $this->invoiceItemsModel->get_list('tblitems_groups');
//     $this->admin_load('invoice_items/add_item',$data); 
//   }else{

//     $data= array(
//       'description'=>$this->input->post('description'),
//       'long_description'=>$this->input->post('long_description'),
//       'rate' => $this->input->post('rate'),
//       'tax' => $this->input->post('tax1'),
//       'tax2' => $this->input->post('tax2'),
//       'unit' => $this->input->post('unit'),
//       'group_id' => $this->input->post('group_id')
//     );
//     $table = 'tblitems';
//     $insertData= $this->invoiceItemsModel->insert($table, $data);
//     if($insertData){

//       redirect('admin/invoice_items');
//     }
//   }

// }
// /* function to load edit items view */
// public function editItem($id){
//  $data['title'] = "Edit Item";
//  $data['items']= $this->invoiceItemsModel->get($id);
//  $data['tax']= $this->invoiceItemsModel->get_list('tbltaxes');
//  $data['group']= $this->invoiceItemsModel->get_list('tblitems_groups');
//           // echo "<pre>";
//           // print_r($data);
//           // die;
//  $this->admin_load('invoice_items/edit_item',$data); 
// }
// /* function to load update items */
// public function updateItem(){
//       // echo "<pre>";
//       // print_r($_POST);die;
//   $id = $this->input->post('id');
//   if($this->form_validation->run('edit_item') == FALSE){

//     $data['title'] = "Edit Item";
//     $data['items']= $this->invoiceItemsModel->get($id); 
//     $data['tax']= $this->invoiceItemsModel->get_list('tbltaxes');
//     $data['group']= $this->invoiceItemsModel->get_list('tblitems_groups');     
//     $this->admin_load('invoice_items/edit_item',$data); 

//   }else{
//     $data= array(
//       'description'=>$this->input->post('description'),
//       'long_description'=>$this->input->post('long_description'),
//       'rate' => $this->input->post('rate'),
//       'tax' => $this->input->post('tax1'),
//       'tax2' => $this->input->post('tax2'),
//       'unit' => $this->input->post('unit'),
//       'group_id' => $this->input->post('group_id')
//     );

//     $updateData= $this->invoiceItemsModel->updateItem($id, $data);
//     if($updateData){

//       redirect('admin/invoice_items');
//     }
//   }
// }
// /* function to export sample item csv   */
// public function export_csv() {
//     $this->load->helper('csv');
//     $export_arr = array();
//         //$employee_details = $this->employees_model->get();
//     $title = array( "Description", "Long description", "Rate - USD", "Tax", "Tax2", "Unit", "Group");
//     array_push($export_arr, $title);
//         // if (!empty($employee_details)) {
//         //     foreach ($employee_details as $employee) {
//         //         array_push($export_arr, array($employee->id, $employee->name, $employee->email, $employee->mobile, $employee->created_at));
//         //     }
//         // }
//     convert_to_csv($export_arr, 'items-' . date('Y-m-d') . '.csv', ',');
//   }
// /* function to load import  items view */
// public function importItems(){
//    $data['title'] = "Import";
//     $this->admin_load('invoice_items/import_item',$data);
// }
// /* function to save import  items  */
//  public function import_csv() {

//     $this->load->library('Csvimport');
//         //Check file is uploaded in tmp folder
//      if (is_uploaded_file($_FILES['file']['tmp_name'])) {
//             //validate whether uploaded file is a csv file
//         $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
//         $mime = get_mime_by_extension($_FILES['file']['name']);
//         $fileArr = explode('.', $_FILES['file']['name']);
//         $ext = end($fileArr);
//         if (($ext == 'csv') && in_array($mime, $csvMimes)) {
//           $file = $_FILES['file']['tmp_name'];

//           $csvData = $this->csvimport->get_array($file);
         
//           $headerArr = array( "Description", "Long description", "Rate - USD", "Tax", "Tax2", "Unit", "Group");
//           if (!empty($csvData)) {
//                     //Validate CSV headers
//             $csvHeaders = array_keys($csvData[0]);
//             $headerMatched = 1;
//             foreach ($headerArr as $header) {
//               if (!in_array(trim($header), $csvHeaders)) {
//                 $headerMatched = 0;
//               }
//             }
//             if ($headerMatched == 0) {
//               $this->session->set_flashdata("error_msg", "CSV headers are not matched.");
//               redirect('admin/invoice_items/import_item');
//             } else {
//               foreach ($csvData as $row) {
//                 $employee_data = array(
//                   "description" => $row['Description'],
//                   "long_description" => $row['Long description'],
//                   "rate" => $row['Rate - USD'],
//                   "tax" => $row['Tax'],
//                   "tax2" => $row['Tax2'],
//                   "unit" => $row['Unit'],
//                   "group_id" => $row['Group']                 
//                 );
//                 $table_name = "tblitems";
//                 $this->invoiceItemsModel->insert($table_name, $employee_data);

//               }
//               $this->session->set_flashdata("success_msg", "CSV File imported successfully.");
//               redirect('admin/invoice_items');
//             }
//           }
//         } else {
//           $this->session->set_flashdata("error_msg", "Please select CSV file only.");
//           redirect('admin/invoice_items/import_item');
//         }
//       }
//       else {
//         $this->session->set_flashdata("error_msg", "Please select a CSV file to upload.");
//         redirect('admin/invoice_items/import_item');
//       }
    
    
//   }
// /* function to load add item group view */
// public function group(){

//   $data['title'] = "Groups";
//   $data['records']= $this->invoiceItemsModel->get_list('tblitems_groups');

//   $this->admin_load('invoice_items/item_group/item_group_list',$data); 
// }
// /* function insert item group */
// public function addGroup(){
//   if($this->form_validation->run('add_item_group') == FALSE){
//    $data['title'] = "Add Group";
//    $data['records']= $this->invoiceItemsModel->get_list('tblitems_groups');
//    $this->admin_load('invoice_items/item_group/item_group_list',$data);
//  }else{

//   $data= array(
//     'name'=>$this->input->post('name')
//   );
//   $table = 'tblitems_groups';
//   $insertData= $this->invoiceItemsModel->insert($table, $data);
//   if($insertData){

//     redirect('admin/invoice_items/item_group');
//   }
// }

// }
// public function delete($id){
//   $table_name = "tblitems";
//   $delete = $this->invoiceItemsModel->delete($table_name,$id);
//   if($delete){
//     redirect('admin/invoice_items');
//   }

// }

}
