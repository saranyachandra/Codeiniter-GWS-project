<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();		
		$this->load->library('session'); 
		$this->load->helper(array('form','url'));
		$this->load->database();
		$this->load->model('');
		
	}
	
	public function index()
	{
		$this->load->view('super_admin/login');
	}

	public function login_auth()
	{
		
		$user_name = $this->input->post('user_name');	
	    $password  = $this->input->post('password')	;

	    $credential = array('user_name' => $user_name, 'password' => $password,'active' => 1);
	    $query = $this->db->get_where('super_admin', $credential)->result();
	 	
	        if($query == true)
						{		 	
							foreach ($query as $queries) 
							{
								if($queries->user_type == 'admin')	
								{
									$this->session->set_userdata('admin_id', $queries->super_id);
									$this->session->set_userdata('user_name', $queries->user_name);
									//redirect('admin/dashboard');
									$response['status'] = 'admin'; 	
								}
								else if($queries->user_type == 'super_admin')
								{
									$this->session->set_userdata('admin_id', $queries->super_id);
									$this->session->set_userdata('user_name', $queries->user_name);
									//redirect('super_admin/dashboard');
									$response['status'] = 'super_admin';
								}	
								
							}
							 		
						}
						else 
						{	
						 	$response['status'] = 'failed';
						}
		echo json_encode($response); 
	}


	public function index_user()
	{
		$this->load->view('user/login');
	}
	public function forget_user()
	{
		$this->load->view('user/forget_password');
	}
	public function login_auth_user()
	{
		
		$user_id = $_POST["user_id"];
	    $password = $_POST["password"];

	    $credential = array('user_id' => $user_id, 'password' => $password,'active' => 1);
	    $query = $this->db->get_where('gws_user', $credential)->result();
	 	
	       if($query == true)
						{
							foreach ($query as $queries) 
							{
								$this->session->set_userdata('user_id', $queries->user_id);
								$this->session->set_userdata('user_name', $queries->user_name);
							}
							$response['status'] = 'success'; 		
						}
						else 
						{	
						 	$response['status'] = 'failed';
						}
			echo json_encode($response); 
	}
	public function forget_password()
	{
		
		$user_id  = $_POST["user_id"];
	    $password = $_POST["new_password"];	
	    $data = array('password' => $password ); 
	
	    $update = $this->db->where('user_id', $user_id)->update('gws_user', $data);	   
	 	
	    if($update == true)
			{				
				$response['status'] = 'success'; 		
			}
		else 
			{	
				$response['status'] = 'failed';
			}
		echo json_encode($response); 
	}


}