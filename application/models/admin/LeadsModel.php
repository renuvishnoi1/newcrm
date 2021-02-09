<?php
/**
 * 
 */
class LeadsModel extends CI_Model
{
	
	
	public function get_list($table){
		$this->db->order_by('id',"DESC");
		$query=$this->db->get($table);
		return  $query->result();
	}	
	public function get_assign_list($table){
		$this->db->order_by('staffid',"DESC");
		$query=$this->db->get($table);
		return  $query->result();
	}
   
	
	public function insert($table , $data){
		$this->db->insert($table,$data);
		 $insert_id = $this->db->insert_id();
        return  $insert_id;
	}
	public function getLeads(){

		$this->db->select('tblleads.*,tbltags.name as tag_name');
        $this->db->from('tblleads');
        $this->db->join('tbltaggables','tbltaggables.rel_id = tblleads.id ', 'left');
        $this->db->join('tbltags','tbltags.id = tbltaggables.tag_id ', 'left');
        //$this->db->where('tblcontacts.is_primary',1);
        $this->db->order_by('tblleads.id', 'DESC');
        $result = $this->db->get();

        return $result->result_array();
	}
	public function get_lead_row($id){
		$this->db->where('id',$id);
		$query=$this->db->get('tblleads');
		return $query->row();
	}
	// public function update($data,$id){
	// 	$this->db->where('id',$id);
	//  $q = $this->db->update('tblleads_sources',$data);
	//  return $q;
	// }
	// public function delete($id){
	// 	$this->db->where('id',$id);
	//  $q = $this->db->delete('tblleads_sources');
	//  return $q;
	// }
	
}
?>