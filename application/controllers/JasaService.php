<?php

defined('BASEPATH') OR exit('No direct script access allowed');

	class JasaService extends CI_Controller
	{
		public function __construct(){
	        parent::__construct();
	        $this->load->model("jasa_service_model");
	        $this->load->library('form_validation');
	    }

	    public function insert(){
	        $jasa_service = $this->jasa_service_model;
	        $validation = $this->form_validation;
	        $validation->set_rules($jasa_service->rules());

	        if ($validation->run()) {
	            $jasa_service->insert();
                $this->session->set_flashdata('success', 'Berhasil disimpan');
                redirect('Page/dashboard');
	        }
	    }
	}

	

?>