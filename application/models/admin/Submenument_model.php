<?php
class Submenument_model extends CI_Model
{
	public function getsubmenument_list()
	{
		$this->db->select('tsm.*,tc.city_name,tm.menument_name');
		$this->db->from('tbl_submenuments as tsm');
		$this->db->join('tbl_city as tc','tc.id=tsm.city','left');
		$this->db->join('tbl_menuments as tm','tsm.menuments=tm.id','left');
		$query=$this->db->get();
		return $query->result();
	}
}
?>