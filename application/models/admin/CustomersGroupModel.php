<?php
/**
 * 
 */
class CustomersGroupModel extends CI_Model
{
	
	
	public function get_list($table){
		$this->db->order_by('id',"DESC");
		$query=$this->db->get($table);
		return  $query->result();
	}	
   
	
	public function insert($table , $data){
		return $this->db->insert($table,$data);
	}
	public function get_source_row($id){
		$this->db->where('id',$id);
		$query=$this->db->get('tblcustomers_groups');
		return $query->row();
	}
	public function update($data,$id){
		$this->db->where('id',$id);
	 $q = $this->db->update('tblcustomers_groups',$data);
	 return $q;
	}
	public function delete($id){
		$this->db->where('id',$id);
	 $q = $this->db->delete('tblcustomers_groups');
	 return $q;
	}
	
}
?>