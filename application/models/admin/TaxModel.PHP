<?php

defined('BASEPATH') or exit('No direct script access allowed');

class TaxModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get invoice item by ID
     * @param  mixed $id
     * @return mixed - array if not passed id, object if id passed
     */

    public function get_list($table){
        $query = $this->db->get($table);
        return $query->result_array();
    }
    public function insert($table ,$data= array()){
		$this->db->insert($table,$data);
		 $insert_id = $this->db->insert_id();
        return  $insert_id;
	}
    public function get_tax_row($id){
        $this->db->where('id',$id);
        $query=$this->db->get('tbltaxes');
        return $query->row();
    }
    public function update($data,$id){
        $this->db->where('id',$id);
     $q = $this->db->update('tbltaxes',$data);
     return $q;
    }
    public function delete($id){
        $this->db->where('id',$id);
     $q = $this->db->delete('tbltaxes');
     return $q;
    }
   
}
