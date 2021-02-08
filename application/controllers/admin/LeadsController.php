<?php
defined('BASEPATH') or exit('No direct script access allowed');

class LeadsController extends MY_Controller
{
  public function __construct()
  {
    parent::__construct();
    $this->load->model('admin/LeadsModel');    

  }
  public function index(){
  	
  }
}
?>