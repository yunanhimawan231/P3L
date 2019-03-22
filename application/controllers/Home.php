<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
    	parent::__construct();
    	$this->load->model('home_model');

    	if($this->session->userdata('logged_in') === TRUE)
    	{
    		$remove_space = str_replace(' ', '', $this->session->userdata('NAMA_ROLE'));

      		redirect('Page/'.$remove_space);
    	}
  	}
 

	public function index()
	{
		$this->load->view('Home/login');
	}

	function auth()
	{
    	$username = $this->input->post('username',TRUE);
    	$password = md5($this->input->post('password',TRUE));
    	$validate_user = $this->home_model->validate_user($username,$password);

    	if($validate_user->num_rows() > 0)
	    {
	        $data_user  = $validate_user->row_array();
			$username  = $data_user['USERNAME'];
			$nama_pegawai = $data_user['NAMA_PEGAWAI'];
			$id_role = $data_user['ID_ROLE'];

	        $validate_user_role = $this->home_model->validate_user_role($id_role);

	        $data_user_role = $validate_user_role->row_array();
			$user_role = $data_user_role['NAMA_ROLE'];

	        $sesdata = array(
				'USERNAME'  => $username,
				'NAMA_PEGAWAI' => $nama_pegawai,
	            'ID_ROLE'     => $id_role,
	            'NAMA_ROLE' => $user_role,
	            'logged_in' => TRUE
	        );

	        $this->session->set_userdata($sesdata);

	        $remove_space = str_replace(' ', '', $user_role);

	        redirect('Page/'.$remove_space);


	        
    	}
    	else
    	{
			echo $this->session->set_flashdata('msg','Username or Password is Wrong');
        	redirect('Home');
    	}
  	}

}
