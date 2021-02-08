<?php
/**
 * 
 */
class LeadsSourceModel extends CI_Model
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
		$query=$this->db->get('tblleads_sources');
		return $query->row();
	}
	public function update($data,$id){
		$this->db->where('id',$id);
	 $q = $this->db->update('tblleads_sources',$data);
	 return $q;
	}
	public function delete($id){
		$this->db->where('id',$id);
	 $q = $this->db->delete('tblleads_sources');
	 return $q;
	}
	
}
?>