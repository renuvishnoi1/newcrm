<?php 
/**
 * 
 */
class Setting extends MY_Controller
{
	function __construct(){
		parent::__construct();
		//$this->load->library('excel');
		$this->load->model('admin/Auth_model');
		$this->load->model('admin/Setting_model');
		
	}
	function test(){
		$data['page_title']='User List';
		$data['setting']=$this->Setting_model->get_details('1','tbl_setting');
		$this->admin_load('test',$data);
	}function user_list(){
		$data['page_title']='General Setting';
		$data['user_list']=$this->Setting_model->get_list('tbl_users');
		$this->admin_load('user_list',$data);
	}function general_setting(){
		$data['page_title']='General Setting';
		$data['setting']=$this->Setting_model->get_details('1','tbl_setting');
		$this->admin_load('home_pagesetting',$data);
	}
	function add_page(){
		$data['page_title']='Add Pages';
		$this->admin_load('add_page',$data);
	}
	function page_list(){
		$data['page_list']=$this->Setting_model->get_list('tbl_pages');
		$data['page_title']='Page List';
		$this->admin_load('page_list',$data);
	}function feed_backlist(){
		$data['feed_backlist']=$this->Setting_model->feed_backlist();
		$data['page_title']='Feedback List';
		$this->admin_load('feedback_list',$data);
	}
	function edit_pages($id){
		$data['edit_page']=$this->Setting_model->get_details($id,'tbl_pages');
		$data['page_title']='Edit Pages';
		$this->admin_load('edit_page',$data);
	}
	function update_logo_header(){
		$update_id=$this->input->post('update_id');	
		$uploadfile='';
		if($_FILES['header_logo']['name']){
			$config['upload_path']='uploads/logo';
			$config['allowed_types']='png|jpg|gif';
			$config['max_size']=0;
			$newfile=time().'_'.$_FILES['header_logo']['name'];
			$config['file_name']=$newfile;
			$this->load->library('upload',$config);
				if($this->upload->do_upload('header_logo')){
					$uploadfile=$this->upload->data();
				}
			}
			$data=array('header_logo'=>$uploadfile['file_name']);
			$this->db->where('id',$update_id);
			$this->db->update('tbl_setting',$data);
			echo "success";
	}
	function update_logo_footer(){
		$update_id=$this->input->post('update_id');	
		$uploadfile='';
		if($_FILES['footer_logo']['name']){
			$config['upload_path']='uploads/logo';
			$config['allowed_types']='png|jpg|gif';
			$config['max_size']=0;
			$newfile=time().'_'.$_FILES['footer_logo']['name'];
			$config['file_name']=$newfile;
			$this->load->library('upload',$config);
				if($this->upload->do_upload('footer_logo')){
					$uploadfile=$this->upload->data();
				}
			}
			$data=array('footer_logo'=>$uploadfile['file_name']);
			$this->db->where('id',$update_id);
			$this->db->update('tbl_setting',$data);
			echo "success";
	}
	
	function insert_page(){
		$page_title=$this->input->post('page_title');
		$description=$this->input->post('description');		
		if($page_title){		
			$data=array(
			'title'=>$page_title,
			'description'=>$description,
			 );
			$this->db->insert('tbl_pages',$data);
			echo "success";
		}else{
			echo "error";
		}
	}function update_page(){
		$id=$this->input->post('update_id');
		$page_title=$this->input->post('page_title');
		$description=$this->input->post('description');		
		if($page_title){
			
			$data=array(
			'title'=>$page_title,
			'description'=>$description,
			 );
			$this->db->where('id',$id);
			$this->db->update('tbl_pages',$data);
			echo "success";
		}else{
			echo "error";
		}
	}
	
