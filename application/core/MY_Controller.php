<?php
defined("BASEPATH");
class MY_Controller extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Home_model');
		
	}
		
	function admin_load($page, $meta = array(), $data = array()){
		if($this->session->userdata('sessiondata')){
		$this->load->view('admin/template/header',$meta);
		$this->load->view('admin/template/sidebar',$meta);
		$this->load->view('admin/'.$page,$data);
		$this->load->view('admin/template/footer',$meta);
	}else{
		$this->load->view('admin/login');
	}
		
	}
	function page_load($page, $meta = array(), $data = array()){
		$this->load->view('template/header',$meta);
		
		$this->load->view($page,$data);
		$this->load->view('template/footer',$meta);
		
		}
		
//-----------pt change start-------------------------
		function admin_load_diff_layout($page,$data = array()){
		if($this->session->userdata('sessiondata')){
		$this->load->view('admin/'.$page,$data);
	    }else{
		$this->load->view('admin/login');
	    }
	    }
//-----------pt change end-------------------------
	
	
}
?>