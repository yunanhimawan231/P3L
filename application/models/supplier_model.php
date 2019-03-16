<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class supplier_model extends CI_model{

		private $_table = "TBL_SUPPLIER";

		public $id_supplier;
		public $nama_supplier;
		public $alamat_supplier;
		public $telp;
		public $nama_sales;
		public $telepon_sales;

		public function rules(){

			return [
				[
					'field' => 'ID_SUPPLIER',
					'label' => 'id_supplier',
					'rules' => 'required'
				],

				[
					'field' => 'NAMA_SUPPLIER',
					'label' => 'Nama_supplier',
					'rules' => 'required'
				],
				
				[
					'field' => 'ALAMAT_SUPPLIER',
					'label' => 'Alamat_supplier',
					'rules' => 'required'
				],

				[
					'field' => 'TELP',
					'label' => 'Telp',
					'rules' => 'required'
				],

				[
					'field' => 'NAMA_SALES',
					'label' => 'Nama_sales',
					'rules' => 'required'
				],

				[
					'field' => 'TELEPON_SALES',
					'label' => 'Telepon_sales',
					'rules' => 'required'
				]
			];
		}

		public function getAll(){

			return $this->db->get($this->_table)->result();
		}

		public function getById($id_supplier){
			
			return $this->db->get_where($this->_table, ["ID_SUPPLIER" => $id_supplier])->row();
		}

		public function insert(){

			 $post = $this->input->post();

			 $this->id_supplier = $post["ID_SUPPLIER"];
			 $this->nama_supplier = $post["NAMA_SUPPLIER"];
			 $this->alamat_supplier = $post["ALAMAT_SUPPLIER"];
			 $this->telp = $post["TELP"];
			 $this->nama_sales = $post["NAMA_SALES"];
			 $this->telepon_sales = $post["TELEPON_SALES"];

			 $this->db->insert($this->_table, $this);


		}
















	}
?>