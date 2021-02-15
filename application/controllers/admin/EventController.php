<?php
defined('BASEPATH') or exit('No direct script access allowed');

class EventController extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/EventModel');  
    

  }
  public function index(){
    //die('hi');
  	$data['title'] = "Calender";
  
    $this->admin_load('events/event_list',$data); 
  }
   public function load()
 {

  $event_data = $this->EventModel->fetch_all_event();
  // echo "<pre>";
  // print_r($event_data);die;
  foreach($event_data->result_array() as $row)
  {
   $data[] = array(
    'eventid' => $row['eventid'],
    'title' => $row['title'],
    'start' => $row['start'],
    'end' => $row['end']
   );
  }
  echo json_encode($data);
 }
 public function insert()
 {
  // print_r($_POST);
  // die("hi");
  if($this->input->post('title'))
  {
   $data = array(
    'title'  => $this->input->post('title'),
    'start'=> $this->input->post('start'),
    'end' => $this->input->post('end')
   );
   $this->EventModel->insert_event($data);
  }
 }

 function update()
 {
  if($this->input->post('id'))
  {
   $data = array(
    'title'   => $this->input->post('title'),
    'start' => $this->input->post('start'),
    'end'  => $this->input->post('end')
   );

   $this->EventModel->update_event($data, $this->input->post('id'));
  }
 }

 function delete()
 {
  //print_r($_POST);die;
  if($this->input->post('id'))
  {
   $this->EventModel->delete_event($this->input->post('id'));
  }
 
  }
}
?>