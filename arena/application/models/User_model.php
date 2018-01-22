<?php
class User_model extends CI_Model{
	
	
	public function __construct()
	{
		$this->load->database();
	}
	public function get_promotions(){
		$this->db->order_by('resort_name','asc');
		$query = $this->db->get("promotions");
        return $query;
	}
	public function get_resorts(){
		$this->db->order_by('title','asc');
		$query = $this->db->get("resorts");
        return $query;
	}
	public function get_hotels(){
		$this->db->order_by('title','asc');
		$query = $this->db->get("hotels");
        return $query;
	}
	public function get_packages(){
		$this->db->order_by('title','asc');
		$query = $this->db->get("packages");
        return $query;
	}
    

}
?>