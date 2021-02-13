<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ContactController extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/ContactsModel');
    

  }

  public function index()
  {
    $data['title'] = "Customers";
    $data['records']= $this->ContactsModel->getClients();
    // echo "<pre>";
    //     print_r($data);
    //     die;
    $this->admin_load('contacts/client_list',$data); 
  }
  public function addClient(){
   $data['groups'] = $this->ContactsModel->get_costomer_groups();
   $data['country'] = $this->ContactsModel->get_countries();
   $data['currencies'] = $this->ContactsModel->get_currencies();
   $data['title'] = "Add Customers";
//die($this->app->get_available_languages());
   $this->admin_load('contacts/add_client',$data);
 }
 public function insertClient(){

  if ($this->form_validation->run('add_client') == FALSE)
  {
    $data['title'] = "Add Customers";
    $this->admin_load('contacts/add_client',$data);
  }
  else
  {
    $company= $this->input->post('company');
    $vat= $this->input->post('vat');
    $phonenumber= $this->input->post('phonenumber');
    $website= $this->input->post('website');               
    $group = $this->input->post('groups');
    $default_currency = $this->input->post('default_currency');
    $default_language = $this->input->post('default_language');
    $address = $this->input->post('address');
    $state= $this->input->post('state');
    $city = $this->input->post('city');
    $zip = $this->input->post('zip');
    $country = $this->input->post('country');
    $billing_street = $this->input->post('billing_street');
    $billing_state = $this->input->post('billing_state');
    $billing_city = $this->input->post('billing_city');
    $billing_zip = $this->input->post('billing_zip');
    $billing_country = $this->input->post('billing_country');
    $shipping_street = $this->input->post('shipping_street');
    $shipping_state = $this->input->post('shipping_state');
    $shipping_city = $this->input->post('shipping_city');
    $shipping_zip = $this->input->post('shipping_zip');
    $shipping_country = $this->input->post('shipping_country');
    $datecreated = date('Y-m-d H:i:s');
    $data = array(
      'company'=>$company,
      'vat'=>$vat,
      'phonenumber'=>$phonenumber,
      'website'=>$website,
      'default_currency'=>$default_currency,
      'default_language' =>$default_language,
      'address'=>$address,
      'state'=>$state,
      'city'=>$city,
      'zip'=>$zip,
      'country'=>$country,
      'billing_street'=>$billing_street,
      'billing_state'=>$billing_state,
      'billing_city'=>$billing_city,
      'billing_zip' =>$billing_zip,
      'billing_country'=>$billing_country,
      'shipping_street'=>$shipping_street,
      'shipping_state' =>$shipping_state,
      'shipping_city'=>$shipping_city,
      'shipping_zip'=>$shipping_zip,
      'shipping_country'=>$shipping_country,
      'datecreated'=>$datecreated
    );

    $insert_contact = $this->ContactsModel->addClient($data);
    if($insert_contact){
      if(is_array($group)){

        foreach ($group as $key => $value) {
          $groupdata=array();
          $groupdata['customer_id']=$insert_contact;
          $groupdata['groupid']=$value;
          $group= $this->ContactsModel->add_group($groupdata);
                    // print_r($group);
                    // die('hi');
          if($group){
            redirect('admin/clients');
          }
        }
      }
      redirect('admin/clients');
    }
  }
}
public function allContact(){
  $data['title'] = "Contacts";
  $data['records']= $this->ContactsModel->get_all_contacts();
  $this->admin_load('contacts/contact_details/all_contact',$data);
}
/****edit customer *****/
public function editClient($id){
  if($id != ''){
    $data['title'] = "Edit Costomer";
    $data['contact'] = $this->ContactsModel->getDataById($id);
    $data['groups'] = $this->ContactsModel->get_costomer_groups();
    $data['country'] = $this->ContactsModel->get_countries();
    $data['currencies'] = $this->ContactsModel->get_currencies();

    $this->admin_load('contacts/edit_client_profile',$data);
  }
  /********update customer *****/

}
// delete customer and customer's contacts
public function deleteClient($customer_id){
  $deleteClient = $this->ContactsModel->deleteClient($customer_id);

  return redirect('admin/clients');
}

