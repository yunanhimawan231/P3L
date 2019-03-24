<?php
class Page extends CI_Controller{
  function __construct(){
    
    parent::__construct();

    $this->load->helper('url');

    $this->load->model('customer_model');

    if($this->session->userdata('logged_in') !== TRUE){
      redirect('Home');
    }
    
  }

  function admin(){
    
      if($this->session->userdata('NAMA_ROLE')==='Admin'){

          $data['content'] = 'Content/home';
          $this->load->view('Template/dashboard',$data);
          
      }else{
          echo "Access Denied";
      }
 
  }
 
  function customerservice(){

    if($this->session->userdata('NAMA_ROLE')==='Customer Service'){
          
          $data['content'] = 'Content/home';
          $this->load->view('Template/dashboard',$data);
      }else{
          echo "Access Denied";
      }
  }

  function dashboard(){

    if($this->session->userdata('NAMA_ROLE')==='Admin')
    {
      $this->admin();
    }else if($this->session->userdata('NAMA_ROLE')==='Customer Service')
    {
      $this->customerservice();
    }

  }

  function input_supplier(){

    $data['content'] = 'Content/input_supplier';
    $this->load->view('Template/dashboard',$data);
  }

  function input_jasa_service(){

    $data['content'] = 'Content/input_jasa_service';
    $this->load->view('Template/dashboard',$data);
  }

  function input_customer(){

    $data['customer'] = $this->customer_model->getAll();
    $data['temp'] = 0;
    $data['content'] = 'Content/input_customer';
    $this->load->view('Template/dashboard',$data);
  }

  function edit_customer(){
		$data["customer"] = $customer->getById($id);
			
		$data['content'] = 'Content/edit_input_customer';
    $this->load->view('Template/dashboard',$data);
  }


 
}