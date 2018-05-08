<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	public function __construct(){
		parent ::__construct();
		$this->load->model('user');
	}
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

