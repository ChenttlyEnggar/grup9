<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	public function __construct(){
		parent ::__construct();
		$this->load->model('user');
	}

	public function index()
	{
		$this->load->model('model_products');

		// Dapatkan data dari model Blog dengan pagination
 		// Jumlah artikel per halaman
 		$limit_per_page = 2;
 		// URI segment untuk mendeteksi "halaman ke berapa" dari URL
		 $start_index = ( $this->uri->segment(3) ) ? $this->uri->segment(3) : 0;

 		// Dapatkan jumlah data
		 $total_records = $this->Artikel->get_total();
		 if ($total_records > 0) {
 			// Dapatkan data pada halaman yg dituju
 			$data["model_products"] = $this->model_products->get_all_model_products($limit_per_page,
			$start_index);

		 // Konfigurasi pagination
 		$config['base_url'] = base_url() . 'welcome/index';
 		$config['total_rows'] = $total_records;
 		$config['per_page'] = $limit_per_page;
 		$config["uri_segment"] = 3;

		 $this->pagination->initialize($config);

		 // Buat link pagination
 		$data["links"] = $this->pagination->create_links();
		}

		//$data['artikel'] = $this->Artikel->get_artikels();
		$this->load->view('welcome_message', $data);

	public function login(){
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
	
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('backend/login');
		}else {
			$this->load->model('user');
			$valid_user = $this->user->check_credential();
			
			if($valid_user == FALSE){
				$this->session->set_flashdata('error','wrong Email / password');
				redirect('users');
			} else {
				$this->session->set_userdata('username', $valid_user->username);
				$this->session->set_userdata('group', $valid_user->group);
				
				switch($valid_user->group){
					case 1 : //admin
							redirect('admin/products'); 
							break;
					case 2 : //member
							redirect(base_url());
							break;
					default: break;
				}
			}
		}
	} 	
		

	public function create(){
		//form validasi
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		
		if ($this->form_validation->run() == FALSE)
		{
		$this->load->view('form_login');
		} else {
			//query
			$data_user = array (
				'username'		=> set_value('username'),
				'password'	=> set_value('password'),
				'group'		=>1
			);
			$this->user->create($data_user);
			redirect('Users/create');
		}
	}
}

