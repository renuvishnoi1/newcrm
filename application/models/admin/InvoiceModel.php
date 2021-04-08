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
    public function get_invoice($id = '', $where = []){
        $this->db->select('*, ' . db_prefix() . 'clients.userid as userid, ' . db_prefix() . 'invoices.id as id, ' . db_prefix() . 'clients.company as customer_name,'.db_prefix().'tags.name as tag_name');
        $this->db->from(db_prefix() . 'invoices');
        $this->db->join(db_prefix() . 'clients', '' . db_prefix() . 'clients.userid = ' . db_prefix() . 'invoices.clientid', 'left');
         $this->db->join(db_prefix() . 'taggables', '' . db_prefix() . 'taggables.rel_id = ' . db_prefix() . 'invoices.id', 'left');
         $this->db->join(db_prefix() . 'tags', '' . db_prefix() . 'tags.id = ' . db_prefix() . 'taggables.tag_id', 'left');
         //$this->db->wehre(db_prefix() . 'taggables.rel_type ','invoice');
        $this->db->where($where);
        if (is_numeric($id)) {
            $this->db->where(db_prefix() . 'invoices' . '.id', $id);
            $invoice = $this->db->get()->row();
            return $invoice;
        }

        $this->db->order_by('number,YEAR(date)', 'desc');

        return $this->db->get()->result_array();
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

     public function get($id = '', $where = [])
    {
        $this->db->select('*, ' . db_prefix() . 'currencies.id as currencyid, ' . db_prefix() . 'invoices.id as id, ' . db_prefix() . 'currencies.name as currency_name');
        $this->db->from(db_prefix() . 'invoices');
        $this->db->join(db_prefix() . 'currencies', '' . db_prefix() . 'currencies.id = ' . db_prefix() . 'invoices.currency', 'left');
        $this->db->where($where);
        if (is_numeric($id)) {
            $this->db->where(db_prefix() . 'invoices' . '.id', $id);
            $invoice = $this->db->get()->row();
            return $invoice;
        }

        $this->db->order_by('number,YEAR(date)', 'desc');

        return $this->db->get()->result_array();
    }
   
}
