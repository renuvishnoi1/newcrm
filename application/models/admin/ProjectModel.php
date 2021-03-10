<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ProjectModel extends CI_Model
{
public function get_project(){
	
}
  public function get_list($table){
        $query = $this->db->get($table);
        return $query->result_array();
    }
     public function insert($table ,$data= array()){
		$this->db->insert($table,$data);
		 $insert_id = $this->db->insert_id();
        return  $insert_id;
	}
}
?>