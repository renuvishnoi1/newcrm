<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ProjectModel extends CI_Model
{
  public function get_project(){

  }
  /* function to get list data*/
   public function get_list($table){
        $query = $this->db->get($table);
        return $query->result_array();
    }
    /* function to project data*/
  public function get_project_data(){
    $this->db->select('tblprojects.*,tblclients.company');
    $this->db->from('tblprojects');
    $this->db->join('tblclients', 'tblclients.userid = tblprojects.clientid', 'left');
    $query = $this->db->get();
    return $query->result();
  }
  /* function to insert data*/
  public function insert($table ,$data= array()){
    $this->db->insert($table,$data);
    $insert_id = $this->db->insert_id();
    return  $insert_id;
  }
  /* functin to get data by id*/
  public function get_data_by_id($id, $table){
    $this->db->where('id',$id);
    $query=$this->db->get($table);
    return $query->row();
  }
  /* functin to get tag data by id*/
  public function get_tag_data_by_id($id){

    $this->db->select('tbltags.name as tag_name');
    $this->db->from('tbltaggables');
    $this->db->join('tbltags', 'tbltags.id = tbltaggables.tag_id');
    $this->db->where('tbltaggables.rel_id',$id);
    $this->db->where('tbltaggables.rel_type','project');

    $query = $this->db->get();
    return $query->row();
  }
  /* functin to get tag */
  public function get_tag_data(){
     $this->db->select('tbltaggables.*,tbltags.name as tag_name');
    $this->db->from('tbltaggables');
    $this->db->join('tbltags', 'tbltags.id = tbltaggables.tag_id', 'left'); 
        
    $query = $this->db->get();
    return $query->result();
  }
  public function delete($id){
     $this->db-> where('tbltaggables.rel_id', $id);
     $this->db-> where('tblprojects.id', $id);
     $this->db-> where('tblprojects.rel_type', 'project');
     $this->db-> where('tblproject_members.project_id', $id);
     $this->db-> where('tblproject_settings.project_id', $id);
     return $this->db->delete('tblprojects','tbltaggables','tblproject_members','tblproject_settings');
  }
//   function delete_data($id)
// {
//     $this->db->where('pemohon.id_pemohon=user.id_user');
//     $this->db->where('pemohon.id_pemohon=peserta.id_peserta');
//     $this->db->where('pemohon.id_pemohon',$id);
//     $this->db->delete(array('pemohon','user','peserta'));
// }
}
?>