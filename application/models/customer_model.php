<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class customer_model extends CI_model{

		private $_table = "TBL_CUSTOMER";

		public $id_customer;
		public $nama_customer;
		public $alamat_customer;
		public $telepon_customer;
		
		public function rules(){
			return [
				[
					'field' => 'ID_CUSTOMER',
					'label' => 'id_customer',
					'rules' => 'required'
				],

				[
					'field' => 'NAMA_CUSTOMER',
					'label' => 'nama_customer',
					'rules' => 'required'
				],
				
				[
					'field' => 'ALAMAT_CUSTOMER',
					'label' => 'alamat_customer',
					'rules' => 'required'
				],

				[
					'field' => 'TELEPON_CUSTOMER',
					'label' => 'telepon_customer',
					'rules' => 'required'
				]

			];
		}

		public function getAll(){

			return $this->db->get($this->_table)->result();
		}

		public function getById($id_customer){
			
			return $this->db->get_where($this->_table, ["ID_CUSTOMER" => $id_customer])->row();
		}

		public function insert(){

			 $post = $this->input->post();

			 $this->id_customer = $post["ID_CUSTOMER"];
			 $this->nama_customer = $post["NAMA_CUSTOMER"];
			 $this->alamat_customer = $post["ALAMAT_CUSTOMER"];
			 $this->telepon_customer = $post["TELEPON_CUSTOMER"];
			

			 $this->db->insert($this->_table, $this);

		}

		public function update()
		{
			$post = $this->input->post();
			
			$this->id_customer = $post["ID_CUSTOMER"];
			$this->nama_customer = $post["NAMA_CUSTOMER"];
			$this->alamat_customer = $post["ALAMAT_CUSTOMER"];
			$this->telepon_customer = $post["TELEPON_CUSTOMER"];

			$this->db->update($this->_table, $this, array('ID_CUSTOMER' => $post['ID_CUSTOMER']));
		}

		public function delete($id)
		{
			return $this->db->delete($this->_table, array("ID_CUSTOMER" => $id));
		}
















	}
?>