<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProjectController extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/ProjectModel');
    

  }

  public function index()
  {
    $data['title'] = "Customers";
    $data['records']= $this->ContactsModel->getClients();
   
   $this->admin_load('contacts/client_list',$data); 
  }
  


}
