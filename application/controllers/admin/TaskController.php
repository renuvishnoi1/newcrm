<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TaskController extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/TaskModel');
    

  }

  public function index()
  {
    $data['title'] = "Tasks";
    $data['records']= $this->TaskModel->get_list('tbltasks');
    
    $this->admin_load('tasks/task_list',$data); 
  }
  public function addTask(){
   $data['title'] = "Add Tasks";
    
    $this->admin_load('tasks/add_task',$data); 
  }
  public function fetchRelatedData(){
    die('hi');
     $value = $this->input->post("value");
      //$data = $this->mymodal->get_data($value);
      $option ="";
      foreach($data as $d)
      {
         $option .= "<option value='".$d->id."' >".$d->name."</option>";
      }
       echo $option;
  }


}
