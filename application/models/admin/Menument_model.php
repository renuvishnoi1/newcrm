<?php
class Menument_model extends CI_Model
{
	public function getmenument_list()
	{
		$this->db->select('tm.*,tc.city_name');
		$this->db->from('tbl_menuments as tm');
		$this->db->join('tbl_city as tc','tc.id=tm.city','left');
		$query=$this->db->get();
		return $query->result();
	}
}
?>