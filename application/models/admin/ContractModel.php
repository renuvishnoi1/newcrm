<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ContractModel extends CI_Model
{
     /**
     * Edit contract type
     * @param mixed $data All $_POST data
     * @param mixed $id Contract type id
     */
   
        public function get($id = '', $where = [], $for_editor = false)
    {
        $this->db->select('*,' . db_prefix() . 'contracts_types.name as type_name,' . db_prefix() . 'contracts.id as id, ' . db_prefix() . 'contracts.addedfrom');
        $this->db->where($where);
        $this->db->join(db_prefix() . 'contracts_types', '' . db_prefix() . 'contracts_types.id = ' . db_prefix() . 'contracts.contract_type', 'left');
        $this->db->join(db_prefix() . 'clients', '' . db_prefix() . 'clients.userid = ' . db_prefix() . 'contracts.client');
          if (is_numeric($id)) {
            $this->db->where(db_prefix() . 'contracts.id', $id);
            $contract = $this->db->get(db_prefix() . 'contracts')->row();

            return $contract;
        }
       $contracts = $this->db->get(db_prefix() . 'contracts')->result_array();
        return $contracts;
    }
    
    public function get_contract_attachments($attachment_id = '', $id = '')
    {
        if (is_numeric($attachment_id)) {
            $this->db->where('id', $attachment_id);

            return $this->db->get(db_prefix() . 'files')->row();
        }
        $this->db->order_by('dateadded', 'desc');
        $this->db->where('rel_id', $id);
        $this->db->where('rel_type', 'contract');

        return $this->db->get(db_prefix() . 'files')->result_array();
    }
    public function get_client(){
        $clients = $this->db->get(db_prefix().'clients')->result_array();
        return $clients;
    }
/**
    * Add new contract type
    * @param mixed $data All $_POST data
    */
public function add($data)
{   
    $data['dateadded'] = date('Y-m-d H:i:s');
    $data['hash'] = app_generate_hash();

    $this->db->insert(db_prefix().'contracts', $data);
    $insert_id = $this->db->insert_id();
    if ($insert_id) {
            //log_activity('New Contract Type Added [' . $data['name'] . ']');
        return $insert_id;
    }

    return false;
}
 public function update($data, $id)
    {
        //echo $id;
   //  print_r($data);
   // die('hi');
        $this->db->where('id', $id);
        $this->db->update(db_prefix().'contracts', $data);
        if ($this->db->affected_rows() > 0) {
            //log_activity('Contract Type Updated [' . $data['name'] . ', ID:' . $id . ']');

            return true;
        }

        return false;
    }

     public function delete($id)
    {
        // if (is_reference_in_table('contract_type', db_prefix().'contracts', $id)) {
        //     return [
        //         'referenced' => true,
        //     ];
        // }
        $this->db->where('id', $id);
        $this->db->delete(db_prefix().'contracts');
        if ($this->db->affected_rows() > 0) {
            //log_activity('Contract Deleted [' . $id . ']');

            return true;
        }

        return false;
    }

 public function get_list($table){
        $query = $this->db->get($table);
        return $query->result_array();
    }
     public function get_contract_list($table){
        $this->db->where('rel_type','contract');
        $query = $this->db->get($table);
        return $query->result_array();
    }

}
?>