<?php 
/**
 * 
 */
class User extends MY_Controller
{
	function __construct(){
		parent::__construct();
		//$this->load->library('excel');
		$this->load->model('admin/Auth_model');
		$this->load->model('admin/Setting_model');
		$this->load->library('form_validation');
	}
	function user_list(){
		$data['page_title']='Member Listing';
		$data['user_list']=$this->Setting_model->get_list('tbl_users');
		$this->admin_load('user_list',$data);
	}
	
	function subscriber_list(){
		$data['page_title']='Subscribers';
		$data['user_list']=$this->Setting_model->subscriber_list();
		$this->admin_load('user_list',$data);
	}
	
	public function create_user(){
	
		$data['page_title']='Create Member';
		$this->admin_load('add_user',$data);
	
	}
	
	public function insert_user(){
        
		$this->form_validation->set_rules('first_name', 'First Name', 'required',['required' => 'First Name Is Required !']);
		$this->form_validation->set_rules('last_name', 'Last Name', 'required',['required' => 'Last Name Is Required !']);
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email',['required' => 'Email Id Is Required !','valid_email'=>'Please Enter Valid Email Id !']);
		$this->form_validation->set_rules('phone', 'phone', 'trim|required|is_unique[tbl_users.phone]',
		$this->form_validation->set_rules('password', 'Password', 'required',['required' => 'Password Is Required !']),
	    ['required' => 'Phone Numbar Is Required !','is_unique' => 'Phone Numbar Is Already Exist !']);
	
       if($this->form_validation->run()){
		$first_name=$this->input->post('first_name');
		$last_name=$this->input->post('last_name');
		$email=$this->input->post('email');
		$phone=$this->input->post('phone');
		$password=$this->input->post('password');
		
		 $uploadfile='';
		    if($_FILES['profile_pic']['name']){
			$config['upload_path']='assets/bacend/user_images';
			$config['allowed_types']='png|jpg|gif';
			$config['max_size']=0;
			$newfile=time().'_'.$_FILES['profile_pic']['name'];
			$config['file_name']=$newfile;
			$this->load->library('upload',$config);
				if($this->upload->do_upload('profile_pic')){
					$uploadfile=$this->upload->data();
				}
			}
			
		 $insert_array=array(
				'first_name'=>$first_name,
				'last_name'=>$last_name,
				'email'=>$email,
				'phone'=>$phone,
				'password'=>md5($password),
				'image'=>@$uploadfile['file_name'],
				'status'=>'1',
				'notification'=>'enabled',
				'created_date'=>date('Y-m-d H:i:s'),
				'updated_date'=>date('Y-m-d H:i:s'),
			);
			$this->db->insert('tbl_users',$insert_array);
            $this->session->set_flashdata('success','Add Successfully');
			redirect('admin/user/user_list/');
       }
		else {
		validation_errors();
		//$this->session->set_flashdata('error','All star fields are required....');
		$this->create_user();
	 }
	}
	
	function edit_user($id){
		$data['page_title']='Edit member';
		$data['edit_user']=$this->Setting_model->get_details($id,'tbl_users');
		$this->admin_load('edit_user',$data);
	
	}
	function update_user($id){
		
		$first_name=$this->input->post('first_name');
		$last_name=$this->input->post('last_name');
		$email=$this->input->post('email');
		$phone=$this->input->post('phone');
		$profile_pic=$this->input->post('profile_pic');
		
		    $uploadfile='';
		    if($_FILES['profile_pic']['name']){
			$config['upload_path']='assets/bacend/user_images';
			$config['allowed_types']='png|jpg|gif';
			$config['max_size']=0;
			$newfile=time().'_'.$_FILES['profile_pic']['name'];
			$config['file_name']=$newfile;
			$this->load->library('upload',$config);
				if($this->upload->do_upload('profile_pic')){
					$uploadfile=$this->upload->data();
					
				}
				
			}
			
        $uploadfile= isset($uploadfile['file_name'])?$uploadfile['file_name']:$profile_pic;

		if($first_name && $last_name && $email && $phone){
		 $data=array(
				'first_name'=>$first_name,
				'last_name'=>$last_name,
				'email'=>$email,
				'phone'=>$phone,
				'image'=>$uploadfile,
				'updated_date'=>date('Y-m-d H:i:s'),
			);
		$this->db->where('id',$id);
		$this->db->update('tbl_users',$data);
		$this->session->set_flashdata('success','Update Successfully !');
		redirect('admin/user/user_list/');
       }
		else {
		$this->session->set_flashdata('error','All star fields are required....');
		redirect('admin/user/edit_user/'.$id);
	    }
		
	}
	function user_delete($id){
		$this->db->where('id',$id);
		$this->db->delete('tbl_users');
		$this->session->set_flashdata('success','Delete Successfully');
		redirect('admin/user/user_list');
	}
	
	function user_deactive($id){
		$data=array('status'=>'0');
		$this->db->where('id',$id);
		$this->db->update('tbl_users',$data);
		$this->session->set_flashdata('success','Deactive Successfully');
			redirect('admin/user/user_list');
	}
	
	function user_active($id){
		$data=array('status'=>'1');
		$this->db->where('id',$id);
		$this->db->update('tbl_users',$data);
		$this->session->set_flashdata('success','Active Successfully');
			redirect('admin/user/user_list');
	}
	
	function complain_list(){
		$data['page_title']='Complain Listing';
		$data['complain_list']=$this->Setting_model->get_user_complain();
		$this->admin_load('complain_list',$data);
	}
	function complain_delete($id){
		$this->db->where('id',$id);
		$this->db->delete('tbl_complains');
		$this->session->set_flashdata('success','Delete Successfully');
		redirect('admin/user/complain_list');
	}
}
?>