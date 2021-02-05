<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ContactsModel extends CI_Model
{


 

    public function getClients(){

        $this->db->select('tblcontacts.firstname,tblcontacts.lastname,tblcontacts.email,tblclients.*');
        $this->db->from('tblclients');
        $this->db->join('tblcontacts', 'tblcontacts.userid = tblclients.userid ', 'left');
        //$this->db->where('tblcontacts.is_primary',1);
        $this->db->order_by('tblcontacts.is_primary', 'DESC');
        $result = $this->db->get();

        return $result->result_array();

    }


    public function get_costomer_groups(){
        $query = $this->db->get('tblcustomers_groups');
        return $query->result_array();
    }
    public function get_countries(){
        $query = $this->db->get('tblcountries');
        return $query->result_array();
    }
    public function get_currencies(){
        $query = $this->db->get('tblcurrencies');
        return $query->result_array();
    }
    public function addClient($data){
        $this->db->insert('tblclients',$data);
        $insert_id = $this->db->insert_id();
        return  $insert_id;
    }
    public function add_group($data){
        $this->db->insert('tblcustomer_groups',$data);
    }
    public function get_all_contacts($id=null){
        $this->db->select('tblcontacts.*,tblclients.company');
        $this->db->from('tblcontacts');
        $this->db->join('tblclients', 'tblclients.userid  = tblcontacts.userid ');
        if($id != ''){
            $this->db->where('tblcontacts.userid',$id);
        }
        $this->db->order_by('tblcontacts.userid', 'DESC');
        $result = $this->db->get();
        return $result->result_array();
    }
    public function getContactById($id){
        $this->db->select('tblcontacts.*,tblclients.company');
        $this->db->from('tblcontacts');
        $this->db->join('tblclients', 'tblclients.userid  = tblcontacts.userid ');
        
        $this->db->where('tblcontacts.id',$id);
        $result = $this->db->get();
        return $result->row();
    }


    // update contact data
    public function updateContact($id,$data){
        $this->db->where('id',$id);
        $query = $this->db->update('tblcontacts',$data);
        return $query;
        
    }
    public function insertContact($data){
      $this->db->insert('tblcontacts',$data);
          return $this->db->insert_id();
    }

    public function getDataById($id){
       $this->db->where('userid', $id);
       $client = $this->db->get('tblclients')->row();
       return $client;
   }
   public function deleteContact($customer_id,$contact_id){
    $this->db->where('id',$contact_id);
    $this->db->where('userid',$customer_id);
    //$q= $this->db->get('tblcontacts')->row();
   
    $query =  $this->db->delete('tblcontacts');
    return $query;
}
public function deleteClient($customer_id){
    //$this->db->where('tblclients.userid',$customer_id);
    $this->db->where('userid',$customer_id);
    $query = $this->db->delete(array('tblclients','tblcontacts'));
  //   echo $query;
  //   print_r($this->db->last_query());
  // die;
    return $query;
}
public function updateClientStatus($course_id,$status){
  $data['active'] = $status;
  $this->db->where('userid', $course_id);
  $query = $this->db->update('tblclients',$data);
  
  return $query;
}

}
?>