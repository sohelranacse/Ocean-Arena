<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper(array('form'));
		$this->load->library("pagination");
		$this->load->database();

		$this->load->model('Admin_model');
		$this->load->model('User_model');
		
		$admin_id = $this->session->userdata('admin');
		$session = $this->session->userdata('session');
		if(empty($admin_id) || empty($session))
		{	
			redirect('member/adminlogin');
		}
	
	}
	public function index(){
		$data['title'] = 'Dashboard';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/dashboard',$data);
		$this->load->view('admin/footer');
	}
	public function logout(){
		$this->session->unset_userdata('admin');
		$this->session->unset_userdata('session');
		redirect('admin');
	} //LOGOUT AND DESTROY SESSION



	public function new_resorts(){
		$data['title'] = 'New Resorts';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/new_resorts',$data);
		$this->load->view('admin/footer');
	}
	public function view_resorts(){
		$data['title'] = 'View Resorts';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/view_resorts',$data);
		$this->load->view('admin/footer');
	}

	public function new_hotel(){
		$data['title'] = 'New Hotel';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/new_hotel',$data);
		$this->load->view('admin/footer');
	}

	public function view_hotel(){
		$data['title'] = 'View Hotel';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/view_hotel',$data);
		$this->load->view('admin/footer');
	}
	public function new_promotion(){
		$data['title'] = 'New Promotion';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/new_promotion',$data);
		$this->load->view('admin/footer');
	}

	public function view_promotion(){
		$data['title'] = 'View Promotion';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/view_promotion',$data);
		$this->load->view('admin/footer');
	}    
    public function new_packages(){
        $data['title'] = 'New Packages';
        $this->load->view('admin/header',$data);
        $this->load->view('admin/new_packages',$data);
        $this->load->view('admin/footer');
    }
    public function view_packages(){
        $data['title'] = 'View Packages';
        $this->load->view('admin/header',$data);
        $this->load->view('admin/view_packages',$data);
        $this->load->view('admin/footer');
    }
	
    /* # DELETE ALL INFORMATION # */
    public function delete_promotion(){
		$id = $this->input->post('id');

        $this->db->where('id',$id);
        $query = $this->db->get('promotions');
        $row = $query->row();
        $image = $row->userfile;
        unlink('./web_assets/img/promotions/'.$image);

		$result = $this->Admin_model->delete_promotion($id);
		echo json_encode($result);
	}
	public function delete_resort(){
		$id = $this->input->post('id');

        $this->db->where('id',$id);
        $query = $this->db->get('resorts');
        $row = $query->row();
        $image = $row->userfile;
        unlink('./web_assets/img/resorts/'.$image);

		$result = $this->Admin_model->delete_resort($id);
		echo json_encode($result);
	}
    public function delete_hotels(){
        $id = $this->input->post('id');

        $this->db->where('id',$id);
        $query = $this->db->get('hotels');
        $row = $query->row();
        $image = $row->userfile;
        unlink('./web_assets/img/hotels/'.$image);

        $result = $this->Admin_model->delete_hotels($id);
        echo json_encode($result);        
    }
    public function delete_rooms(){
        $id = $this->input->post('id');

        $this->db->where('id',$id);
        $query = $this->db->get('rooms');
        $row = $query->row();
        $image = $row->userfile;
        unlink('./web_assets/img/rooms/'.$image);

        $result = $this->Admin_model->delete_rooms($id);
        echo json_encode($result);        
    }

    /* # ADD/INSERT ALL INFORMATION # */
    public function add_promotion(){
        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('offer_title','offer_title','trim|required');
        $this->form_validation->set_rules('resort_name','resort_name','trim|required');
        $this->form_validation->set_rules('offer_code','offer_code','trim|required');

        $offer_title = $this->input->post('offer_title');
        $offer_des = $this->input->post('offer_des');
        $resort_name = $this->input->post('resort_name');
        $offer_code = $this->input->post('offer_code');
        $stay_during = $this->input->post('stay_during');
        $minimum_stay = $this->input->post('minimum_stay');
        $validity = $this->input->post('validity');
        $offer_expiry = $this->input->post('offer_expiry');
        $valid_villas = $this->input->post('valid_villas');

        if ($this->form_validation->run()==false) {
            $this->productadded();
        }else{

            $insert=array(
                'offer_title' => $offer_title,
                'offer_des' => $offer_des,
                'resort_name' => $resort_name,
                'offer_code' => $offer_code,
                'stay_during' => $stay_during,
                'minimum_stay' => $minimum_stay,
                'validity' => $validity,
                'offer_expiry' => $offer_expiry,
                'valid_villas' => $valid_villas
            );
            $this->db->insert('promotions',$insert);

            

            $config['upload_path'] = './web_assets/img/promotions/';

            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '200000';
            $config['max_width'] = '1524000';
            $config['max_height'] = '1000000';

            $this->load->library('upload', $config);                        
            $upload = $this->upload->do_upload('userfile');

            if($upload == true){
                
                $this->db->limit(1);
                $this->db->order_by("id", 'desc'); 
                $query = $this->db->get("promotions");     
                $row = $query->row();
                $lastid=$row->id;

                $update_img=array(
                    'userfile' => $_FILES['userfile']['name']
                );
                $this->db->where('id',$lastid);
                $this->db->update('promotions',$update_img);
            }

            redirect('admin/view_promotion');



        }
    }
	public function add_resorts(){
        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title','title','trim|required');
        $this->form_validation->set_rules('rating','rating','trim|required');

        $title = $this->input->post('title');
        $rating = $this->input->post('rating');
        $atoll = $this->input->post('atoll');
        $no_of_villas = $this->input->post('no_of_villas');
        $duration = $this->input->post('duration');
        $Airport = $this->input->post('airport');

        if ($this->form_validation->run()==false) {
            $this->productadded();
        }else{

            $insert=array(
                'title' => $title,
                'rating' => $rating,
                'atoll' => $atoll,
                'no_of_villas' => $no_of_villas,
                'duration' => $duration,
                'airport' => $Airport
            );
            $this->db->insert('resorts',$insert);

            

            $config['upload_path'] = './web_assets/img/resorts/';

            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '200000';
            $config['max_width'] = '1524000';
            $config['max_height'] = '1000000';

            $this->load->library('upload', $config);
                        
            $upload = $this->upload->do_upload('userfile');
            
            if($upload == true){
                
                $this->db->limit(1);
                $this->db->order_by("id", 'desc'); 
                $query = $this->db->get("resorts");     
                $row = $query->row();
                $lastid=$row->id;

                $update_img=array(
                    'userfile' => $_FILES['userfile']['name']
                );
                $this->db->where('id',$lastid);
                $this->db->update('resorts',$update_img);
            }

            redirect('admin/view_resorts');



        }
    }
    
	public function add_hotels(){
        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('country','country','trim|required');
        $this->form_validation->set_rules('title','title','trim|required');
        $this->form_validation->set_rules('rating','rating','trim|required');

        $country = $this->input->post('country');
        $title = $this->input->post('title');
        $rating = $this->input->post('rating');
        $district = $this->input->post('district');
        $no_of_rooms = $this->input->post('no_of_rooms');
        $duration = $this->input->post('duration');
        $Airport = $this->input->post('airport');

        if ($this->form_validation->run()==false) {
            $this->view_hotel();
        }else{

            $insert=array(
                'country' => $country,
                'title' => $title,
                'rating' => $rating,
                'district' => $district,
                'no_of_rooms' => $no_of_rooms,
                'duration' => $duration,
                'airport' => $Airport
            );
            $this->db->insert('hotels',$insert);

            

            $config['upload_path'] = './web_assets/img/hotels/';

            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['max_size'] = '200000';
            $config['max_width'] = '1524000';
            $config['max_height'] = '1000000';

            $this->load->library('upload', $config);                        
            $upload = $this->upload->do_upload('userfile');


            
            if($upload == true){
                
                $this->db->limit(1);
                $this->db->order_by("id", 'desc'); 
                $query = $this->db->get("hotels");     
                $row = $query->row();
                $lastid=$row->id;

                $update_img=array(
                    'userfile' => $_FILES['userfile']['name']
                );
                $this->db->where('id',$lastid);
                $this->db->update('hotels',$update_img);
            }

            redirect('admin/view_hotel');



        }
    }
    public function add_packages(){
        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title','title','trim|required');

        $title = $this->input->post('title');

        if ($this->form_validation->run()==false) {
            $this->new_packages();
        }else{

            $insert=array(
                'title' => $title
            );
            $this->db->insert('packages',$insert);
            

            $config['upload_path'] = './web_assets/img/packages/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf';
            $config['max_size'] = '200000';
            $config['max_width'] = '1524000';
            $config['max_height'] = '1000000';

            $this->load->library('upload', $config);
            $this->load->library('image_lib');
                        
            $upload = $this->upload->do_upload('userfile');
            $upload1 = $this->upload->do_upload('pfile_name');


            if($upload == true && $upload1 == true){

                $this->db->limit(1);
                $this->db->order_by("id", 'desc'); 
                $query = $this->db->get("packages");     
                $row = $query->row();
                $lastid=$row->id;

                $update_img=array(
                    'userfile' => $_FILES['userfile']['name'],
                    'file_name' => $_FILES['pfile_name']['name']
                );
                $this->db->where('id',$lastid);
                $this->db->update('packages',$update_img);

            }

            redirect('admin/view_packages');



        }
    }


    /* #### DETAILS PAGE WORKSTATION #### */
    public function details($type,$hotel_type,$id){
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

            $data['title'] = 'Details';
            $this->load->view('admin/header',$data);
            $this->load->view('admin/details',$data);
            $this->load->view('admin/footer');
        }
    }

    public function add_overview(){
        $id = $this->input->post('id');
        $overview = $this->input->post('overview');

        $update = array(
            'overview' => $overview
        );
        $this->db->where('id',$id);
        $this->db->update('details',$update);
        if ($this->db->affected_rows()>0) {
            $msg = 'Updated.';
        }else{
            $msg = 'Not changed.';
        }

        echo json_encode($msg);
    }
    public function add_accommodation(){

        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('title','title','trim|required');

        $details_id = $this->input->post('details_id');
        $re_id = $this->input->post('re_id');
        $type = $this->input->post('type');
        $hotel_type = $this->input->post('hotel_type'); //needed redirect


        $title = $this->input->post('title');
        $description = $this->input->post('description');


        if ($this->form_validation->run()==false) {
            $this->index();
        }else{

            $insert=array(
                'details_id' => $details_id,
                'title' => $title,
                'description' => $description
            );
            $this->db->insert('rooms',$insert);
            

            $config['upload_path'] = './web_assets/img/rooms/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf';
            $config['max_size'] = '200000';
            $config['max_width'] = '1524000';
            $config['max_height'] = '1000000';

            $this->load->library('upload', $config);                        
            $upload = $this->upload->do_upload('userfile');

            if($upload == true){

                $this->db->limit(1);
                $this->db->order_by("id", 'desc'); 
                $query = $this->db->get("rooms");     
                $row = $query->row();
                $lastid=$row->id;

                $update_img=array(
                    'userfile' => $_FILES['userfile']['name']
                );
                $this->db->where('id',$lastid);
                $this->db->update('rooms',$update_img);
            }

            redirect("admin/details/$type/$hotel_type/$re_id");
        }
        
    }


    //EDITING SECTION
    public function edit_promotion($id){
        $data['pro_id'] = $id;
        $data['title'] = 'Edit Promotion';
        $this->load->view('admin/header',$data);
        $this->load->view('admin/edit_promotion',$data);
        $this->load->view('admin/footer');
    }
    public function update_promotion(){
        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('pro_id','pro_id','trim|required');
        $this->form_validation->set_rules('offer_title','offer_title','trim|required');
        $this->form_validation->set_rules('resort_name','resort_name','trim|required');
        $this->form_validation->set_rules('offer_code','offer_code','trim|required');

        $pro_id = $this->input->post('pro_id');
        $offer_title = $this->input->post('offer_title');
        $offer_des = $this->input->post('offer_des');
        $resort_name = $this->input->post('resort_name');
        $offer_code = $this->input->post('offer_code');
        $stay_during = $this->input->post('stay_during');
        $minimum_stay = $this->input->post('minimum_stay');
        $validity = $this->input->post('validity');
        $offer_expiry = $this->input->post('offer_expiry');
        $valid_villas = $this->input->post('valid_villas');

        if ($this->form_validation->run()==false) {
            $this->productadded();
        }else{

            $update=array(
                'offer_title' => $offer_title,
                'offer_des' => $offer_des,
                'resort_name' => $resort_name,
                'offer_code' => $offer_code,
                'stay_during' => $stay_during,
                'minimum_stay' => $minimum_stay,
                'validity' => $validity,
                'offer_expiry' => $offer_expiry,
                'valid_villas' => $valid_villas
            );
            $this->db->where('id',$pro_id);
            $this->db->update('promotions',$update);

            
            if ($_FILES['userfile']['name'] != '') {

                $this->db->where('id',$pro_id);
                $query = $this->db->get('promotions');
                $row = $query->row();
                $image = $row->userfile;
                unlink('./web_assets/img/promotions/'.$image);
                
                $config['upload_path'] = './web_assets/img/promotions/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['max_size'] = '200000';
                $config['max_width'] = '1524000';
                $config['max_height'] = '1000000';

                $this->load->library('upload', $config);                        
                $upload = $this->upload->do_upload('userfile');

                if($upload == true){
                    $update_img=array(
                        'userfile' => $_FILES['userfile']['name']
                    );
                    $this->db->where('id',$pro_id);
                    $this->db->update('promotions',$update_img);
                }
            }

            redirect('admin/view_promotion');



        }
    }
    public function edit_package($id){
        $data['pack_id'] = $id;
        $data['title'] = 'Edit Packages';
        $this->load->view('admin/header',$data);
        $this->load->view('admin/edit_package',$data);
        $this->load->view('admin/footer');
    }
    public function update_packages(){
        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('pack_id','pack_id','trim|required');
        $this->form_validation->set_rules('title','title','trim|required');

        $pack_id = $this->input->post('pack_id');
        $title = $this->input->post('title');

        if ($this->form_validation->run()==false) {
            $this->new_packages();
        }else{

            $update=array(
                'title' => $title
            );
            $this->db->where('id',$pack_id);
            $this->db->update('packages',$update);
            
            if ($_FILES['userfile']['name'] != '') {

                $this->db->where('id',$pack_id);
                $query = $this->db->get('packages');
                $row = $query->row();
                $image = $row->userfile;
                unlink('./web_assets/img/packages/'.$image);

                $config['upload_path'] = './web_assets/img/packages/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';

                $this->load->library('upload', $config);
                            
                $upload = $this->upload->do_upload('userfile');
                if($upload == true){
                    $update_img=array(
                        'userfile' => $_FILES['userfile']['name']
                    );
                    $this->db->where('id',$pack_id);
                    $this->db->update('packages',$update_img);
                }
            }
            if ($_FILES['pfile_name']['name'] != '') {

                /*$this->db->where('id',$pack_id);
                $query = $this->db->get('packages');
                $row = $query->row();
                $file_name = $row->file_name;
                unlink('./web_assets/img/packages/'.$file_name);*/

                $config['upload_path'] = './web_assets/img/packages/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif|pdf';

                $this->load->library('upload', $config);
                            
                $upload = $this->upload->do_upload('pfile_name');
                if($upload == true){
                    $update_img=array(
                        'file_name' => $_FILES['pfile_name']['name']
                    );
                    $this->db->where('id',$pack_id);
                    $this->db->update('packages',$update_img);
                }
            }

            redirect('admin/view_packages');



        }
    }
    public function edit_hotel($id){
        $data['pack_id'] = $id;
        $data['title'] = 'Edit Hotel';
        $this->load->view('admin/header',$data);
        $this->load->view('admin/edit_hotel',$data);
        $this->load->view('admin/footer');
    }
    public function update_hotels(){
        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('hotel_id','hotel_id','trim|required');
        $this->form_validation->set_rules('country','country','trim|required');
        $this->form_validation->set_rules('title','title','trim|required');
        $this->form_validation->set_rules('rating','rating','trim|required');

        $id = $this->input->post('hotel_id');
        $country = $this->input->post('country');
        $title = $this->input->post('title');
        $rating = $this->input->post('rating');
        $district = $this->input->post('district');
        $no_of_rooms = $this->input->post('no_of_rooms');
        $duration = $this->input->post('duration');
        $Airport = $this->input->post('airport');

        if ($this->form_validation->run()==false) {
            $this->view_hotel();
        }else{

            $update=array(
                'country' => $country,
                'title' => $title,
                'rating' => $rating,
                'district' => $district,
                'no_of_rooms' => $no_of_rooms,
                'duration' => $duration,
                'airport' => $Airport
            );
            $this->db->where('id',$id);
            $this->db->update('hotels',$update);

            
            if ($_FILES['userfile']['name'] != '') {

                $this->db->where('id',$id);
                $query = $this->db->get('hotels');
                $row = $query->row();
                $image = $row->userfile;
                unlink('./web_assets/img/hotels/'.$image);

                $config['upload_path'] = './web_assets/img/hotels/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['max_size'] = '200000';
                $config['max_width'] = '1524000';
                $config['max_height'] = '1000000';

                $this->load->library('upload', $config);                        
                $upload = $this->upload->do_upload('userfile');

                if($upload == true){

                    $update_img=array(
                        'userfile' => $_FILES['userfile']['name']
                    );
                    $this->db->where('id',$id);
                    $this->db->update('hotels',$update_img);
                }
            }

            redirect('admin/view_hotel');



        }
    }
    public function edit_resorts($id){
        $data['pack_id'] = $id;
        $data['title'] = 'Edit Resorts';
        $this->load->view('admin/header',$data);
        $this->load->view('admin/edit_resorts',$data);
        $this->load->view('admin/footer');
    }
    public function update_resorts(){
        $this->load->helper(array('form','url'));
        $this->load->library('form_validation');

        $this->form_validation->set_rules('resort_id','resort_id','trim|required');
        $this->form_validation->set_rules('title','title','trim|required');
        $this->form_validation->set_rules('rating','rating','trim|required');

        $id = $this->input->post('resort_id');
        $title = $this->input->post('title');
        $rating = $this->input->post('rating');
        $atoll = $this->input->post('atoll');
        $no_of_villas = $this->input->post('no_of_villas');
        $duration = $this->input->post('duration');
        $Airport = $this->input->post('airport');

        if ($this->form_validation->run()==false) {
            $this->productadded();
        }else{

            $update=array(
                'title' => $title,
                'rating' => $rating,
                'atoll' => $atoll,
                'no_of_villas' => $no_of_villas,
                'duration' => $duration,
                'airport' => $Airport
            );
            $this->db->where('id',$id);
            $this->db->update('resorts',$update);

            if ($_FILES['userfile']['name'] != '') {

                $this->db->where('id',$id);
                $query = $this->db->get('resorts');
                $row = $query->row();
                $image = $row->userfile;
                unlink('./web_assets/img/resorts/'.$image);

                $config['upload_path'] = './web_assets/img/resorts/';
                $config['allowed_types'] = 'jpg|jpeg|png|gif';
                $config['max_size'] = '200000';
                $config['max_width'] = '1524000';
                $config['max_height'] = '1000000';

                $this->load->library('upload', $config);
                            
                $upload = $this->upload->do_upload('userfile');
                
                if($upload == true){
                    
                    $update_img=array(
                        'userfile' => $_FILES['userfile']['name']
                    );
                    $this->db->where('id',$id);
                    $this->db->update('resorts',$update_img);
                }
            }

            redirect('admin/view_resorts');



        }
    }
}
?>