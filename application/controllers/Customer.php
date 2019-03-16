<?php

defined('BASEPATH') OR exit('No direct script access allowed');

	class Customer extends CI_Controller
	{
		public function __construct(){
	        parent::__construct();
	        $this->load->model("customer_model");
	        $this->load->library('form_validation');
	    }

	    public function insert(){
	        $customer = $this->customer_model;
	        $validation = $this->form_validation;
	        $validation->set_rules($customer->rules());

	        if ($validation->run()) {
	            $customer->insert();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
                redirect('Page/dashboard');
	        }
	    }
	}

	

?>