<?php

defined('BASEPATH') or exit('No direct script access allowed');

class EstimateController extends MY_Controller
{


  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/EstimateModel');
  }

  /* List all available items */
  public function index(){
    $data['title'] = "Estimates";

    $data['proposal']= $this->EstimateModel->get();
  
    // echo "<pre>";
    // print_r($data);die;
    $this->admin_load('estimates/estimate_list',$data); 
  }
public function addEstimate(){
  $data['title'] = "Add Estimates";
  $this->admin_load('estimates/add_estimate',$data);
}

}
