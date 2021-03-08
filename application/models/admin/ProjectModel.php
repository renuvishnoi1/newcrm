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
}
?>