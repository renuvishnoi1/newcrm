<?php 
/**
 * 
 */
class Driver extends MY_Controller
{
	function __construct(){
		parent::__construct();
		$this->load->model('admin/Auth_model');
		$this->load->model('admin/Setting_model');
		$this->load->model('admin/Request_model');
		$this->load->library('form_validation');
	}
	
	function driver_list(){
		$data['page_title']='Driver List';
		$data['driver_list']=$this->Setting_model->get_list('tbl_driver');
		$this->admin_load('driver_list',$data);
	
	}
	
	public function create_driver(){
		
		$data['company_list']=$this->Setting_model->get_list('tbl_company');
		$data['page_title']='Create Driver';
		$data['agreement']= json_decode(json_encode([['id'=>'yes','name'=>'Yes'],['id'=>'no','name'=>'No']]));
		$data['driver_type']=[['id'=>1,'name'=>"Individual"],['id'=>2,'name'=>"Company"]];
		$this->admin_load('add_driver',$data);
	
	}
	public function insert_driver(){
   
		$driver_type=$this->input->post('driver_type');
		$password=$this->input->post('password');
		$email=$this->input->post('email');
		$contact=$this->input->post('contact');
		$company_id=$this->input->post('company_name');
		$track_reg_num=$this->input->post('track_reg_num');
		$first_name=$this->input->post('first_name');	
		$last_name=$this->input->post('last_name');	
		$staff_contact=$this->input->post('staff_contact');	
		$agreement=$this->input->post('agreement');
		
		$iban_no='';
		if($agreement=='yes'){
		$iban_no=$this->input->post('iban_no');	
		}
		
		if($driver_type=='2'){
			if($company_id=='' && $staff_contact==''){
				$this->session->set_flashdata('error','Please Choose Company Name and Enter Staff Number');
			$this->create_driver();
			}
		   }
			if($password && $email && $track_reg_num && $first_name && $last_name){
				
		    $uploadfile1='';
		    if($_FILES['front_image']['name']){
			$config['upload_path']='assets/bacend/driver_images';
			$config['allowed_types']='png|jpg|gif';
			$config['max_size']=0;
			$newfile=time().'_'.$_FILES['front_image']['name'];
			$config['file_name']=$newfile;
			$this->load->library('upload',$config);
				if($this->upload->do_upload('front_image')){
					$uploadfile1=$this->upload->data();
				}
			}

		    $uploadfile2='';
		    if($_FILES['back_image']['name']){
			$config['upload_path']='assets/bacend/driver_images';
			$config['allowed_types']='png|jpg|gif';
			$config['max_size']=0;
			$newfile=time().'_'.$_FILES['back_image']['name'];
			$config['file_name']=$newfile;
			$this->load->library('upload',$config);
				if($this->upload->do_upload('back_image')){
					$uploadfile2=$this->upload->data();
				}
			}
		        $insert_array=array(
			    'driver_type'=>$driver_type,
				'first_name'=>$first_name,
				'last_name'=>$last_name,
				'company_id'=>$company_id,
				'password'=>md5($password),
				'email'=>$email,
				'contact'=>$contact,
				'staff_contact'=>$staff_contact,
				'agreement'=>$agreement,
				'iban_no'=>$iban_no,
				'status'=>'0',
				'notification'=>'enabled',
				'add_by'=>$this->session->userdata('sessiondata')['id'],
				'created_date'=>date('Y-m-d H:i:s'),
				'updated_date'=>date('Y-m-d H:i:s'),
			);
			
			     $this->db->insert('tbl_driver',$insert_array);
			     $driver_id = $this->db->insert_id();
			     
			     $insert_array_sec=array(
				'driver_id'=>$driver_id,
				'track_regi_number'=>$track_reg_num,
				'front_image'=>$uploadfile1['file_name'],
				'back_image'=>$uploadfile2['file_name'],
				'created_date'=>date('Y-m-d H:i:s'),
				'updated_date'=>date('Y-m-d H:i:s'),
			    );
			
			    $this->db->insert('tbl_driver_vehicles',$insert_array_sec);
			    
			    
			    
				$this->session->set_flashdata('success','Add Successfully');
				redirect('admin/driver/driver_list');
			
			}else{
			$this->session->set_flashdata('error','All star fields are required....');
			$this->create_driver();
		     }
	
	}
	
