<?php
/**
 * 
 */
class Home_model extends CI_Model
{
	
	function get_product_list(){
		$this->db->order_by('id',"DESC");
		$query=$this->db->get('tbl_products');
		$data=  $query->result();
		foreach ($data as $key => $value) {
			$data[$key]->product_images=$this->get_product_images($value->id);
		}
		return $data;
	}
	function get_cat_product_list($id){
		$this->db->order_by('id',"DESC");
		$this->db->where('category_id',$id);
		$query=$this->db->get('tbl_products');
		$data=  $query->result();
		foreach ($data as $key => $value) {
			$data[$key]->product_images=$this->get_product_images_row($value->id);
		}
		return $data;
	}
	function get_product_images($id){
		$this->db->where('product_id',$id);
		$query=$this->db->get('product_image');
		return $query->result();
	}
	function get_product_images_row($id){
		$this->db->where('product_id',$id);
		$query=$this->db->get('product_image');
		return $query->row();
	}
	function product_details($id){
		$this->db->order_by('id',"DESC");
		$this->db->where('id',$id);
		$query=$this->db->get('tbl_products');
		$data=  $query->row();
		
			$data->product_images=$this->get_product_images($data->id);
			$data->product_images_single=$this->get_product_images_row($data->id);
		
		return $data;
	}
	function get_cat_product($val){
		
		$this->db->where('home_cat','1');
		$this->db->where('top_cat',$val);
		$query=$this->db->get('tbl_category');
		$data=  $query->row();
		if($data->id){
			$data->products=$this->get_cat_product_list($data->id);	
		}
		return $data;
	}
	
	function banner_list(){
		$this->db->order_by('id',"DESC");
		$this->db->where('status',"1");
		$query=$this->db->get('tbl_banner');
		return  $query->result();
	}
	function get_list_service($id){
		$this->db->where('sub_category',$id);
		$this->db->order_by('id',"DESC");
		$query=$this->db->get('tbl_images');
		return  $query->result();
	}
	function get_category_list(){
		$this->db->where('status','1');
		$this->db->where('p_id','0');
		//$this->db->order_by('id',"DESC");
		$query=$this->db->get('tbl_category');
		$data=array();
		$data=  $query->result();
		foreach ($data as $key => $value) {
			$data[$key]->subcategory=$this->getsubcategory($value->id);
		}
		return $data;
	}
	function getsubcategory($id){
		$this->db->where('p_id',$id);
		$query=$this->db->get('tbl_category');
		return $query->result();
	}
	function get_image_list(){
		$this->db->where('status','1');
		$this->db->order_by('id',"DESC");
		$query=$this->db->get('tbl_images');
		$data=array();
		$data=  $query->result();
		
		$i=0;
		foreach ($data as $key => $value) {
			$data[$i]->get_count_downloads=$this->get_image_download($value->id);
			$i++;
		}
		return $data;
	}
	function get_image_download($id){
		$this->db->where('image_id',$id);
		$query=$this->db->get('tbl_download_images');
		return $query->num_rows();
	}
	function get_details_bycategory($id){
		$this->db->where('status','1');
		if($id!='all'){
			$this->db->where('category_id',$id);
		}
		$this->db->order_by('id',"DESC");
		$query=$this->db->get('tbl_images');
		$data=array();
		$data=  $query->result();
		
		$i=0;
		foreach ($data as $key => $value) {
			$data[$i]->get_count_downloads=$this->get_image_download($value->id);
			$i++;
		}
		return $data;
	}
	function get_details($id,$table){
		$this->db->where('id',$id);
		$query=$this->db->get($table);
		return  $query->row();
	}
	function get_date_byid_images($id){
		$this->db->where('sub_category',$id);
		$query=$this->db->get('tbl_images');
		return  $query->result();
	}
	function get_page_details($id,$table){
		$this->db->where('slug',$id);
		$query=$this->db->get($table);
		return  $query->row();
	}
	function check_login($email,$password){
		//$this->db->where('status','1');
		$this->db->where('email',$email);
		$this->db->where('password',md5($password));
		$query=$this->db->get('tblstaff');
		return  $query->row();
	}function check_duplicate_customer($email){
		$this->db->where('email',$email);
		$query=$this->db->get('tblstaff');
		return  $query->row();
	}
	
	//pt start
	function get_all_records($table,$id){
		$this->db->where('p_id',$id);
		$query=$this->db->get($table);
		$this->db->order_by('id',"ASC");
		return $query->result();
	}
	 function get_products_bycat_id($table,$pro_id){
		$this->db->where('category_id',$pro_id);
		$query=$this->db->get($table);
		$this->db->order_by('id',"ASC");
		return $query->result();
	 }
	 
	 function get_product_byid($table,$id){
		$this->db->where('id',$id);
		$query=$this->db->get($table);
		$this->db->order_by('id',"ASC");
		return $query->row();
	 }
	 
	 function get_list($table){
		$this->db->order_by('userid',"DESC");
		$query=$this->db->get($table);
		return  $query->result();
    }
	function get_area_list($table,$city_id){
		$this->db->where('city_id',$city_id);
		$query=$this->db->get($table);
		return $query->result();
	}
	function get_recordby_parent_id($table,$id){
		$this->db->where('id',$id);
		$query=$this->db->get($table);
		$this->db->order_by('id',"ASC");
		return $query->row();
	}
}
?>