	function update_setting(){
		$update_id=$this->input->post('update_id');		
		$title=$this->input->post('title');
		$meta_title=$this->input->post('meta_title');
		$meta_keyword=$this->input->post('meta_keyword');
		$meta_discription=$this->input->post('meta_discription');		
		$email=$this->input->post('email');		
		$contact=$this->input->post('contact');		
		$address1=$this->input->post('address1');		
		$address2=$this->input->post('address2');		
		$facebook=$this->input->post('facebook');		
		$twitter=$this->input->post('twitter');		
		$linkedin=$this->input->post('linkedin');		
		$pinterest=$this->input->post('pinterest');		
		$instagram=$this->input->post('instagram');		
		$description=$this->input->post('description');		
			$data=array(
			'title'=>$title,
			'meta_title'=>$meta_title,
			'meta_keyword'=>$meta_keyword,
			'meta_discription'=>$meta_discription,
			'email'=>$email,
			'contact'=>$contact,
			'address1'=>$address1,
			'address2'=>$address2,
			'facebook'=>$facebook,
			'twitter'=>$twitter,
			'linkedin'=>$linkedin,
			'pinterest'=>$pinterest,
			'instagram'=>$instagram,
			'description'=>$description,
			
			 );
			$this->db->where('id',$update_id);
			$this->db->update('tbl_setting',$data);
			echo "success";
	}
	
	
		function download_sheet($sheet_name){
        $this->load->helper('download');
        $data = file_get_contents("uploads/excel/" . $sheet_name); // Read the file's 
        $name = $file;
        force_download($name, $data);
		}

		function page_deactive($id){
		$data=array('status'=>'0');
		$this->db->where('id',$id);
		$this->db->update('tbl_pages',$data);
		$this->session->set_flashdata('success','Deactive Successfully');
		redirect('admin/setting/page_list');
	}
	function page_active($id){
		$data=array('status'=>'1');
		$this->db->where('id',$id);
		$this->db->update('tbl_pages',$data);
		$this->session->set_flashdata('success','Active Successfully');
		redirect('admin/setting/page_list');
	}function page_delete($id){
		$data=array('status'=>'0');
		$this->db->where('id',$id);
		$this->db->delete('tbl_pages');
		$this->session->set_flashdata('success','Delete Successfully');
		redirect('admin/setting/page_list');
	}function delete_notification($id){
		
		$this->db->where('id',$id);
		$this->db->delete('tbl_feedback');
		$this->session->set_flashdata('success','Delete Successfully');
		redirect('admin/setting/feed_backlist');
	}
	
	function delete_message($id){
		
		$this->db->where('id',$id);
		$this->db->delete('tbl_messages');
		// $this->db->where('message_id',$id);
		// $this->db->delete('tbl_notification');
		$this->session->set_flashdata('success','Delete Successfully');
		redirect('admin/setting/notification_list');
	}
	