	function edit_driver($id){
		$data['page_title']='Edit Driver';
		$data['company_list']=$this->Setting_model->get_list('tbl_company');
		$data['agreement']= json_decode(json_encode([['id'=>'yes','name'=>'Yes'],['id'=>'no','name'=>'No']]));
		$data['driver_type']=[['id'=>1,'name'=>"Individual"],['id'=>2,'name'=>"Company"]];
		$data['edit_driver']=$this->Setting_model->driver_listing($id);
		//print_r($data['edit_driver']); die;
		$this->admin_load('edit_driver',$data);
	}
	function update_driver($id){
        
	    $driver_type=$this->input->post('driver_type');
		$email=$this->input->post('email');
		$contact=$this->input->post('contact');
		$company_id=$this->input->post('company_name');
		$first_name=$this->input->post('first_name');	
		$last_name=$this->input->post('last_name');	
		$track_reg_num=$this->input->post('track_reg_num');
		$staff_contact=$this->input->post('staff_contact');	
		$front_image=$this->input->post('front_image');	
		$back_image=$this->input->post('back_image');
		$agreement=$this->input->post('agreement');
		
		$iban_no='';
		if($agreement=='yes'){
		$iban_no=$this->input->post('iban_no');	
		}
		
		if($driver_type && $first_name && $last_name){
			
			$uploadfile1='';
		    if($_FILES['front_image']['name']){
			$config['upload_path']='assets/bacend/driver_images';
			$config['allowed_types']='png|jpg|gif';
			$config['max_size']=0;
			$newfile=time().'_'.$_FILES['front_image']['name'];
			$config['file_name']=$newfile;
			$this->load->library('upload',$config);
				if($this->upload->do_upload('front_image')){
					$uploadfile1=$this->upload->data();
				}
			}
			else{
				$uploadfile1=[];
				$uploadfile1['file_name']=$front_image;
			}
        
		    $uploadfile2='';
		    if($_FILES['back_image']['name']){
			$config['upload_path']='assets/bacend/driver_images';
			$config['allowed_types']='png|jpg|gif';
			$config['max_size']=0;
			$newfile=time().'_'.$_FILES['back_image']['name'];
			$config['file_name']=$newfile;
			$this->load->library('upload',$config);
				if($this->upload->do_upload('back_image')){
					$uploadfile2=$this->upload->data();
				}
			}
			else{
				$uploadfile2=[];
				$uploadfile2['file_name']=$back_image;
			}
			
			$update_array=array(
			    'driver_type'=>$driver_type,
				'first_name'=>$first_name,
				'last_name'=>$last_name,
				'company_id'=>$company_id,
				'contact'=>$contact,
				'track_regi_number'=>$track_reg_num,
				'staff_contact'=>$staff_contact,
				'agreement'=>$agreement,
				'iban_no'=>$iban_no,
				'front_image'=>$uploadfile1['file_name'],
				'back_image'=>$uploadfile2['file_name'],
				'updated_date'=>date('Y-m-d H:i:s'),
			);
			$this->db->where('id',$id);
			$this->db->update('tbl_driver',$update_array);
			
			$update_vehicle_array=array(
				'track_regi_number'=>$track_reg_num,
				'front_image'=>$uploadfile1['file_name'],
				'back_image'=>$uploadfile2['file_name'],
				'updated_date'=>date('Y-m-d H:i:s'),
				
			);
			
			$this->db->where('id',$id);
			$this->db->update('tbl_driver_vehicles',$update_vehicle_array);
			
            $this->session->set_flashdata('success','Update Successfully');
		    redirect('admin/driver/driver_list');
		}else{
			$this->session->set_flashdata('error','All star fields are required....');
			redirect('admin/driver/edit_driver/'.$id);
		}
	}
	
	function driver_delete($id){
		$this->db->where('id',$id);
		$this->db->delete('tbl_driver');
		$this->session->set_flashdata('success','Delete Successfully');
		redirect('admin/driver/driver_list');
	}
	
	function driver_deactive($id){
		$data=array('status'=>'0');
		$this->db->where('id',$id);
		$this->db->update('tbl_driver',$data);
		$this->session->set_flashdata('success','Deactive Successfully');
			redirect('admin/driver/driver_list');
	}
	
