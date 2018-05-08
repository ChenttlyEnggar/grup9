<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Invoices extends CI_Controller {
	public function __construct(){
		parent::__construct();

		if($this->session->userdata('group') != '1'){
			$this->session->set_flashdata('error',   'Maaf, Anda Belum Masuk!');
			redirect('login');
		}

		//load model -> mproduk
		$this->load->model('m_order');
	}
	
	public function index()
	{
		$data['invoices'] = $this->m_order->all();
		$this->load->view('backend/v_invoices', $data);
	}
	
	
	public function detail($invoice_id)
	{
		$data['invoices'] = $this->m_order->get_invoice_by_id($invoice_id);
		$data['orders']	  = $this->m_order->get_orders_by_invoice($invoice_id);
		$this->load->view('backend/v_invoices_detail', $data);
	}
}