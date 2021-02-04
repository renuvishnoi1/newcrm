<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('home_model');
		
	}
	public function index()
	{
		redirect('/admin');
		$this->load->view('template/header');
		$this->load->view('index');
		$this->load->view('template/footer');
   }
   
   public function purity_miter()
	{
		$this->load->view('template/header');
		$this->load->view('purity_miter');
		$this->load->view('template/footer');
   }
   
    public function test_report()
	{
		$this->load->view('template/header');
		$this->load->view('test_report');
		$this->load->view('template/footer');
   }
   
    public function gallery()
	{
		$this->load->view('template/header');
		$this->load->view('gallery');
		$this->load->view('template/footer');
   }
   
   public function faq()
	{
		$this->load->view('template/header');
		$this->load->view('faq');
		$this->load->view('template/footer');
   }
   
    public function how_it_work()
	{
		$this->load->view('template/header');
		$this->load->view('how_it_work');
		$this->load->view('template/footer');
    }
   
    public function categories()
	{  
		$data['categories']=$this->home_model->get_all_records('tbl_category',0);
		$this->load->view('template/header');
		$this->load->view('our_categories',$data);
		$this->load->view('template/footer');
    }
	
	 public function sub_categories($id)
	{
		$data['categories']=$this->home_model->get_all_records('tbl_category',$id);
		if(!$data['categories']){
			redirect('home/products/'.$id);
		}
		$this->load->view('template/header');
		$this->load->view('products',$data);
		$this->load->view('template/footer');
    }
   
    public function products($id)
	{
		$p_id=$this->home_model->get_recordby_parent_id('tbl_category',$id);
		$data['get_pid']=isset($p_id->p_id)? $p_id->p_id:'';

		$data['products']=$this->home_model->get_products_bycat_id('tbl_products',$id);
		$this->load->view('template/header');
		$this->load->view('products',$data);
		$this->load->view('template/footer');
    }
	
	public function products_details($id)
	{
		$data['city']=$this->home_model->get_list('tbl_city');
		$data['product']=$this->home_model->get_product_byid('tbl_products',$id);
		$this->load->view('template/header');
		$this->load->view('product_detials',$data);
		$this->load->view('template/footer');
    }
	public function get_area()
	{
	  $city_id=$this->input->get('city_id');
	  $data=$this->home_model->get_area_list('tbl_area',$city_id);
	  echo "<option value=''>--Select Area--</option>";
	  foreach($data as $value){
	  echo "<option value='".$value->id."'>".$value->name."</option>";
		  }
		
    }
	public function submit_userdeatils()
	{
	 $id=$this->input->post('pro_id');
	 $name=$this->input->post('name');
	 $phone=$this->input->post('phone');
	 $email=$this->input->post('email');
	 $otp=$this->input->post('otp');
	 $city=$this->input->post('city');
	 $area=$this->input->post('area');
	 $address=$this->input->post('address');
	 $date=$this->input->post('date');
	 $is_referred=$this->input->post('is_referred');
	 $is_online=$this->input->post('is_online');
	 if($is_referred){
		 $is_referred="yes";
	 }else{ $is_referred="no"; }
	  if($is_online){
		 $is_online="yes";
	 }else{  $is_online="no"; }

	 $insert_array=array(
					'name'=>$name,
					'phone'=>$phone,
					'email'=>$email,
					'otp'=>$otp,
					'city_id'=>$city,
					'area'=>$area,
					'address'=>$address,
					'is_referred'=>$is_referred,
					'is_online'=>$is_online,
				    'date'=>$date,
				    'updated_date'=>date('Y-m-d H:i:s')
			      );
			$this->db->insert('tbl_users',$insert_array);
            $this->session->set_flashdata('success','Add Successfully');
			redirect('products_details/'.$id);
    }
	
	function processMobileVerification()
    {
        switch ($_POST["action"]) {
            case "send_otp":
                
                $mobile_number = $_POST['mobile_number'];
                $numbers = array(
                    $mobile_number
                );
				
                $otp = rand(1000, 9999);
                $_SESSION['session_otp'] = $otp;
                $message = "Your One Time Password is " . $otp;
                try{
				  echo $message ; die;
                    exit();
                }catch(Exception $e){
                    die('Error: '.$e->getMessage());
                }
                break;
                
            case "verify_otp":
                $otp = $_POST['otp'];
                
                if ($otp == $_SESSION['session_otp']) {
                    unset($_SESSION['session_otp']);
                    echo json_encode(array("type"=>"success", "message"=>"Your mobile number is verified!"));
                } else {
                    echo json_encode(array("type"=>"error", "message"=>"Mobile number verification failed"));
                }
                break;
        }
    }

}
?>