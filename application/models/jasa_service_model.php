<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class jasa_service_model extends CI_model{

		private $_table = "TBL_JASA_SERVICE";

		public $id_jasa_service;
		public $nama_jasa;
		public $harga_jual_jasa;
		public function rules(){

			return [
				[
					'field' => 'ID_JASA_SERVICE',
					'label' => 'id_jasa_service',
					'rules' => 'required'
				],

				[
					'field' => 'NAMA_JASA',
					'label' => 'nama_jasa',
					'rules' => 'required'
				],
				
				[
					'field' => 'HARGA_JUAL_JASA',
					'label' => 'harga_jual_jasa',
					'rules' => 'required'
				]

			];
		}

		public function getAll(){

			return $this->db->get($this->_table)->result();
		}

		public function getById($id_customer){
			
			return $this->db->get_where($this->_table, ["ID_JASA_SERVICE" => $id_jasa_service])->row();
		}

		public function insert(){

			 $post = $this->input->post();

			 $this->id_jasa_service = $post["ID_JASA_SERVICE"];
			 $this->nama_jasa = $post["NAMA_JASA"];
			 $this->harga_jual_jasa = $post["HARGA_JUAL_JASA"];

			

			 $this->db->insert($this->_table, $this);


		}
















	}
?>