<?php

defined('BASEPATH') OR exit('No direct script access allowed');

	class Supplier extends CI_Controller
	{
		public function __construct(){
	        parent::__construct();
	        $this->load->model("supplier_model");
	        $this->load->library('form_validation');
	    }

	    public function insert(){
	        $supplier = $this->supplier_model;
	        $validation = $this->form_validation;
	        $validation->set_rules($supplier->rules());

	        if ($validation->run()) {
	            $supplier->insert();
	            $this->session->set_flashdata('success', 'Berhasil disimpan');
	        }
	    }
	}

	

?>