	function export_user_list(){
		$id=$this->input->post('id');
		$this->session->set_userdata('user_export_data',$id);
	}
	function user_export_data(){
		$user_id=$this->session->userdata('user_export_data');
		$data=$this->Setting_model->get_user_data($user_id);
		 $filename = 'Users_'.date('Ymd').'.csv'; 
            header("Content-Description: File Transfer"); 
            header("Content-Disposition: attachment; filename=$filename"); 
             header("Content-Type: application/csv; ");
             $file = fopen('php://output','w');
            $header = array("Name","Email","Contact","Country","Message","Creaded Date"); 
            fputcsv($file, $header);
            foreach ($data as $key=>$line){ 
                fputcsv($file,$line); 
            }
            fclose($file); 
            exit;
	}
	function add_banner(){
		$data['page_title']='Add Banner';
		//$data['setting']=$this->Setting_model->get_details('1','tbl_setting');
		$this->admin_load('add_banner',$data);
	}
	function insert_banner(){
		$title=$this->input->post('title');
		$description=$this->input->post('description');
		$image=$_FILES['image']['name'];
		
		if($image){
			$uploadfile='';
		if($_FILES['image']['name']){
			$config['upload_path']='uploads/banners';
			$config['allowed_types']='png|jpg|gif';
			$config['max_size']=0;
			$newfile=time().'_'.$_FILES['image']['name'];
			$config['file_name']=$newfile;
			$this->load->library('upload',$config);
				if($this->upload->do_upload('image')){
					$uploadfile=$this->upload->data();
				}
			}
			$data=array(
				'title'=>$title,
				'description'=>$description,
				'status'=>'1',
				'image'=>@$uploadfile['file_name'],
			    'created_date'=>date('Y-m-d H:i:s'),
				'updated_date'=>date('Y-m-d H:i:s'),
				'add_by'=>$this->session->userdata('sessiondata')['id']
			);
			$this->db->insert('tbl_banner',$data);
			$this->session->set_flashdata('success','Banner Add Successfully');
			redirect('admin/setting/add_banner');
		}else{
			$this->session->set_flashdata('error','Image is required....');
			$this->add_banner();
		}
	}function update_banner($id=''){
		$title=$this->input->post('title');
		$description=$this->input->post('description');
		$image=$_FILES['image']['name'];
		
		
			$uploadfile='';
		if($_FILES['image']['name']){
			$config['upload_path']='uploads/banners';
			$config['allowed_types']='png|jpg|gif';
			$config['max_size']=0;
			$newfile=time().'_'.$_FILES['image']['name'];
			$config['file_name']=$newfile;
			$this->load->library('upload',$config);
				if($this->upload->do_upload('image')){
					$uploadfile=$this->upload->data();
				}
			}
			if($uploadfile){
				$data=array(
				'title'=>$title,
				'description'=>$description,
				'image'=>@$uploadfile['file_name'],
			   'updated_date'=>date('Y-m-d H:i:s'),
				'add_by'=>$this->session->userdata('sessiondata')['id']
			);
			}else{
				$data=array(
				'title'=>$title,
				'description'=>$description,
				'updated_date'=>date('Y-m-d H:i:s'),
				'add_by'=>$this->session->userdata('sessiondata')['id']
			  );
			}
			$this->db->where('id',$id);
			$this->db->update('tbl_banner',$data);
			$this->session->set_flashdata('success','Banner Update Successfully');
			redirect('admin/setting/edit_banner/'.$id);
		
	}
	function banner_list(){
		$data['page_title']='Banner List';
		$data['banner_list']=$this->Setting_model->get_list('tbl_banner');
		$this->admin_load('banner_list',$data);
	}
	function edit_banner($id=''){
		$data['page_title']='Edit Banner';
		$data['edit_banner']=$this->Setting_model->get_details($id,'tbl_banner');
		$this->admin_load('edit_banner',$data);
	}
	function banner_deactive($id){
		$data=array('status'=>'0');
		$this->db->where('id',$id);
		$this->db->update('tbl_banner',$data);
		$this->session->set_flashdata('success','Deactive Successfully');
		redirect('admin/setting/banner_list');
	}
	function banner_active($id){
		$data=array('status'=>'1');
		$this->db->where('id',$id);
		$this->db->update('tbl_banner',$data);
		$this->session->set_flashdata('success','Active Successfully');
		redirect('admin/setting/banner_list');
	}function banner_delete($id){
		$data=array('status'=>'0');
		$this->db->where('id',$id);
		$this->db->delete('tbl_banner');
		$this->session->set_flashdata('success','Delete Successfully');
		redirect('admin/setting/banner_list');
	}
	
	
	public function download_patient_record($file = "",$id="") {
         $this->load->helper('download');
        $data = file_get_contents("uploads/patient_record/" . $file); // Read the file's 
        $name = $file;
        force_download($name, $data);
    }  
    /*function add_notification(){
        $data['page_title']='Add Notification';
		$data['user_list']=$this->Setting_model->get_list('tbl_users');
		$this->admin_load('add_notification',$data);
    }*/
     function add_notification(){
        $data['page_title']='Add Notification';
		$data['user_type']=json_decode(json_encode([['name'=>'User','value'=>'user'],['name'=>'Driver','value'=>'driver']]));
		$this->admin_load('add_notification',$data);
    }
    /*function insert_notification(){
		$title=$this->input->post('title');
		$push_message=$this->input->post('description');	
         $msg_type = "";
         $request_id="";
         $username="";
         $admin="";
         $img="https://purexa.in/uploads/logo/1585221541_purexa_resize.png";
         if($this->input->post('type')=='All'){
             $user_list=$this->Setting_model->get_list('tbl_users'); 
             $users=[];
         }else{
         $user_list=$this->Setting_model->get_list_inarray('tbl_users',$this->input->post('users'));
         $users=$this->input->post('users');
         }
         $uploadfile='';
		if($_FILES['image']['name']){
			$config['upload_path']='uploads/notification';
			$config['allowed_types']='png|jpg|gif';
			$config['max_size']=0;
			$newfile=time().'_'.$_FILES['image']['name'];
			$config['file_name']=$newfile;
			$this->load->library('upload',$config);
				if($this->upload->do_upload('image')){
					$uploadfile=$this->upload->data();
				}
			}
         $data_insert=array(
             'title'=>$title,
             'message'=>$push_message,
             'users'=>json_encode($users),
             'image'=>$uploadfile['file_name'],
             'created_date'=>date('Y-m-d H:i:s')
             );
             $this->db->insert('messages',$data_insert);
             $message_id=$this->db->insert_id();
         foreach ($user_list as $key => $value) {
             $data=array(
			'user_id'=>$value->id,
			'message_id'=>$message_id,
			'type'=>'notification',
			'created_date'=>date('Y-m-d H:i:s'),
			'type'=>'indian'
			 );
			$this->db->insert('tbl_notification',$data);
            $device_token=$value->notification_token;
            $img=base_url().'uploads/this.oldItem.id = id';
            $fire_base_token='AAAA-XVoOAs:APA91bEjFKfIan69kuihlzRZY5shm48UVTmQQQvsxybxKqioJ2x1L1w8KNiJ6mDGQ38TdgFUY3UDjC1jAq8przkxwn77s0iNKXxIJgJjzxCrfP8Vr8z4j8Q9imSXx4IakSt7ihR8gY4o';
             $check=$this->send_notification($value->id,$push_message,$msg_type,$request_id,$value->name,$admin,$img,$device_token,$fire_base_token);
             //print_r($check); die;
             }
				$this->session->set_flashdata('success','Notification sent Successfully');
			redirect('admin/setting/add_notification/');
			
	}*/
	
