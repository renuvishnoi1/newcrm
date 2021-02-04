<?php
/**
 * 
 */
class Auth_model extends CI_Model
{
	
	function get_user_details_byemail_password($email,$password){
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$query=$this->db->get('tblstaff');
		return $query->row();
	}
}
?>