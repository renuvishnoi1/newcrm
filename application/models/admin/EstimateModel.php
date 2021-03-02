<?php

defined('BASEPATH') or exit('No direct script access allowed');

class EstimateModel extends CI_Model
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
      public function get($id = '', $where = [])
    {
        $this->db->select('*,' . db_prefix() . 'currencies.id as currencyid, ' . db_prefix() . 'estimates.id as id, ' . db_prefix() . 'currencies.name as currency_name');
        $this->db->from(db_prefix() . 'estimates');
        $this->db->join(db_prefix() . 'currencies', db_prefix() . 'currencies.id = ' . db_prefix() . 'estimates.currency', 'left');
        $this->db->where($where);
        if (is_numeric($id)) {
            $this->db->where(db_prefix() . 'estimates.id', $id);
            $estimate = $this->db->get()->row();
            if ($estimate) {
                $estimate->attachments                           = $this->get_attachments($id);
                $estimate->visible_attachments_to_customer_found = false;

                foreach ($estimate->attachments as $attachment) {
                    if ($attachment['visible_to_customer'] == 1) {
                        $estimate->visible_attachments_to_customer_found = true;

                        break;
                    }
                }

                $estimate->items = get_items_by_type('estimate', $id);

                if ($estimate->project_id != 0) {
                    $this->load->model('projects_model');
                    $estimate->project_data = $this->projects_model->get($estimate->project_id);
                }

                $estimate->client = $this->clients_model->get($estimate->clientid);

                if (!$estimate->client) {
                    $estimate->client          = new stdClass();
                    $estimate->client->company = $estimate->deleted_customer_name;
                }

                $this->load->model('email_schedule_model');
                $estimate->scheduled_email = $this->email_schedule_model->get($id, 'estimate');
            }

            return $estimate;
        }
        $this->db->order_by('number,YEAR(date)', 'desc');

        return $this->db->get()->result_array();
    }
}
