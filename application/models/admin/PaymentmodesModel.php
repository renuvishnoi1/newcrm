<?php
/**
 * 
 */
class PaymentmodesModel extends CI_Model
{
	
	
	public function get_list($table){
		$this->db->order_by('id',"DESC");
		$query=$this->db->get($table);
		return  $query->result();
	}	
   
	
	// public function insert($table , $data){
	// 	return $this->db->insert($table,$data);
	// }
	// public function get_status_row($id){
	// 	$this->db->where('id',$id);
	// 	$query=$this->db->get('tblleads_status');
	// 	return $query->row();
	// }
	// public function update($data,$id){
	// 	$this->db->where('id',$id);
	//  $q = $this->db->update('tblleads_status',$data);
	//  return $q;
	// }
	// public function delete($id){
	// 	$this->db->where('id',$id);
	//  $q = $this->db->delete('tblleads_status');
	//  return $q;
	// }
	
}
?>