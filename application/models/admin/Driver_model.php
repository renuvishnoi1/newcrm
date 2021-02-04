<?php
/**
 * 
 */
class Setting_model extends CI_Model
{
	
	function get_user_details_byemail_password($email,$password){
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$query=$this->db->get('tbl_admin');
		return $query->row();
	}
	function get_list($table){
		$this->db->order_by('id',"DESC");
		$query=$this->db->get($table);
		return  $query->result();
	}	function get_list_inarray($table,$array){
	    	$this->db->where_in('id',$array);
		$this->db->order_by('id',"DESC");
		$query=$this->db->get($table);
		return  $query->result();
	}
	
	function get_details($id,$table){
		$this->db->where('id',$id);
		$query=$this->db->get($table);
		return  $query->row();
	}
	function get_details_by_field($id,$field,$table){
		$this->db->where($field,$id);
		$query=$this->db->get($table);
		return  $query->result();
	}
	function get_details_by_field_row($id,$field,$table){
		//echo $field; die;
		$this->db->where($field,$id);
		$query=$this->db->get($table);
		return  $query->row();
	}
   
	function feed_backlist(){
	     $this->db->select('tbl_feedback.*,tbl_users.name,tbl_users.email');
       $this->db->from('tbl_feedback');
       $this->db->join('tbl_users','tbl_users.id=tbl_feedback.user_id','left');
        $this->db->order_by('id','DESC');
       $query=$this->db->get();
       return $query->result();
	}
	
}
?>