	 function notification_list(){
		$data['page_title']='Notification List';
		$data['notifications']=$this->Setting_model->get_list('tbl_messages');
		$this->admin_load('notification_list',$data);
	}
	
	function insert_notification(){
	    
		$user_type=$this->input->post('user_type');
		$title=$this->input->post('title');
		$push_message=$this->input->post('description');
		$users=$this->input->post('users');
		
		if($user_type && $title && $push_message && !empty($users)){
	     $users_data=[];
	     $drivers_data=[];
		 if($user_type=='user'){
			  if($this->input->post('users')[0]=='all'){
             $user_list=$this->Setting_model->get_list('tbl_users'); 
             foreach($user_list as $val){
                 $users_data[]=$val->id;
                }
             }else{
              $users_data=$users;
             }
		 }else if($user_type=='driver'){
			  if($this->input->post('users')[0]=='all'){
              $driver_list=$this->Setting_model->get_list('tbl_driver'); 
             foreach($driver_list as $val){
                 $drivers_data[]=$val->id;
                }
             }else{
              $drivers_data=$users;
             }
		  }
	
         $uploadfile='';
		if($_FILES['image']['name']){
			$config['upload_path']='uploads/notification';
			$config['allowed_types']='png|jpg|gif';
			$config['max_size']=0;
			$newfile=time().'_'.$_FILES['image']['name'];
			$config['file_name']=$newfile;
			$this->load->library('upload',$config);
				if($this->upload->do_upload('image')){
					$uploadfile=$this->upload->data();
				}
			}
		  
             $data_insert=array(
             'title'=>$title,
             'message'=>$push_message,
             'user_id'=>json_encode($users_data),
			 'driver_id'=>json_encode($drivers_data),
             'image'=>@$uploadfile['file_name'],
             'status'=>1,
             'created_date'=>date('Y-m-d H:i:s'),
             'updated_date'=>date('Y-m-d H:i:s'),
             'type'=>$user_type,
             );
             
             $this->db->insert('tbl_messages',$data_insert);
             $message_id=$this->db->insert_id();
    
             if($message_id){
             $user_list=[];
             $get_data=$this->Setting_model->get_details(22,'tbl_messages');
             $user_id= $get_data->user_id;
             $driver_id=$get_data->driver_id;
            
             if($user_type =='user' && !empty($user_id)){
             $user_list=$this->Setting_model->get_list_inarray('tbl_users',json_decode($user_id));
             }else if($user_type =='driver' && !empty($driver_id)){
             $user_list=$this->Setting_model->get_list_inarray('tbl_driver',json_decode($driver_id));   
             }
            
             foreach ($user_list as $key => $value) {
             $id=$value->id;
             $push_message=$get_data->message;
             $msg_type = $get_data->type;;
		     $request_id="";
		     $name=$value->first_name.' '.$value->last_name;
		     $admin="";
             $img="http://marketingchord.com/express/front/images/1600413559_imagea.png";
             $firebase_token='AAAABHcKvug:APA91bH2uxr3YjYXp-IldHqvAXJT44so1ddvmhsoPm1Ju2FquLRTBKOHy-Gc82oyPUTj7vtOKCxqGzv3FcPVPQwYImIh1K5siKaoKESNWPhETst9ODIazoP6J_ZckcKneeACSvXdk1xt';
             $device_token=$value->firebase_token;
             $check=$this->send_notification($id,$push_message,$msg_type,$request_id,$name,$admin,$img,$firebase_token,$device_token);
             //print_r($check); die;
             }
		     $this->session->set_flashdata('success','Notification sent Successfully');
             }
              
			redirect('admin/setting/notification_list/');
			}else{
			$this->session->set_flashdata('error','All star fields are required....');
			$this->add_notification();
		     }
			
	}
	
