<?php
/**
 * 
 */
class Setting_model extends CI_Model
{
	
	function get_user_details_byemail_password($email,$password){
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$query=$this->db->get('tbl_admin');
		return $query->row();
	}
	function get_list($table){
		$this->db->order_by('id',"DESC");
		$query=$this->db->get($table);
		return  $query->result();
		
	}	function get_list_inarray($table,$array){
	    $this->db->where_in('id',$array);
		$this->db->order_by('id',"DESC");
		$query=$this->db->get($table);
		return  $query->result();
	}
	
	function get_details($id,$table){
		$this->db->where('id',$id);
		$query=$this->db->get($table);
		return  $query->row();
	}
	function get_details_by_field($id,$field,$table){
		$this->db->where($field,$id);
		$query=$this->db->get($table);
		return  $query->result();
	}
	function get_details_by_field_row($id,$field,$table){
		//echo $field; die;
		$this->db->where($field,$id);
		$query=$this->db->get($table);
		return  $query->row();
	}
	function feed_backlist(){
	     $this->db->select('tbl_feedback.*,tbl_users.name,tbl_users.email');
       $this->db->from('tbl_feedback');
       $this->db->join('tbl_users','tbl_users.id=tbl_feedback.user_id','left');
        $this->db->order_by('id','DESC');
       $query=$this->db->get();
       return $query->result();
	}function get_driver_payment_list(){
	     $this->db->select('tbl_driver_payment.*,tbl_driver.first_name,tbl_driver.last_name');
       $this->db->from('tbl_driver_payment');
       $this->db->join('tbl_driver','tbl_driver.id=tbl_driver_payment.driver_id','left');
        $this->db->order_by('tbl_driver_payment.id','DESC');
       $query=$this->db->get();
       return $query->result();
	}
	//prdeep functions start
	
	function get_list_inarray_format($table){
		$this->db->order_by('id',"DESC");
		$query=$this->db->get($table);
		return  $query->result_array();
		
	}
	
	public function get_user($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('tbl_admin');
        return $query->row();
    }
	public function update_user($id, $userdata)
    {
        $this->db->where('id', $id);
        $this->db->update('tbl_admin', $userdata);
    }
	
