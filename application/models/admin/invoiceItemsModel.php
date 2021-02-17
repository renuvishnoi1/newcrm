<?php

defined('BASEPATH') or exit('No direct script access allowed');

class invoiceItemsModel extends CI_Model
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
   
}
