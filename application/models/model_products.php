<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_products extends CI_Model {
	
	public function all(){
		//query semua record di table products
		$hasil = $this->db->get('products');
		if($hasil->num_rows() >0){
			return $hasil->result();
		}else{
			return array();
		}
	}
	public function find($id){
		//query mencari record berdasarkan ID-nya
		$hasil = $this->db->where('id',$id)
						  ->limit(1)
						  ->get('products');
			if($hasil->num_rows() > 0){
				return $hasil->row();
				}else{
					return array();
				}
	}
	public function create($data_products){
		//Query Insert Into
			$this->db->insert('products', $data_products);
	}
	
	public function update($id, $data_products){
		//Query Edit
		$this->db->where('id',$id)
				 ->update('products',$data_products);
	}
		
	public function delete($id, $data_products){
		//Query Delete
		$this->db->where('id',$id)
				 ->delete('products');
	}
	
}