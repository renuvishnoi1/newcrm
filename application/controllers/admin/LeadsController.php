<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LeadsController extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/LeadsModel');  
    $this->load->model('admin/ContactsModel');
     // $this->load->model('admin/LeadsStatusModel');    

  }
  public function index(){
  	$data['title'] = "Lead";
   // $data['records'] = $this->LeadsModel->get_list('tblleads');
    $data['records'] = $this->LeadsModel->get();
     // echo "<pre>";
     // print_r($data);die;

    $this->admin_load('leads/leads_list',$data); 
  }
  public function addLead(){
    $data['title'] = "Lead";
    $data['source'] = $this->LeadsModel->get_list('tblleads_sources');
    $data['status'] = $this->LeadsModel->get_list('tblleads_status');
    $data['assign'] = $this->LeadsModel->get_assign_list('tblstaff');

    //$data['tag'] = $this->LeadsModel->get_list();

    $data['tag'] = $this->LeadsModel->get_list('tblleads');
    $data['country'] = $this->ContactsModel->get_countries();
     // echo "<pre>";
     // print_r($data['assign']);
     // die;
    $this->admin_load('leads/add_lead',$data); 
  }
  public function insertLead(){
   // echo "<pre>";
   // print_r($_POST);
   // die;
    if($this->form_validation->run('add_lead') == FALSE){
       $data['title'] = "Lead";
    $data['source'] = $this->LeadsModel->get_list('tblleads_sources');
    $data['status'] = $this->LeadsModel->get_list('tblleads_status');
    $data['assign'] = $this->LeadsModel->get_assign_list('tblstaff');

    //$data['tag'] = $this->LeadsModel->get_list();

    $data['tag'] = $this->LeadsModel->get_list('tblleads');
    $data['country'] = $this->ContactsModel->get_countries();
      $this->admin_load('leads/add_lead',$data); 
    }else{

      $data= array(
        'name'=>$this->input->post('name'),
        'title'=>$this->input->post('title'),
        'source'=>$this->input->post('source'),
        'company'=>$this->input->post('company'),
        'description'=>$this->input->post('description'),
        'country'=>$this->input->post('country'),
        'zip'=>$this->input->post('zip'),
        'city'=>$this->input->post('city'),
        'state'=>$this->input->post('state'),
        'address'=>$this->input->post('address'),
        'assigned'=>$this->input->post('assigned'),
        'dateadded'=>date('Y-m-d H:i:s'),
        'status'=>$this->input->post('status'),
        'lastcontact'=>$this->input->post('lastcontact'),
        'email'=>$this->input->post('email'),
        'website'=>$this->input->post('website'),
        'is_public'=>$this->input->post('is_public'),
        'default_language'=>$this->input->post('default_language'),
        'lead_value'=>$this->input->post('lead_value'),
      );
      $table = 'tblleads';
      $insertData= $this->LeadsModel->insert($table, $data);
       // echo "<pre>";
       //  print_r($insertData);die;
      if($insertData){
        if($this->input->post('tag') !=''){
          $tag= array('name'=>$this->input->post('tag'));
          $taginsert = $this->LeadsModel->insert('tbltags', $tag);
          if($taginsert){
            $taggable= array(
              'rel_id'=>$insertData,
              'rel_type'=>'lead',
              'tag_id'=>$taginsert,
            );
            $taggableinsert= $this->LeadsModel->insert('tbltaggables', $taggable);
            if($taggableinsert){
              redirect('admin/leads');
            }
          }
        // echo "<pre>";
        // print_r($taginsert);die;
        }
        // $this->session->set_flashdata('success','Add Successfully');
        redirect('admin/leads');
      }
    }


  }
  public function editLead($id){
    $data['title'] = "Edit Lead";
    $data['leads'] = $this->LeadsModel->get_lead_row($id);
    $data['source'] = $this->LeadsModel->get_list('tblleads_sources');
    $data['status'] = $this->LeadsModel->get_list('tblleads_status');
    $data['assign'] = $this->LeadsModel->get_assign_list('tblstaff');
    $data['tag_data'] = $this->LeadsModel->get_tag_data($id);
    $data['tag'] = $this->LeadsModel->get_list('tbltags');
    $data['country'] = $this->ContactsModel->get_countries();
    // echo "<pre>";
    // print_r($data);
    // die;
    $this->admin_load('leads/edit_lead',$data);
  }
  public function updateLead(){
    $id = $this->input->post('id');
    if($this->form_validation->run('edit_lead') == FALSE){
      $data['title'] = "Edit Lead";
      $data['leads'] = $this->LeadsModel->get_lead_row($id);
      $data['source'] = $this->LeadsModel->get_list('tblleads_sources');
      $data['status'] = $this->LeadsModel->get_list('tblleads_status');
      $data['assign'] = $this->LeadsModel->get_assign_list('tblstaff');
      $data['country'] = $this->ContactsModel->get_countries();
      $this->admin_load('leads/add_lead',$data); 
    }else{
      $updateData= array(
        'name'=>$this->input->post('name'),
        'title'=>$this->input->post('title'),
        'source'=>$this->input->post('source'),
        'company'=>$this->input->post('company'),
        'description'=>$this->input->post('description'),
        'country'=>$this->input->post('country'),
        'zip'=>$this->input->post('zip'),
        'city'=>$this->input->post('city'),
        'state'=>$this->input->post('state'),
        'address'=>$this->input->post('address'),
        'assigned'=>$this->input->post('assigned'),
        'dateadded'=>date('Y-m-d H:i:s'),
        'status'=>$this->input->post('status'),
        'lastcontact'=>$this->input->post('lastcontact'),
        'email'=>$this->input->post('email'),
        'website'=>$this->input->post('website'),
        'is_public'=>$this->input->post('is_public'),
        'default_language'=>$this->input->post('default_language'),
        'lead_value'=>$this->input->post('lead_value'),
      );
      echo "<pre>";
      print_r($updateData);
      die;
      $updateLead= $this->LeadsModel->update($updateData,$id);

    }

  }
   public function showLead($id){
    $data['title'] = "Show Lead";
    $data['leads'] = $this->LeadsModel->get_lead_row($id);
    $data['source'] = $this->LeadsModel->get_list('tblleads_sources');
    $data['status'] = $this->LeadsModel->get_list('tblleads_status');
    $data['assign'] = $this->LeadsModel->get_assign_list('tblstaff');
    $data['tag_data'] = $this->LeadsModel->get_tag_data($id);
    $data['tag'] = $this->LeadsModel->get_list('tbltags');
    $data['country'] = $this->ContactsModel->get_countries();
    // echo "<pre>";
    // print_r($data);
    // die;
    $this->admin_load('leads/show_lead',$data);
  }
  public function importLeads(){
    $data['title'] = "Leads Import"; 
    $data['source'] = $this->LeadsModel->get_list('tblleads_sources');
    $data['status'] = $this->LeadsModel->get_list('tblleads_status');
    $data['assign'] = $this->LeadsModel->get_assign_list('tblstaff');
    $data['country'] = $this->ContactsModel->get_countries();
     // echo "<pre>";
     //  print_r($data);
     //  die;
    $this->admin_load('leads/import_leads',$data);
  }
  public function export_csv() {
    $this->load->helper('csv');
    $export_arr = array();
        //$employee_details = $this->employees_model->get();
    $title = array( "Name", "Position", "Company", "Description", "Country", "Zip", "City", "State", "Address", "Email", "Website", "Phonenumber", "Lead value", "Tags");
    array_push($export_arr, $title);
        // if (!empty($employee_details)) {
        //     foreach ($employee_details as $employee) {
        //         array_push($export_arr, array($employee->id, $employee->name, $employee->email, $employee->mobile, $employee->created_at));
        //     }
        // }
    convert_to_csv($export_arr, 'leads-' . date('Y-m-d') . '.csv', ',');
  }
  public function import_csv() {

    $this->load->library('Csvimport');
        //Check file is uploaded in tmp folder
    if($this->form_validation->run('import_lead') == FALSE){

      $data['title'] = "Leads Import"; 
      $data['source'] = $this->LeadsModel->get_list('tblleads_sources');
      $data['status'] = $this->LeadsModel->get_list('tblleads_status');
      $data['assign'] = $this->LeadsModel->get_assign_list('tblstaff');    
      $this->admin_load('leads/import_leads',$data);
    } else {
      if (is_uploaded_file($_FILES['file']['tmp_name'])) {
            //validate whether uploaded file is a csv file
        $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
        $mime = get_mime_by_extension($_FILES['file']['name']);
        $fileArr = explode('.', $_FILES['file']['name']);
        $ext = end($fileArr);
        if (($ext == 'csv') && in_array($mime, $csvMimes)) {
          $file = $_FILES['file']['tmp_name'];

          $csvData = $this->csvimport->get_array($file);
         
          $headerArr = array( "Name", "Position", "Company", "Description", "Country", "Zip", "City", "State", "Address", "Email", "Website", "Phonenumber", "Lead value", "Tags");
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
                $employee_data = array(
                  "name" => $row['Name'],
                  "title" => $row['Position'],
                  "company" => $row['Company'],
                  "description" => $row['Description'],
                  "country" => $row['Country'],
                  "zip" => $row['Zip'],
                  "city" => $row['City'],
                  "state" => $row['State'],
                  "address" => $row['Address'],
                  "email" => $row['Email'],
                  "website" => $row['Website'],
                  "phonenumber" => $row['Phonenumber'],
                  "lead_value" => $row['Lead value'],
                  "status" => $this->input->post('status'),
                  "source" => $this->input->post('source'),
                  "assigned" => $this->input->post('assigned'),
                  "dateadded" => date('Y-m-d H:i:s'),
                );
                $table_name = "tblleads";
                $this->LeadsModel->insert($table_name, $employee_data);

              }
              $this->session->set_flashdata("success_msg", "CSV File imported successfully.");
              redirect('admin/leads');
            }
          }
        } else {
          $this->session->set_flashdata("error_msg", "Please select CSV file only.");
          redirect('admin/import_leads');
        }
      } else {
        $this->session->set_flashdata("error_msg", "Please select a CSV file to upload.");
        redirect('admin/import_leads');
      }
    }
    
  }
  public function kanban(){
    $data['title'] = "Kanban"; 
    $data['records'] = $this->LeadsModel->get();
    $this->admin_load( 'leads/kanban',$data);
  }
  public function fetchLead(){
    //die('here');
    //$this->load->view();
    $fetch_data=$this->LeadsModel->make_datatables();
    //die('here');
    $data = array();
    foreach ($fetch_data as $row) {
      $sub_array = array();
      $sub_array[] = $row->id;
      $sub_array[] = $row->company;
      $sub_array[] = '<button type="button" name = "update" id="'.$row->id.'" class="btn  btn-info">Update</button>';
      $sub_array[] = '<button type="button" name = "delete" id="'.$row->id.'" class="btn  btn-info">Delete</button>';
      $data[]= $sub_array;
      $output= array(
        "draw"=>intval($_POST["draw"]),
        "recordTotal "=>$this->LeadsModel->get_all_data(),
        "recordFiltered"=>$this->LeadsModel->get_filtered_data(),
        "data"=> $data
      );
      echo json_encode($output);

    }
  }
  public function getKanbanData(){
     $data= $this->LeadsModel->get();
     // echo "<pre>";
     // print_r($data);
     // die;
      echo json_encode($data);
  }
}
?>