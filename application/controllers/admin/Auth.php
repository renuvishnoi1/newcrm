<?php 
/**
 * 
 */
class Auth extends MY_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('admin/Auth_model');
		
		//$this->load->model('admin/Setting_model');
	}
	function index(){
        
		$data['page_title']='Dashboard';
		//$data['user_list']=$this->Setting_model->get_list('tblstaff');
		
		$this->admin_load('dashboard',$data);
	}
	function login(){
		$email=$this->input->post('email');
		$password=md5($this->input->post('password'));
		if($email && $password){
			$data=$this->Auth_model->get_user_details_byemail_password($email,$password);
			if($data){
			$session=array(
				'email'=>$data->email,
				'id'=>$data->staffid,
				'name'=>$data->firstname,
				'pic'=>$data->profile_image
			);
			$this->session->set_userdata('sessiondata',$session);
			$this->session->set_flashdata('success','Login Successfully..');
			echo "success";
		}else{
			echo "invalid";
		}

		}else{
			echo "error";
		}
	}
	function logout(){
		
		$this->session->set_userdata('sessiondata','');
		$this->session->set_flashdata('success','Logout Successfully...');
		redirect('admin/');
	}
	function forget_password(){
		$data['page_title']='Forget Password';
		$this->load->view('admin/forget_password');
	}
	
	
	public function doforget()
	{
		$email= $this->input->post('emailid');
		$this->load->library('form_validation');
		$this->form_validation->set_rules('emailid','emailid','required');
		 if ($this->form_validation->run() == FALSE)
			{
	        redirect('admin/auth/forget_password');
	 
			}
			else
			{
		
		    $query1=$this->db->query("SELECT * from tbl_admin where email = '".$email."' ");
		    if ($query1->num_rows()>0)
		{
            $res = $query1->result();
            $user=$res[0];
			$this->load->helper('string');
			$password= random_string('alnum',6);
			$this->db->where('id', $user->id);
			$this->db->update('tbl_admin',array('password'=>MD5($password)));
			
			$this->load->library('email');
			$this->email->from('ranoliaventures.co.in', 'ranoliaventures support');
			$this->email->to($user->email); 	
			$this->email->subject('Password reset');
			$this->email->message('You have requested for the new password, Here is your new password:-'. $password);	
			$this->email->send();
		    $this->session->set_flashdata('success','Kindly Check Your mail Id We have sent New Password on Your Mail...');
            //echo "<script>alert('Kindly Check Your mail Id We have sent New Password on Your MAil Id...')</script>";
            			
		   redirect(base_url() . 'admin/', 'refresh');
		   }
		   else{
			   // echo "<script>alert(' $email not found, please enter correct email id')</script>";
			   $this->session->set_flashdata('error','$email not found, please enter correct email id...');
                redirect('admin/auth/forget_password');
				
		   }
		   }
	}

}
?>