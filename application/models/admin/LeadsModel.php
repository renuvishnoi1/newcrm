<?php
/**
 * 
 */
class LeadsModel extends CI_Model
{
	var $table="tblleads";
	var $select_column = array("id","name","company");
	var $order_column = array(null,"name","company",null,null);
	function make_query(){
		$this->db->select($this->select_column);
		$this->db->from($this->table);
		if(isset($_POST["search"]["value"])){
			$this->db->like("name",$_POST["search"]["value"]);
			$this->db->or_like("company",$_POST["search"]["value"]);
		}
		if(isset($_POST["order"])){
			$this->db->order_by($this->order_column[$_POST['order']['0']['column']],$_POST['order']['0']['dir']);
		}else{
			$this->db->order_by("id","DESC");
		}
	}
	function make_datatables(){
		$this->make_query();  
		if($_POST["length"] != -1)  
		{  
			$this->db->limit($_POST['length'], $_POST['start']);  
		} 
		$query= $this->db->get();
		return $query->result();
	}
	function get_filtered_data(){
		$this->make_query();
		$query = $this->db->get();
		return $query->num_rows();
	}
	function get_all_data(){
		$this->db->select("*");
		$this->db->from($this->table);
		return $this->db->count_all_results();

	}
	public function get_list($table){
		$this->db->order_by('id',"DESC");
		$query=$this->db->get($table);
		return  $query->result();
	}	
	public function get_assign_list($table){
		$this->db->order_by('staffid',"DESC");
		$query=$this->db->get($table);
		return  $query->result();
	}
	public function get_tag_data($id){
		$this->db->where('rel_id',$id);
		$q = $this->db->get('tbltaggables');
		return $q->result_array();

	}

	
	public function insert($table ,$data= array()){
		$this->db->insert($table,$data);
		$insert_id = $this->db->insert_id();
		return  $insert_id;
	}
	public function getLeads(){

		$this->db->select('tblleads.*,tbltags.name as tag_name');
		$this->db->from('tblleads');
		$this->db->join('tbltaggables','tbltaggables.rel_id = tblleads.id ', 'left');
		$this->db->join('tbltags','tbltags.id = tbltaggables.tag_id ', 'left');
        //$this->db->where('tblcontacts.is_primary',1);
		$this->db->order_by('tblleads.id', 'DESC');
		$result = $this->db->get();

		return $result->result_array();
	}
	public function get_lead_row($id){
		$this->db->where('id',$id);
		$query=$this->db->get('tblleads');
		return $query->row();
	}
	public function update($data,$id){
		$this->db->where('id',$id);
		$q = $this->db->update('tblleads',$data);
		return $q;
	}
	public function getLeadWhereLike($field, $search)
	{
		$query = $this->db->like($field, $search)->orderBy('id')->get('tblleads');
		return $query->result();
	}
	// public function delete($id){
	// 	$this->db->where('id',$id);
	//  $q = $this->db->delete('tblleads_sources');
	//  return $q;
	// }


//csv impot
	public function save($table_name, $data = array()) {
		$insert = $this->db->insert($table_name, $data);
		return $insert;
	}
	public function get($id = '')
	{
		$columns             = $this->db->list_fields(db_prefix() . 'leads');
		$rateCurrencyColumns = '';
		foreach ($columns as $column) {
			if (strpos($column, 'rate_currency_') !== false) {
				$rateCurrencyColumns .= $column . ',';
			}
		}
		$this->db->select($rateCurrencyColumns . 'leads.id as lead_id,leads.name as lead_name,leads.company,leads.email as lead_email,leads.phonenumber as lead_phone,leads.lead_value,
			source.name as source_name,
			status.name as status_name,staff.firstname as f_name ,staff.lastname as l_name');
		$this->db->from(db_prefix() . 'leads as leads');
		$this->db->join('' . db_prefix() . 'leads_sources as  source', 'source.id = leads.source', 'left');
		$this->db->join('' . db_prefix() . 'leads_status as  status', 'status.id = leads.status', 'left');
		$this->db->join('' . db_prefix() . 'staff as staff', 'staff.staffid = leads.assigned', 'left');


		$this->db->order_by('leads.id', 'asc');
		if (is_numeric($id)) {
			$this->db->where('leads.id', $id);

			return $this->db->get()->row();
		}

		return $this->db->get()->result_array();
	}
	
}

?>