<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ContractTypeModel extends CI_Model
{
     /**
     * Edit contract type
     * @param mixed $data All $_POST data
     * @param mixed $id Contract type id
     */
     public function get($id = '')
     {
        if (is_numeric($id)) {
            $this->db->where('id', $id);

            return $this->db->get(db_prefix().'contracts_types')->row();
        }

        //$types = $this->app_object_cache->get('contract-types');
        $types = $this->db->get(db_prefix().'contracts_types')->result_array();
        // if (!$types && !is_array($types)) {
        //     $types = $this->db->get(db_prefix().'contracts_types')->result_array();
        //     $this->app_object_cache->add('contract-types', $types);
        // }

        return $types;
    }
/**
    * Add new contract type
    * @param mixed $data All $_POST data
    */
public function add($data)
{
    $this->db->insert(db_prefix().'contracts_types', $data);
    $insert_id = $this->db->insert_id();
    if ($insert_id) {
            //log_activity('New Contract Type Added [' . $data['name'] . ']');

        return $insert_id;
    }

    return false;
}
 public function update($data, $id)
 {
        $this->db->where('id', $id);
        $this->db->update(db_prefix().'contracts_types', $data);
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
        $this->db->delete(db_prefix().'contracts_types');
        if ($this->db->affected_rows() > 0) {
            //log_activity('Contract Deleted [' . $id . ']');

            return true;
        }

        return false;
    }



}
?>