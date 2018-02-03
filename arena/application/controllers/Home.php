<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper(array('form'));
		$this->load->library("pagination");
		$this->load->database();

		$this->load->model('Admin_model');
		$this->load->model('User_model');
	
	}
	public function index(){
		$data['title'] = 'Ocean Arena Travels';
		$this->load->view('web/header',$data);
		$this->load->view('web/index',$data);
		$this->load->view('web/footer');
	}

	public function contact(){
		$data['title'] = 'Contact us | Ocean Arena Travels';
		$this->load->view('web/header',$data);
		$this->load->view('web/contact-us',$data);
		$this->load->view('web/footer');
	}
	public function about(){
		$data['title'] = 'About us | Ocean Arena Travels';
		$this->load->view('web/header',$data);
		$this->load->view('web/about-us',$data);
		$this->load->view('web/footer');
	}
	
	public function promotions(){
		$data['title'] = 'Promotions | Ocean Arena Travels';
		$this->load->view('web/header',$data);
		$this->load->view('web/promotions',$data);
		$this->load->view('web/footer');
	}
	public function offers($id, $title){
		$data['id'] = $id;
		$data['offer_title'] = $title;

		$data['title'] = 'Promotional Offers | Ocean Arena Travels';
		$this->load->view('web/header',$data);
		$this->load->view('web/offers',$data);
		$this->load->view('web/footer');
	}



	public function maldives_about(){
		$data['title'] = 'Maldives | Ocean Arena Travels';
		$this->load->view('web/header',$data);
		$this->load->view('web/maldives_about',$data);
		$this->load->view('web/footer');
	}
	public function maldives_resorts(){
		$data['title'] = 'Maldives Resorts | Ocean Arena Travels';
		$this->load->view('web/header',$data);
		$this->load->view('web/maldives_resorts',$data);
		$this->load->view('web/footer');
	}
	public function maldives_hotel(){
		$data['title'] = 'Maldives Hotels | Ocean Arena Travels';
		$this->load->view('web/header',$data);
		$this->load->view('web/maldives_hotel',$data);
		$this->load->view('web/footer');
	}


	public function srilanka_about(){
		$data['title'] = 'Sri Lanka | Ocean Arena Travels';
		$this->load->view('web/header',$data);
		$this->load->view('web/srilanka_about',$data);
		$this->load->view('web/footer');
	}
	public function hotel_srilanka(){
		$data['title'] = 'Sri Lanka Hotels | Ocean Arena Travels';
		$this->load->view('web/header',$data);
		$this->load->view('web/hotel-srilanka',$data);
		$this->load->view('web/footer');
	}
	public function srilanka_packages(){
		$data['title'] = 'Sri Lanka Holiday Packages | Ocean Arena Travels';
		$this->load->view('web/header',$data);
		$this->load->view('web/srilanka_packages',$data);
		$this->load->view('web/footer');
	}

	public function details_information($type,$hotel_type,$id,$title){
		$type = $type;
        $hotel_type = $hotel_type;
        $re_id = $id;
        if ($re_id == 0 || $type == 0) {
            $this->index();
        }else{

        	$this->db->where('type',$type);
            $this->db->where('hotel_type',$hotel_type);
            $this->db->where('re_id',$re_id);
            $check_query = $this->db->get('details');
            if ($check_query->num_rows()>0) {
                $data['value'] = $check_query;
            }else{
                $insert_new = array(
                    're_id' => $re_id,
                    'type' => $type,
                    'hotel_type' => $hotel_type
                );
                $this->db->insert('details',$insert_new);

                $this->db->where('type',$type);
                $this->db->where('hotel_type',$hotel_type);
                $this->db->where('re_id',$re_id);
                $data['value'] = $this->db->get('details');
            }

			$data['title'] = 'Detailed Information | Ocean Arena Travels';
			$this->load->view('web/header',$data);
			$this->load->view('web/details_information',$data);
			$this->load->view('web/footer');
		}
	}
	public function contact_submit(){
		$name = $this->input->post('name');
		$email = $this->input->post('to_email');
		$subject = $this->input->post('subject');
		$description = $this->input->post('description');


        $conTo = 'sales@oceanarenatravels.com';

		$sent=mail($conTo,$subject,$description,$email);

        if(!$sent){
            $msg = 'There are problems in sending mails  <br>';
        }else{
            $msg = 'Message sent successful.';
        }


		echo json_encode($msg);
	}





}
?>