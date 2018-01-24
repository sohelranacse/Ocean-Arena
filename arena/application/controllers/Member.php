<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper(array('form'));
		$this->load->library("pagination");
		$this->load->database();
		
		$this->load->model('Admin_model');
	
	}
	public function adminlogin()
	{
		

		$admin_id = $this->session->userdata('admin');
		$session = $this->session->userdata('session');
		if(!empty($admin_id) && !empty($session)){	
			redirect('admin');
		}else{
			$this->load->helper('form');
			$this->load->library('form_validation');      
	        $this->form_validation->set_rules('username',  'username',  'required');
	        $this->form_validation->set_rules('password',  'password',  'required|min_length[1]');
	        if ($this->form_validation->run() === FALSE)
			{
				$this->load->view('admin/login');
			}
			else
			{
				$username = $this->input->post('username');	
				$password = $this->input->post('password');

				$query = $this->Admin_model->check_adminlogin($username,$password);
				if($query->num_rows()>0){
					$data = $query->row();

					if ($username == $data->username && $password == $data->password) {

						//session_start();
						$session_id = session_id();
						
						$this->session->set_userdata('admin', $data->id);	
						$this->session->set_userdata('session', $session_id);

						$update_session=array(
							"session" => $session_id
						);
						$this->db->where('id',$data->id);
						$this->db->update('admin',$update_session);
						redirect('admin');
					}else{
						$this->load->view('admin/login');
					}
				}else{
					$this->load->view('admin/login');
				}

			}


		}


		
	}
	
}
?>