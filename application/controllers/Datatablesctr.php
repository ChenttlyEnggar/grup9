<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datatablesctr extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_products');
	}

	public function index()
	{
		// Dapatkan data model product dari model
		$model_products['data'] = $this->model_products->get_model_products();
		$this->load->view('datatablesview', $model_products);
	}

	public function get_json()
	{
		$model_products['data'] = $this->model_products->get_model_products();
		
		// Tampilkan dalam bentuk format
		echo json_encode($model_products);
	}

	public function view_json()
	{
		$this->load->view('datatablesview/dt_json');
	}

}
