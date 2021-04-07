<?php

defined('BASEPATH') or exit('No direct script access allowed');

class invoiceModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get invoice  by ID
     * @param  mixed $id
     * @return mixed - array if not passed id, object if id passed
     */

    public function get_list($table){
        $query = $this->db->get($table);
        return $query->result_array();
    }
    public function get_country_by_id($id){
       
        $this->db->where('country_id',$id);
        $q = $this->db->get('tblcountries')->row();
        return $q;
    }
      
      public function insert($table ,$data= array()){
        $this->db->insert($table,$data);
         $insert_id = $this->db->insert_id();
        return  $insert_id;
    }
    
   
}