	function driver_active($id){
		$data=array('status'=>'1');
		$this->db->where('id',$id);
		$this->db->update('tbl_driver',$data);
		$this->session->set_flashdata('success','Active Successfully');
			redirect('admin/driver/driver_list');
	}
	function is_available($id){
		$data=array('is_working'=>'1');
		$this->db->where('id',$id);
		$this->db->update('tbl_driver',$data);
		$this->session->set_flashdata('success','Active Successfully');
			redirect('admin/driver/driver_list');
	}
	function is_not_available($id){
		$data=array('is_working'=>'0');
		$this->db->where('id',$id);
		$this->db->update('tbl_driver',$data);
		$this->session->set_flashdata('success','Active Successfully');
			redirect('admin/driver/driver_list');
	}
	function driver_offline($id){
		$data=array('is_online'=>'0');
		$this->db->where('id',$id);
		$this->db->update('tbl_driver',$data);
		$this->session->set_flashdata('success','Status Change Successfully');
			redirect('admin/driver/driver_list');
	}
	
	function driver_online($id){
		$data=array('is_online'=>'1');
		$this->db->where('id',$id);
		$this->db->update('tbl_driver',$data);
		$this->session->set_flashdata('success','Status Change Successfully');
			redirect('admin/driver/driver_list');
	}
	
	
	public function add_driver_payment(){
		
		$data['company_list']=$this->Setting_model->get_list('tbl_company');
		$data['page_title']='Add Payment';
		$data['driver_type']=[['id'=>1,'name'=>"Individual"],['id'=>2,'name'=>"Company"]];
		$data['payment_type']=[['id'=>'paid','name'=>"Paid"],['id'=>'pending','name'=>"Pending"]];
		$this->admin_load('add_driver_payment',$data);
	
	}
	public function insert_driver_payment(){
   
		$driver_type=$this->input->post('driver_type');
		
		$driver_id=$this->input->post('driver_name');
		$payment_amount=$this->input->post('payment_amount');
		$payment_status=$this->input->post('payment_status');
		$payment_date=$this->input->post('payment_date');
	   if($driver_type && $driver_id && $payment_amount && $payment_status && $payment_date){
		        $insert_array=array(
			    'driver_type'=>$driver_type,
				'driver_id'=>$driver_id,
				'amount'=>$payment_amount,
				'payment_status'=>$payment_status,
				'payment_date'=>$payment_date,
				'add_by'=>$this->session->userdata('sessiondata')['id'],
				'created_date'=>date('Y-m-d H:i:s'),
				'updated_date'=>date('Y-m-d H:i:s')
			);
			
			    $this->db->insert('tbl_driver_payment',$insert_array);
				$this->session->set_flashdata('success','Add Successfully');
				redirect('admin/driver/add_driver_payment');
			
			}else{
			$this->session->set_flashdata('error','All star fields are required....');
			$this->add_driver_payment();
		     }
	
	}public function update_driver_payment($id){
   
		$driver_type=$this->input->post('driver_type');
		
		$driver_id=$this->input->post('driver_name');
		$payment_amount=$this->input->post('payment_amount');
		$payment_status=$this->input->post('payment_status');
		$payment_date=$this->input->post('payment_date');
	   if($driver_type && $driver_id && $payment_amount && $payment_status && $payment_date){
		        $insert_array=array(
			    'driver_type'=>$driver_type,
				'driver_id'=>$driver_id,
				'amount'=>$payment_amount,
				'payment_status'=>$payment_status,
				'payment_date'=>$payment_date,
				'add_by'=>$this->session->userdata('sessiondata')['id'],
				
				'updated_date'=>date('Y-m-d H:i:s')
			);
				$this->db->where('id',$id);
			    $this->db->update('tbl_driver_payment',$insert_array);
				$this->session->set_flashdata('success','Add Successfully');
				redirect('admin/driver/edit_driver_payment_list/'.$id);
			
			}else{
			$this->session->set_flashdata('error','All star fields are required....');
			$this->edit_driver_payment_list($id);
		     }
	
	}
	public function get_driver_details(){
	  $id=$this->input->get('matchvalue');
	  $data=$this->Setting_model->get_details_by_field($id,'id','tbl_driver');
	  echo "<option value=''>Select Driver</option>";
	  foreach($data as $value){
	  echo "<option value='".$value->id."'>".$value->first_name." ".$value->last_name."</option>";
		  }
     }
	 public function driver_payment_list(){
		
		$data['list']=$this->Setting_model->get_driver_payment_list();
		$data['page_title']='Payment List';
		$this->admin_load('driver_payment_list',$data);
	
	}public function edit_driver_payment_list($id){

		$data['driver_type']=[['id'=>1,'name'=>"Individual"],['id'=>2,'name'=>"Company"]];
		$data['payment_type']=[['id'=>'paid','name'=>"Paid"],['id'=>'pending','name'=>"Pending"]];
		$data['edit_data']=$this->Setting_model->get_details($id,'tbl_driver_payment');
		$data['list']=$this->Setting_model->get_list('tbl_driver');
		$data['page_title']='Edit Payment';
		$this->admin_load('driver_payment_edit',$data);
	
	}
	function driver_payment_delete($id){
		$this->db->where('id',$id);
		$this->db->delete('tbl_driver_payment');
		$this->session->set_flashdata('success','Delete Successfully');
		redirect('admin/driver/driver_payment_list');
	}
	

	
function driver_bookings($id){
		$data['page_title']='Booking Requests';
		$data['list']=$this->Request_model->get_all_request($id);
		$this->admin_load('all_request',$data);
	
	}
	