public function viewContactlistById($id){
  $data['title'] = "Contact List";
  $data['userid'] = $id;
  $data['contact'] = $this->ContactsModel->getDataById($id);
  $data['records']= $this->ContactsModel->get_all_contacts($id);
  // echo "<pre>";
  //   print_r($data);
  //   die;
  $this->admin_load('contacts/edit_client_contact',$data);

}
      // delete contact by customer id and contact id
public function deleteContact($customer_id,$contact_id){
  // die('hi');
  $userid=$customer_id;
  $contactDelete = $this->ContactsModel->deleteContact($customer_id,$contact_id);
      // echo "<pre>";
      // print_r($contactDelete->profile_image);die;
      // if(file_exists(base_url()."assets/uploads/profile_image/".$q->profile_image)){
      //     unlink(base_url()."assets/uploads/profile_image/".$q->profile_image);
      // }

  if($contactDelete){
    redirect('admin/edit_contact_list/'.$userid);
  }

}
public function addContact($id){
  $data['title'] = "Add Contact";
  $data['contact'] = $this->ContactsModel->getDataById($id);
  $this->admin_load('contacts/contact_details/add_contact',$data);
}
public function inserContact(){
 $userid = $this->input->post('userid');
 if ($this->form_validation->run('add_contact') == FALSE)
 {
   $data['title'] = "Add Contact";
   $data['contact'] = $this->ContactsModel->getDataById($userid);
   $this->admin_load('contacts/contact_details/add_contact',$data);
 }
 else
 {

   $f_name = $this->input->post('firstname');
   $l_name = $this->input->post('lastname');
   $phone = $this->input->post('phonenumber');
   $email = $this->input->post('email');
   $position = $this->input->post('title');
   $direction = $this->input->post('direction');
   $pass = $this->input->post('password');

   $data['firstname'] = $f_name;
   $data['lastname'] = $l_name;
   $data['email'] = $email;
   $data['title'] = $position;
   $data['direction'] = $direction;
   $data['userid'] = $userid;
   $data['datecreated'] =date('Y-m-d H:i:s');
   $data['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);


   if(!empty($_FILES['image']['name'])){ 
          // File upload path 
    $path= "assets/uploads/profile_image/";
          // image upload
    $upload_file=$this->do_upload_image('image',$path);

    $image_name=$upload_file['upload_data']['file_name'];
        // create thumbnail from image code
    $source_path = $path.$image_name;
    $thumb_path = $path.'thumbnail/'; 

    $thumb_width = 280; 
    $thumb_height = 175; 
         // Image resize config 
    $CI = & get_instance();
    $config                   = [];
    $config['image_library']    = 'gd2'; 
    $config['source_image']     = $source_path; 
    $config['new_image']         = $thumb_path; 
    $config['maintain_ratio']     = true; 
    $config['width']            = $thumb_width; 
    $config['height']           = $thumb_height;
         // Load and initialize image_lib library
    $CI->image_lib->initialize($config);
    $CI->image_lib->resize();
    $CI->image_lib->clear();
    $data['profile_image'] = $image_name;
  }

  $addData = $this->ContactsModel->insertContact($data);
  if($addData){
    redirect('admin/edit_contact_list/'.$userid);
  }

}
}   
public function editContact($id){
  $data['title'] = "Edit Contact";
  $data['contact'] = $this->ContactsModel->getContactById($id);
  $this->admin_load('contacts/contact_details/edit_contact',$data);
}

public function updateContact(){
 $userid = $this->input->post('userid');
 $id = $this->input->post('id');
 if ($this->form_validation->run('edit_contact') == FALSE)
 {
  $data['title'] = "Edit Contact";
  $data['contact'] = $this->ContactsModel->getContactById($id);
  $this->admin_load('contacts/contact_details/edit_contact',$data);
}
else
{
 $f_name = $this->input->post('firstname');
 $l_name = $this->input->post('lastname');
 $phone = $this->input->post('phonenumber');
 $email = $this->input->post('email');
 $position = $this->input->post('title');
 $direction = $this->input->post('direction');
 $pass = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

 $data['firstname'] = $f_name;
 $data['lastname'] = $l_name;
 $data['email'] = $email;
 $data['title'] = $position;
 $data['direction'] = $direction;

 $data['phonenumber'] = $phone;
 if($pass != ''){
  $data['password'] = $pass;
}

if(!empty($_FILES['image']['name'])){ 
          // File upload path 
  $path= "assets/uploads/profile_image/";
          // image upload
  $upload_file=$this->do_upload_image('image',$path);

  $image_name=$upload_file['upload_data']['file_name'];
        // create thumbnail from image code
  $source_path = $path.$image_name;
  $thumb_path = $path.'thumbnail/'; 

  $thumb_width = 280; 
  $thumb_height = 175; 
                          // Image resize config 
  $CI = & get_instance();
  $config                   = [];
  $config['image_library']    = 'gd2'; 
  $config['source_image']     = $source_path; 
  $config['new_image']         = $thumb_path; 
  $config['maintain_ratio']     = true; 
  $config['width']            = $thumb_width; 
  $config['height']           = $thumb_height;
         // Load and initialize image_lib library 

  $CI->image_lib->initialize($config);
  $CI->image_lib->resize();
  $CI->image_lib->clear();
  $data['profile_image'] = $image_name;
}


$updateData = $this->ContactsModel->updateContact($id,$data);
if($updateData){
 redirect('admin/edit_contact_list/'.$userid);
}
}
}

public function updateClientStatus($client_id){

  $status = $this->input->post('status');
  $status= $this->ContactsModel->updateClientStatus($client_id,$status);
  if($status){
    redirect('admin/clients');
  }
}
public function updateClient(){


}
/******image upload function ********/
public function do_upload_image($file, $path='') {
  $config['upload_path'] = $path;
  $config['allowed_types'] = 'jpg|png|jpeg';
  $config['max_size'] = 2048;
  $config['encrypt_name'] = TRUE;
//        $config['max_width'] = 1024;
//        $config['max_height'] = 768;
  $this->load->library('upload', $config);

  if (!$this->upload->do_upload($file)) {
    $data = array('error' => $this->upload->display_errors());
  } else {
    $data = array('upload_data' => $this->upload->data());
  }

  return $data;
} 
public function changestatus(){
 // die('hi');
 $status= $this->input->post('status');
 $id= $this->input->post('id');
 $data=array();
 $data['active']=$status;
 $userid = array('userid'=>$id);
 $table= ' tblclients';
 $statusupdate = $this->ContactsModel->updateStatus($userid,$data,$table);
 if($statusupdate){
  redirect('admin/clients');
}
}
// add import contact load
public function importContacts(){
  $data['title'] = "Contacts Import"; 
  $data['groups'] = $this->ContactsModel->get_costomer_groups();
  $this->admin_load('contacts/import_contacts',$data);
}

  //export contact sample data file
public function export_csv() {
  $this->load->helper('csv');
  $export_arr = array();
        //$employee_details = $this->employees_model->get();
  $title = array("User Id", "Firstname", "Lastname", "Email", "Contact phonenumber", "Position", "Company", "Vat", "Phonenumber", "Country", "City", "Zip", "State", "Address", "Website","Billing street","Billing city","Billing state","Billing zip","Billing country","Shipping street","Shipping city","Shipping state","Shipping zip","Shipping country","Longitude","Latitude","Stripe id");
  array_push($export_arr, $title);
        // if (!empty($employee_details)) {
        //     foreach ($employee_details as $employee) {
        //         array_push($export_arr, array($employee->id, $employee->name, $employee->email, $employee->mobile, $employee->created_at));
        //     }
        // }
  convert_to_csv($export_arr, 'contacts-' . date('Y-m-d') . '.csv', ',');
}
public function import_csv() {
  $this->load->library('Csvimport');
 
        //Check file is uploaded in tmp folder
  if (is_uploaded_file($_FILES['file']['tmp_name'])) {
            //validate whether uploaded file is a csv file
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    $mime = get_mime_by_extension($_FILES['file']['name']);
    $fileArr = explode('.', $_FILES['file']['name']);
    $ext = end($fileArr);
    if (($ext == 'csv') && in_array($mime, $csvMimes)) {
      $file = $_FILES['file']['tmp_name'];
      $csvData = $this->csvimport->get_array($file);
      $headerArr = array("User Id","Firstname", "Lastname", "Email", "Contact phonenumber", "Position", "Company", "Vat", "Phonenumber", "Country", "City", "Zip", "State", "Address", "Website","Billing street","Billing city","Billing state","Billing zip","Billing country","Shipping street","Shipping city","Shipping state","Shipping zip","Shipping country","Longitude","Latitude","Stripe id");
      if (!empty($csvData)) {
                    //Validate CSV headers
        $csvHeaders = array_keys($csvData[0]);
        $headerMatched = 1;
        foreach ($headerArr as $header) {
          if (!in_array(trim($header), $csvHeaders)) {
            $headerMatched = 0;
          }
        }
        if ($headerMatched == 0) {
          $this->session->set_flashdata("error_msg", "CSV headers are not matched.");
          redirect('admin/leads');
        } else {
          foreach ($csvData as $row) {
            $contact_data = array(
              "userid" => $row['User Id'],
              "firstname" => $row['Firstname'],
              "lastname" => $row['Lastname'],
              "email" => $row['Email'],
              "password" => md5($this->input->post('password')),
              "phonenumber" => $row['Contact phonenumber'],
              "title" => $row['Position'],
            );
            $contact_tbl = "tblcontacts";
            $contactData= $this->ContactsModel->insert($contact_tbl, $contact_data);
             $client_data= array(
              'company' => $row['Company'],
              'vat' => $row['Vat'],
              'phonenumber' => $row['Phonenumber'],
              'country' => $row['Country'],
              'city' => $row['City'],
              'zip' => $row['Zip'],
              'state' => $row['State'],
              'address' => $row['Address'],
              'website' => $row['Website'],
              'billing_street' => $row['Billing street'],
              'billing_city' => $row['Billing city'],
              'billing_state' => $row['Billing state'],
              'billing_zip' => $row['"Billing zip'],
              'billing_country' => $row['Billing country'],
              'shipping_street' => $row['Shipping street'],
              'shipping_city' => $row['Shipping city'],
              'shipping_state' => $row['Shipping state'],
              'shipping_zip' => $row['Shipping zip'],                
              'shipping_country' => $row['Shipping country'],
              'longitude' => $row['Longitude'],
              'latitude' => $row['Latitude'],
              'stripe_id' => $row['Stripe id'],                            
            );
            $client_tbl = 'tblclients';
            $insert_client = $this->ContactsModel->insert($client_tbl, $client_data);
            // if($insert_client){
            //   if(is_array($group)){

            //     foreach ($group as $key => $value) {
            //       $groupdata=array();
            //       $groupdata['customer_id']=$insert_client;
            //       $groupdata['groupid']=$value;
            //       $group= $this->ContactsModel->add_group($groupdata);
            //                   // print_r($group);
            //                   // die('hi');
            //       if($group){
            //         redirect('admin/clients');
            //       }
            //     }
            //   }
            //   redirect('admin/clients');
            // }
          }
          $this->session->set_flashdata("success_msg", "CSV File imported successfully.");
          redirect('admin/clients');
        }
      }
    } else {
      $this->session->set_flashdata("error_msg", "Please select CSV file only.");
      redirect('admin/clients');
    }
  } else {
    $this->session->set_flashdata("error_msg", "Please select a CSV file to upload.");
    redirect('admin/clients');
  }
}

}
