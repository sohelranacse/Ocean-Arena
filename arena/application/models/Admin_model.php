<?php
class Admin_model extends CI_Model{
	
	
	public function __construct()
	{
		$this->load->database();
	}


    public function check_adminlogin($username,$password){
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $query=$this->db->get('admin');
        return $query;
    } //FOR LOGIN GET CND CHECK USER DATA


    public function delete_promotion($id){
        $this->db->where('id',$id);
        $this->db->delete('promotions');
        if ($this->db->affected_rows()>0) {
            return 1;
        }        
    }
    public function delete_resort($id){
        $this->db->where('id',$id);
        $this->db->delete('resorts');
        if ($this->db->affected_rows()>0) {
            return 1;
        }        
    }
    public function delete_hotels($id){
        $this->db->where('id',$id);
        $this->db->delete('hotels');
        if ($this->db->affected_rows()>0) {
            return 1;
        }        
    }
    public function delete_rooms($id){
        $this->db->where('id',$id);
        $this->db->delete('rooms');
        if ($this->db->affected_rows()>0) {
            return 1;
        }        
    }

}
?>