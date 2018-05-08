<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_order extends CI_Model {


	public function proses()
	{	
		//buat invoice baru
		$invoice = array(
			'tanggal'    =>date('Y-m-d H:i:s'),
			'due_date' 	 =>date('Y-m-d H:i:s', mktime(date('H'),date('i'),date('s'),date('m'),date('d') + 1,date('Y'))),
			'user_id'	 =>$this->get_logger_user_id(),
			'status'	 =>'unpaid'
		);
		$this->db->insert('invoices', $invoice);
		$invoice_id = $this->db->insert_id();

		//meletakkan order item ke order table
		foreach($this->cart->contents() as $item){
			$data = array(
				'id'		=>$invoice_id,
				'product_name'				=>$item['name'],
				'qty'				=>$item['qty'],
				'price'				=>$item['price'],	
							);
			$this->db->insert('orders', $data);
		}

		return TRUE;
	}

	 public function tampil()
    {

       return $this->db->get('orders');

    }


	 public function all()
	{
		//menampilkan record invoices
		$hasil = $this->db->get('invoices');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else {
			return false;
		}
	}



	public function get_invoice_by_id($invoice_id)
	{
		$hasil = $this->db->where('id',$invoice_id)->limit(1)->get('invoices');
		if($hasil->num_rows() > 0){
			return $hasil->row();
		} else {
		return false;
		}
	}

	public function get_orders_by_invoice($invoice_id)
	{
		$hasil = $this->db->where('invoice_id',$invoice_id)->get('orders');
		if($hasil->num_rows() > 0){
			return $hasil->result();
		} else {
		return false;
		}
	}

	
	public function get_logger_user_id()
	{
		$hasil = $this->db
					  ->select('id')
					  ->where('username',$this->session->userdata('username'))
					  ->limit(1)
					  ->get('users');
		if($hasil->num_rows() > 0){
			return $hasil->row()->id;
		}	else {
				return 0;
		}		  
	}
}  