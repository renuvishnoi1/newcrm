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
    $data['title'] = "Project";
    //$data['records']= $this->ContactsModel->getClients();
    
    $this->admin_load('projects/project_list',$data); 
  }
  public function addProject(){
   $data['title'] = "Add Project";
   $data['tags']= $this->ProjectModel->get_list('tbltags');
   $data['clients']= $this->ProjectModel->get_list('tblclients');
   $data['member']= $this->ProjectModel->get_list('tblstaff');
   
   $this->admin_load('projects/add_project',$data); 
 }
 public function saveProject(){
   if ($this->form_validation->run('add_project') == FALSE)
  {
    $data['title'] = "Add Project";
   $data['tags']= $this->ProjectModel->get_list('tbltags');
   $data['clients']= $this->ProjectModel->get_list('tblclients');
   $data['member']= $this->ProjectModel->get_list('tblstaff');
   
   $this->admin_load('projects/add_project',$data); 
  }
  else
  {
  }
 }


}
