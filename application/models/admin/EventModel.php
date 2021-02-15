<?php

defined('BASEPATH') or exit('No direct script access allowed');

class EventModel extends CI_Model
{

function fetch_all_event(){
  $this->db->order_by('eventid');
  return $this->db->get('tblevents');
 }
 function insert_event($data)
 {
  $this->db->insert('tblevents', $data);
 }
  function update_event($data, $id)
 {
  $this->db->where('eventid', $id);
  $this->db->update('tblevents', $data);
 }

 function delete_event($id)
 {
    // echo $id;
    // die;
  $this->db->where('eventid', $id);
 $q= $this->db->delete('tblevents');
 return $q;
 }
 

    

 

}
?>