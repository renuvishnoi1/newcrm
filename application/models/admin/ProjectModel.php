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
  public function get_data_by_id($id, $table){
    $this->db->where('id',$id);
    $query=$this->db->get($table);
    return $query->row();
  }
  public function get_tag_data_by_id($id){

    $this->db->select('tbltags.name as tag_name');
    $this->db->from('tbltaggables');
    $this->db->join('tbltags', 'tbltags.id = tbltaggables.tag_id');
    $this->db->where('tbltaggables.rel_id',$id);
    $this->db->where('tbltaggables.rel_type','project');

    $query = $this->db->get();
    return $query->row();
  }
}
?>