<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Order extends CI_Controller {

	 public function __construct()
	 {
	 	parent::__construct();
	 	if(!$this->session->userdata('username'))
	 	{
	 		redirect('login');
	 	}	
	 	$this->load->model('m_order');
	 }

	 public function index()
	 {
	 	$proses = $this->m_order->proses();
	 	if($proses){
	 		$this->cart->destroy();
	 		redirect('welcome');
	 	} else {
	 		$this->session->set_flashdata('error','Gagal untuk memproses pemesanan, mohon coba lagi!');
	 		redirect('welcome/cart');
	 	}
	 }

	 public function success()
	 {
	 	$this->load->view('welcome_message');
	 }

	 public function catalog()
{

    $this->load->model('m_order');
    $data = $this->Catalog_products->Show_all_products();
    $this->load->view('catalog', $data);
}
}