	function edit_notification($id){
	    $table_name='';
		$users_info=[];
        $data['page_title']='Edit Notification';
		$data['user_type']=json_decode(json_encode([['name'=>'User','value'=>'user'],['name'=>'Driver','value'=>'driver']]));
		$data['edit_list']=$this->Setting_model->get_details($id,'tbl_messages');
		
		if($data['edit_list']->type=='user'){
			$table_name='tbl_users';
			$users_info=json_decode($data['edit_list']->user_id);
		}else if($data['edit_list']->type=='driver'){
			$table_name='tbl_driver';
			$users_info=json_decode($data['edit_list']->driver_id);
		}
		$data['user_list']=$this->Setting_model->get_list_inarray($table_name,$users_info);
		$this->admin_load('edit_notification',$data);
    }
	
	function update_notification($id){
	    
	    $user_type=$this->input->post('user_type');
		$title=$this->input->post('title');
		$push_message=$this->input->post('description');
		$users=$this->input->post('users');
		$image=$this->input->post('image');
		
		if($user_type && $title && $push_message && !empty($users)){
	     $users_data=[];
	     $drivers_data=[];
		 if($user_type=='user'){
			  if($this->input->post('users')[0]=='all'){
             $user_list=$this->Setting_model->get_list('tbl_users'); 
             foreach($user_list as $val){
                 $users_data[]=$val->id;
                }
             }else{
              $users_data=$users;
             }
		 }else if($user_type=='driver'){
			  if($this->input->post('users')[0]=='all'){
              $driver_list=$this->Setting_model->get_list('tbl_driver'); 
             foreach($driver_list as $val){
                 $drivers_data[]=$val->id;
                }
             }else{
              $drivers_data=$users;
             }
		  }
	
         $uploadfile='';
		if($_FILES['image']['name']){
			$config['upload_path']='uploads/notification';
			$config['allowed_types']='png|jpg|gif';
			$config['max_size']=0;
			$newfile=time().'_'.$_FILES['image']['name'];
			$config['file_name']=$newfile;
			$this->load->library('upload',$config);
				if($this->upload->do_upload('image')){
					$uploadfile=$this->upload->data();
				}
				$image=$uploadfile['file_name'];
			}
		  
    
	         $data_update=array(
             'title'=>$title,
             'message'=>$push_message,
             'user_id'=>json_encode($users_data),
			 'driver_id'=>json_encode($drivers_data),
             'image'=>$image,
             'updated_date'=>date('Y-m-d H:i:s'),
             'type'=>$type,
             );
           
			$this->db->where('id',$id);
			$this->db->update('tbl_messages',$data_update);
		    $this->session->set_flashdata('success','Notification Updated Successfully');
			redirect('admin/setting/notification_list/');
			}
			else{
			$this->session->set_flashdata('error','All star fields are required....');
			$this->edit_notification();
		     }
	}
	
function send_notification($user_id='',$user_name='',$email='',$phone='',$latitude='',$longitude='',$vehicle_reg_no='', $push_message='',$msg_type = "",$request_id="",$admin="",$img="",$device_token='',$fire_base_token=''){
       
        $res= shell_exec('curl -X POST --header "Authorization: key='.$fire_base_token.'" --header "Content-Type: application/json" https://fcm.googleapis.com/fcm/send -d "{\"to\":\"'.$device_token.'\",\"priority\":\"high\",\"data\":{\"msg_type\":\"'.$msg_type.'\",\"request_id\":\"'.$request_id.'\",\"image_url\":\"'.$img.'\",\"user_id\":\"'.$user_id.'\",\"user_name\":\"'.$user_name.'\",\"email\":\"'.$email.'\",\"phone\":\"'.$phone.'\",\"latitude\":\"'.$latitude.'\",\"longitude\":\"'.$longitude.'\",\"vehicle_reg_no\":\"'.$vehicle_reg_no.'\",\"msg\":\"'.$push_message.'\"},\"notification\":{\"body\": \"'.stripslashes($push_message).'\",\"title\":\"'.$msg_type.'\",\"image\":\"'.$img.'\"}}"');
        print_r($res);
        
    }  
    