	 public function ForgotPassword($email)
{
    $this->db->select('email');
    $this->db->from('tbl_admin');
    $this->db->where('email', $email);
    $query=$this->db->get();
    return $query->row_array();
}

public function get_usertype_vehicles()
{
    $this->db->select('v.id, CONCAT(u.first_name," ",u.last_name) as user_name,vtd.name as vehicle_type,
	v.vehicle_reg_no,v.subscription_plane,v.subscription_amount,v.payment_status,v.payment_date,v.expire_date,
	v.front_image,v.back_image,v.status');
    $this->db->from('tbl_vehicle_type_details v'); 
    $this->db->join('tbl_users u', 'u.id=v.user_id', 'left');
    $this->db->join('tbl_vehicle_details vtd', 'vtd.id=v.vehicle_type', 'left');
    $this->db->order_by('v.id','desc');         
    $query = $this->db->get(); 
    if($query->num_rows() != 0)
    {
       return $query->result();
    }
    else
    {
        return false;
    }
}

public function get_user_complain()
{
    $this->db->select('comp.id as id, u.id as user_id,CONCAT(u.first_name," ",u.last_name) as user_name,u.email,u.phone,comp.title, 
	comp.description,comp.image,comp.language,comp.created_at');
    $this->db->from('tbl_complains comp'); 
    $this->db->join('tbl_users u', 'u.id=comp.user_id', 'left');
    $this->db->order_by('id','desc');         
    $query = $this->db->get(); 
    if($query->num_rows() != 0)
    {
       return $query->result();
    }
    else
    {
        return false;
    }
}
function get_company_driver_list($company_id){
		$this->db->where('company_id',$company_id);
		$this->db->order_by('id',"DESC");
		$query=$this->db->get('tbl_driver');
	    return  $query->result();
	}
function driver_listing($id){
	   $this->db->select('*,d.id as id,v.id as v_id,v.track_regi_number as v_reg_no, v.front_image as v_front_image, v.back_image as v_back_image, v.updated_date as v_update_date, v.created_date as v_create_date');
       $this->db->from('tbl_driver as d');
       $this->db->join('tbl_driver_vehicles as v','d.id=v.driver_id','left');
       $this->db->where('d.id',$id);
       $this->db->order_by('d.id','DESC');
       $query=$this->db->get();
       return $query->row();
	}
	
	function subscriber_list(){
	   $this->db->select('distinct (u.id),u.*');
       $this->db->from('tbl_users u');
       $this->db->join('tbl_vehicle_type_details v','u.id= v.user_id','inner');
       $this->db->where('v.payment_status','success');
       $this->db->order_by('u.id',"DESC");
       $query=$this->db->get();
       return  $query->result();
	}
	
	function get_details_by_field_name($field,$table){
		$this->db->where($field);
		$query=$this->db->get($table);
		return  $query->result();
	}
	
public function get_driver_suggestion()
{
    $result=[];
    $this->db->select('sugges.id,sugges.title, sugges.description,sugges.image,sugges.updated_date,sugges.created_date,drv.id as driver_id,CONCAT(drv.first_name," ",drv.last_name) as user_name,drv.email,drv.contact');
    $this->db->from('tbl_driver_suggestions sugges'); 
    $this->db->join('tbl_driver drv', 'drv.id=sugges.driver_id', 'left');
    $this->db->order_by('sugges.id','desc');         
    $query = $this->db->get(); 
    if($query->num_rows()> 0)
    {
       $result= $query->result();
    }
  return $result;
}

//select tb1.id as id,tb1.name as name,tb1.image as image,tb1.description as description,tb1.status as status,tb1.created_date as created_date,tb2.name as parent_name from tbl_category as tb1 left join tbl_category as tb2 on tb1.id=tb2.p_id

function get_category_detilas(){
	   $this->db->select('tb1.id as id,tb1.name as name,tb1.image as image,tb1.description as description,tb1.status as status,tb1.created_date as created_date,tb2.name as category_name');
       $this->db->from('tbl_category as tb1');
       $this->db->join('tbl_category as tb2','tb2.id=tb1.p_id','left');
       $this->db->order_by('tb1.id','DESC');
       $query=$this->db->get();
       return $query->result();
	}

function get_catnparentcat($parent){
		$this->db->select('id, name, p_id');
		$this->db->from('tbl_category');
		//$this->db->where('1');
		$this->db->where('p_id',$parent);
		$this->db->order_by('id','DESC');
		$query=$this->db->get();
		return $query->result();
	}
	
	function fetchCategoryTree($parent = 0, $spacing = '', $user_tree_array = '') {
	  if (!is_array($user_tree_array))
	  $user_tree_array = array();
	  $get_catnparentcat=$this->get_catnparentcat($parent);
		foreach ($get_catnparentcat as $row ) {
		  $user_tree_array[] = array("id" => $row->id, "name" => $spacing . $row->name);
		  $user_tree_array = $this->fetchCategoryTree($row->id, $spacing . '&nbsp;&nbsp;', $user_tree_array);
		}
	  return $user_tree_array;
	 }
	 
	function get_product_list(){
	   $this->db->select('pro.*,cat.name as category_name');
       $this->db->from('tbl_products  pro');
       $this->db->join('tbl_category cat','pro.category_id=cat.id','left');
       $this->db->order_by('pro.id','DESC');
       $query=$this->db->get();
       return $query->result();
	}
	
	function get_area_list(){
	   $this->db->select('area.*,city.name as city_name');
       $this->db->from('tbl_area  area');
       $this->db->join('tbl_city city','city.id=area.city_id','left');
       $this->db->order_by('area.id','DESC');
       $query=$this->db->get();
       return $query->result();
	}
	//prdeep functions end
	
}
?>