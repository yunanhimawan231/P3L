<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();

    $this->load->helper('url');

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


 
}