    function notification_deactive($id){
		$data=array('status'=>'0');
		$this->db->where('id',$id);
		$this->db->update('tbl_messages',$data);
		$this->session->set_flashdata('success','Deactive Successfully');
			redirect('admin/setting/notification_list');
	}
	
	function notification_active($id){
		$data=array('status'=>'1');
		$this->db->where('id',$id);
		$this->db->update('tbl_messages',$data);
		$this->session->set_flashdata('success','Active Successfully');
			redirect('admin/setting/notification_list');
	}
	
	public function get_users(){
	  $usertype=$this->input->get('usertype');
	  if($usertype=='user'){
		  
		$data=$this->Setting_model->get_list_inarray_format('tbl_users'); 
		
	  }elseif($usertype=='driver'){
		  
		  $data=$this->Setting_model->get_list_inarray_format('tbl_driver');  
	  }else{
		$data=[]; 
	  }
	  
	  echo"<option value='all'>All</option>";
	  foreach($data as $value){
	  echo "<option value='".$value['id']."'>".$value['first_name']." ".$value['last_name']."</option>";
		  }
     }
	
    function sentnotification(){
       
        $user_id='';
         $push_message='Message For Testing by ravi';
         $msg_type = "";
         $request_id="";
         $username="";
         $admin="";
         $img="https://purexa.in/uploads/logo/1585221541_purexa_resize.png";
         $user_list=$this->Setting_model->get_list('tbl_admin');
         foreach ($user_list as $key => $value) {
            $device_token=$value->fire_base_token;
            //$device_token='da985309609002d7';
            $fire_base_token='AAAA-XVoOAs:APA91bEjFKfIan69kuihlzRZY5shm48UVTmQQQvsxybxKqioJ2x1L1w8KNiJ6mDGQ38TdgFUY3UDjC1jAq8przkxwn77s0iNKXxIJgJjzxCrfP8Vr8z4j8Q9imSXx4IakSt7ihR8gY4o';
             $this->send_notification($value->id,$push_message,$msg_type,$request_id,$value->name,$admin,$img,$device_token,$fire_base_token);
         }
        
    }
   
	function get_address_by_address1(){
         $address=   $this->input->get();
        //$apiKey = 'AIzaSyCj2DJtepjunNbC6gL-PAryEWanboUnUNU'; // Google maps now requires an API key.
        $apiKey = 'AIzaSyCtwxSB6-GcpLvkoKEVEUY3_BY9ct30iqE'; // Google maps now requires an API key.
            $url = 'https://maps.googleapis.com/maps/api/geocode/json?address='.$address.'&sensor=false&key='.$apiKey;
            
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);    
            $responseJson = curl_exec($ch);
            curl_close($ch);
            
