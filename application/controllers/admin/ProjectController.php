<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ProjectController extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/TaskModel');
    $this->load->model('admin/ContactsModel');
    

  }

  public function index()
  {
    $data['title'] = "Project";
    //$data['records']= $this->ContactsModel->getClients();
    
    $this->admin_load('projects/project_list',$data); 
  }
  public function addProject(){
   $data['title'] = "Add Project";

    $data['customer']= $this->ContactsModel->getClients();
    $this->admin_load('projects/add_project',$data); 
  }
  

}
