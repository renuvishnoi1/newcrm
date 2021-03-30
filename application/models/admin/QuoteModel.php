<?php

defined('BASEPATH') or exit('No direct script access allowed');

class QuoteModel extends CI_Model
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
      public function get_groups()
    {
        $this->db->order_by('name', 'asc');

        return $this->db->get('tblitems_groups')->result_array();
    }
    public function get($id = '')
    {
        $columns             = $this->db->list_fields(db_prefix() . 'items');
        $rateCurrencyColumns = '';
        foreach ($columns as $column) {
            if (strpos($column, 'rate_currency_') !== false) {
                $rateCurrencyColumns .= $column . ',';
            }
        }
        $this->db->select($rateCurrencyColumns . '' . db_prefix() . 'items.id as itemid,rate,
            t1.taxrate as taxrate,t1.id as taxid,t1.name as taxname,
            t2.taxrate as taxrate_2,t2.id as taxid_2,t2.name as taxname_2,
            description,long_description,group_id,' . db_prefix() . 'items_groups.name as group_name,unit');
        $this->db->from(db_prefix() . 'items');
        $this->db->join('' . db_prefix() . 'taxes t1', 't1.id = ' . db_prefix() . 'items.tax', 'left');
        $this->db->join('' . db_prefix() . 'taxes t2', 't2.id = ' . db_prefix() . 'items.tax2', 'left');
        $this->db->join(db_prefix() . 'items_groups', '' . db_prefix() . 'items_groups.id = ' . db_prefix() . 'items.group_id', 'left');
        $this->db->order_by('description', 'asc');
        if (is_numeric($id)) {
            $this->db->where(db_prefix() . 'items.id', $id);

            return $this->db->get()->row();
        }

        return $this->db->get()->result_array();
    }
    public function updateItem($itemid, $data){
        $this->db->where('id', $itemid);
        $query = $this->db->update(db_prefix() . 'items', $data);
        return $query;
    } 
    public function delete($table, $id)
    {
        $this->db->where('id',$id);
        $this->db->delete($table);
        return $this->db->affected_rows();
    }
    public function getCustomer($id){
        // echo $id;
        // die;
         $this->db->where('userid', $id);
        return $this->db->get('tblclients')->row();
    }
     public function getLead($id){
        // echo $id;
        // die;
         $this->db->where('id', $id);
        return $this->db->get('tblleads')->row();
    }
    public function get_quote($id = ''){
       //     $this->db->select(db_prefix() . 'proposals.*,' . db_prefix() . 'proposals.subject,');
       //     $this->db->from(db_prefix() . 'proposals');
        
       //  $this->db->join(db_prefix() . 'taggables', '' . db_prefix() . 'proposals.id = ' . db_prefix() . 'taggables.rel_id', 'left');
       // $this->db->where(db_prefix() . 'taggables.rel_type','proposal');
          if (is_numeric($id)) {
            $this->db->where(db_prefix() . 'proposals.id', $id);
            $proposals = $this->db->get(db_prefix() . 'proposals')->row();

            return $proposals;
        }
       $proposals = $this->db->get(db_prefix() . 'proposals')->result_array();
        return $proposals;
    }
    public function getItemTax($id){
        $this->db->where(array('rel_id' => $id, 'rel_type' => 'proposal'));
        $query= $this->db->get(db_prefix() . 'item_tax')->result_array();
        return $query;
    }
    public function getItem($id){
        $this->db->where(array('rel_id' => $id, 'rel_type' => 'proposal'));
        $query= $this->db->get(db_prefix() . 'itemable')->result_array();
        return $query;
    }
    public function getArrayData($con,$table){
         $this->db->where($con);
        $query= $this->db->get($table)->result_array();
        return $query;
    }
    public function upddata($table,$condi,$dataupdate) {
    //extract($data);
    $this->db->where($condi);
    $this->db->update($table, $dataupdate);
    return true;
}


   
}