            $response = json_decode($responseJson);
            echo "<pre>";
            print_r($response); die;
          
        }
   
   function get_address_by_address(){
         $address=   $this->input->get();
        
        //$apiKey = 'AIzaSyCj2DJtepjunNbC6gL-PAryEWanboUnUNU'; // Google maps now requires an API key.
        $apiKey = 'AIzaSyCtwxSB6-GcpLvkoKEVEUY3_BY9ct30iqE'; // Google maps now requires an API key.
        // Get JSON results from this request
        $geo = file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.$address.'&sensor=false&key='.$apiKey);
        $geo = json_decode($geo, true); // Convert the JSON to an array
        
        if (isset($geo['status']) && ($geo['status'] == 'OK')) {
          $latitude = $geo['results'][0]['geometry']['location']['lat']; // Latitude
          $longitude = $geo['results'][0]['geometry']['location']['lng']; // Longitude
          /*echo $latitude; echo "<br>";
          echo $longitude; */
          $address= $geo['results'][0]['formatted_address'];
          echo "<li> <a href='javaScript:void(0)' class='append_address'>".$address."</a></li>";
          
        }
   }
   function change_password1(){
		$data['page_title']='Change Password';
		// echo "okk"; die;
		//$data['setting']=$this->Setting_model->get_details('1','tbl_setting');
		// $this->form_validation->set_rules('password', 'Password', 'required');
        // $this->form_validation->set_rules('confirm_password', 'Confirm password', /'required|matches[password]');
	  	$this->admin_load('change_password',$data);
	}
	
	
	 public function change_password()
    {
        $data['page_title']='Change Password';
        $this->load->library('form_validation');

        $this->form_validation->set_rules('old_password', 'old Password', 'callback_password_check');
        $this->form_validation->set_rules('new_password', 'New Password', 'required');
        $this->form_validation->set_rules('conform_pass', 'Confirm Password', 'matches[new_password]');	
     
        if($this->form_validation->run() == false) {
           $this->admin_load('change_password',$data);   
        }
        else {
            $id = $this->session->userdata('sessiondata')['id'];
            $newpass = $this->input->post('new_password');
			$this->Setting_model->update_user($id, array('password' => md5($newpass)));
            $this->session->set_flashdata('success','Password Changed Successfully !');
			redirect('admin/setting/change_password');
        }
    }

    public function password_check($old_password)
    {
        $id = $this->session->userdata('sessiondata')['id'];
        $user = $this->Setting_model->get_user($id);

        if($user->password !== md5($old_password)) {
            $this->form_validation->set_message('password_check', 'The {field} does not match');
            return false;
        }

        return true;
    }
	
	function edit_profile(){
		$id=$this->session->userdata('sessiondata')['id'];
		$data['title']='Edit Profile';
		$data['edit_profile']=$this->Setting_model->get_details($id,'tblstaff');
		// echo "<pre>";
		// print_r($data);
		// die;
		$this->admin_load('profile/edit_profile',$data);
	
	}
	function update_profile(){
		// echo "<pre>";
		// print_r($_POST);die;
		$id=$this->session->userdata('sessiondata')['id'];
	    $firstname=$this->input->post('firstname');
	    $lastname=$this->input->post('lastname');
	    $email=$this->input->post('email');
	    $phone=$this->input->post('phonenumber');
	    $facebook=$this->input->post('facebook');
	    $linkedin=$this->input->post('linkedin');
	     $skype=$this->input->post('skype');
	    
	   // $address=$this->input->post('address');
		
			if($firstname && $phone){
				
			
		    $uploadfile='';
		    if($_FILES['profile_image']['name']){
			$config['upload_path']='assets/backend/profile_images';
			$config['allowed_types']='png|jpg|gif';
			$config['max_size']=0;
			$newfile=time().'_'.$_FILES['profile_image']['name'];
			$config['file_name']=$newfile;

			$this->load->library('upload',$config);
			$this->upload->initialize($config);
				if($this->upload->do_upload('profile_image')){
					$uploadfile=$this->upload->data();
					$pic = $uploadfile['file_name'];
				}
			}

			if($uploadfile)
			{
			$data=array(
	        'firstname'=>$firstname,
	        'lastname'=>$lastname,
	        'phonenumber'=>$phone,
	        'facebook' =>$facebook,
	        'linkedin'=>$linkedin,
	        'skype'=>$skype,
			'profile_image'=>$pic
	        );
				
			}else{
			$data=array(
	       'firstname'=>$firstname,
	        'lastname'=>$lastname,
	        'phonenumber'=>$phone,
	        'facebook' =>$facebook,
	        'linkedin'=>$linkedin,
	        'skype'=>$skype,
	        );
			}
			
	        $this->db->where('staffid',$id);
	        $this->db->update('tblstaff',$data);
			
			$data=$this->Setting_model->get_details($id,'tblstaff');
			
			$session=array(
				'email'=>$data->email,
				'id'=>$data->staffid,
				'name'=>$data->firstname,
				'pic'=>$data->profile_image
			);
			$this->session->set_userdata('sessiondata',$session);
			
	        $this->session->set_flashdata('success','Update Successfully');
	        	redirect('admin/');
		}
		else{
			$this->session->set_flashdata('error','All star fields are required....');
			$this->edit_profile();
	
	}
			
	    
	}

}
?>