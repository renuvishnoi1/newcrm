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
  public function get_member_data(){
    $this->db->select('tblproject_members.*,tblstaff.staffid,tblstaff.firstname,tblstaff.lastname,tblstaff.profile_image');
    $this->db->from('tblproject_members');
    $this->db->join('tblstaff', 'tblproject_members.staff_id = tblstaff.staffid', 'left');
    $query = $this->db->get();
    return $query->result();
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
    return $query->result();
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


  // date 15-march
  public function get_project_members($id)
    {
        $this->db->select('email,profile_image,project_id,staff_id');
        $this->db->join(db_prefix() . 'staff', db_prefix() . 'staff.staffid=' . db_prefix() . 'project_members.staff_id');
        $this->db->where('project_id', $id);

        return $this->db->get(db_prefix() . 'project_members')->result_array();
    }

    public function get_project_settings($project_id)
    {
        $this->db->where('project_id', $project_id);

        return $this->db->get(db_prefix() . 'project_settings')->result_array();
    }
    public function remove_team_member($project_id, $staff_id)
    {
        $this->db->where('project_id', $project_id);
        $this->db->where('staff_id', $staff_id);
        $this->db->delete(db_prefix() . 'project_members');
        if ($this->db->affected_rows() > 0) {

            // Remove member from tasks where is assigned
            $this->db->where('staffid', $staff_id);
            $this->db->where('taskid IN (SELECT id FROM ' . db_prefix() . 'tasks WHERE rel_type="project" AND rel_id="' . $this->db->escape_str($project_id) . '")');
            $this->db->delete(db_prefix() . 'task_assigned');

            $this->log_activity($project_id, 'project_activity_removed_team_member', get_staff_full_name($staff_id));

            return true;
        }

        return false;
    }
}
?>