	function export_user_list(){
		$id=$this->input->post('id');
		$this->session->set_userdata('user_export_data',$id);
	}
	
	function driver_export_data(){
		
		    $ids=$this->input->post('selected_drivers');
		   
		    if(!empty($ids[0])){
		    $data=$this->Setting_model->get_list_inarray('tbl_driver',$ids[0]);
		    $filename = 'Driver_'.date('Y-m-d').'.csv'; 
            header("Content-Description: File Transfer"); 
            header("Content-Disposition: attachment; filename=$filename"); 
            header("Content-Type: application/csv; ");
            $file = fopen('php://output','w');
            $header = array("First name","Last name"); 
            fputcsv($file, $header);
            $dataexc='';
            foreach ($data as $key=>$line){ 
		       $dataexc.= $line->first_name.",".$line->last_name."\n";
	          }
	         print_r($dataexc); exit();
		        
		    }else{
		    $this->session->set_flashdata('error','Please Select At Least One Checkbox....');
			redirect('admin/driver/driver_list');
		    }
	    
	}
	
		function driver_details($id){
		$data=[];
		$data['driver_list']=$this->Setting_model->get_details($id,'tbl_driver');
		$data['vehicle_list']=$this->Setting_model->get_details_by_field_name(['driver_id'=>$id],'tbl_driver_vehicles');
		$data['request_list']=$this->Setting_model->get_details_by_field_name(['driver_id'=>$id],'booking_request');
		$data['company_list']=$this->Setting_model->get_details_by_field_name(['id'=>$data['driver_list']->company_id],'tbl_company');
		$data['number_of_request']=$this->Setting_model->get_details_by_field_name(['driver_id'=>$id],'booking_request');
		$data['number_of_completed']=$this->Setting_model->get_details_by_field_name(['driver_id'=>$id,'status'=>'completed'],'booking_request');
		
		$data['number_of_cancelled']=$this->Setting_model->get_details_by_field_name(['driver_id'=>$id,'status'=>'cancelled'],'booking_request');
		$data['number_of_not_accepted']=$this->Setting_model->get_details_by_field_name(['driver_id'=>$id,'status'=>'not accepted'],'booking_request');
		$data['number_of_not_vehicles']=$this->Setting_model->get_details_by_field_name(['driver_id'=>$id],'tbl_driver_vehicles');
		//print_r($data['number_of_not_vehicles']); die;
		
	/*	echo "<pre>";
		echo "User Details";
		print_r($data['driver_list']); 
		echo "</pre>";
	*/
		
		$data['page_title']='Driver Details';
		$this->admin_load('driver_details',$data);
		
	}
	
	public function multi_action()
    {
        $selected_id=$this->input->post('selected');
        $status=$this->input->post('status');
        
        if($status=='publish'){
        
        $this->db->where_in('id',$selected_id);
        $this->db->update('tbl_driver',['status'=>1]);
        }
        
        if($status=='unpublish'){
        
        $this->db->where_in('id',$selected_id);
        $this->db->update('tbl_driver',['status'=>0]);
        }
        
        if($status=='muldelete'){
       
        $this->db->where_in('id',$selected_id);
        $this->db->delete('tbl_driver');
        }
       
		$data['driver_list']=$this->Setting_model->get_list('tbl_driver');
		$this->admin_load_diff_layout('driver_table_list',$data);
        
    }
    
    function suggestion_list(){
		$data['page_title']='Suggestion Listing';
		$data['suggestion_list']=$this->Setting_model->get_driver_suggestion();
		$this->admin_load('driver_suggestion_list',$data);
	}
	function suggestion_delete($id){
		$this->db->where('id',$id);
		$this->db->delete('tbl_driver_suggestions');
		$this->session->set_flashdata('success','Delete Successfully');
		redirect('admin/driver/suggestion_list');
	}
	
	
	
}
?>