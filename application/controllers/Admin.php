<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();		
		$this->load->library('session'); 
		$this->load->helper(array('form','url'));
		$this->load->database();
		$this->load->model('');
		if($this->session->userdata('admin_id') == '') { 
			redirect('Login/index');
		 }
	}
	
		
	public function dashboard()
	{


		$result['activeTab'] = "dashboard";
		$admin_id = $this->session->userdata('admin_id');

		$tot_member = 'SELECT count(user_id) as total FROM gws_user where admin_id='.$admin_id.' ' ;
		$result['total_member']=$this->db->query($tot_member)->row();

		$tot_value = 'SELECT sum(amount) as total FROM amount where admin_id='.$admin_id.' ';
		$result['tot_val']=$this->db->query($tot_value)->row();

		//$act_member = 'SELECT count(user_id) as active FROM amount where MONTH(create_at)=MONTH(now()) and YEAR(create_at)=YEAR(now()) and admin_id='.$admin_id.' GROUP BY amount.user_id ';
		$act_member = 'SELECT count(DISTINCT user_id) as active FROM amount where  admin_id='.$admin_id.' GROUP BY MONTH(create_at)=MONTH(now()) ' ;
		$result['active_member']=$this->db->query($act_member)->row();
		
		$top_per = 'SELECT  gws_user.user_name,gws_user.admin_id,gws_user.create_at,temp.user_id, temp.max_amount FROM (SELECT user_id,sum(amount) max_amount FROM amount WHERE  YEAR (create_at) = YEAR(CURRENT_DATE) AND MONTH (create_at) = MONTH(CURRENT_DATE) GROUP BY user_id order by sum(amount) DESC ) temp join gws_user gws_user on gws_user.user_id = temp.user_id where  gws_user.admin_id='.$admin_id.' limit 3 ';
		//$top_per = 'SELECT * FROM `gws_user` es INNER JOIN amount e ON e.user_id = es.user_id ORDER BY e.`amount` DESC LIMIT 3';
		$result['top_perfomar'] = $this->db->query($top_per)->result();

		$query = 'SELECT *,amount.create_at FROM amount LEFT JOIN gws_user ON amount.user_id = gws_user.user_id where (amount.admin_id='.$admin_id.')  ORDER BY amt_id desc  limit 5 ';
	  	$result['details'] = $this->db->query($query)->result();

	  	$this->load->view('admin/index',$result);
	}
	
	public function new_user()
	{
		$result['activeTab'] = "apps";
		$this->load->view('admin/create_user',$result);
	}

	public function create_new_user()
	{
		$response = array();
			

		$admin_id = $this->session->userdata('admin_id');	
				
			$add_user = array(	'user_id' 	    	=> $this->input->post('phone'),	
								'admin_id' 	    	=> $admin_id,	
								'user_name' 	    => $this->input->post('user_name'),		
								'password' 			=> $this->input->post('password'),
								'email' 			=> $this->input->post('email'),
								'phone' 			=> $this->input->post('phone'),	
								'create_at'     	=> date('Y-m-d'),
			
							);
							
			$user_insert =  $this->db->insert('gws_user', $add_user);	
			if($user_insert == true)
					{	
						$user_id = $this->input->post('phone');
						$password= $this->input->post('password');	
						 $response['status'] = 'success'; 		
						 $response['id'] = $user_id; 	
						 $response['password'] = $password;			
					}
					else 
					{	
					 	$response['status'] = 'failed';
					}

			echo json_encode($response); 

	}

	public function get_user_details()
	{		
		$result['activeTab'] = "apps";
		$admin_id = $this->session->userdata('admin_id');
		$this->db->select('*');
	  	$this->db->from('gws_user');	  	
	  	$this->db->where('admin_id',$admin_id);
	  	$query = $this->db->get();
	  	$result['details'] = $query ->result();	  	
		$this->load->view('admin/user_view_details',$result);
	}

	public function edit_user_by_id($user_id)
	{	
		$this->db->select('*');
        $this->db->from('gws_user');        
        $this->db->where('gws_user.user_id',$user_id);          
        $data['details'] = $this->db->get()->result();
		$this->load->view('admin/edit_user_details', $data);
	}
	// update user information
	public function update_user_details_by_id($user_id)
	{
	       $user_update = array(                
	            'user_name'         => $this->input->post('user_name'),                
	            'password'     		=> $this->input->post('password'), 
	            'email'             => $this->input->post('email'),
	            'phone'             => $this->input->post('phone'),            

	        );      
	          
	    $update = $this->db->where('id', $user_id)->update('gws_user', $user_update);
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

	function delete_user_by_id($user_id)
	{
	    $this->db->where('id', $user_id);
	    $del=$this->db->delete('gws_user'); 

	    if($del == true)
					{		 	
						 $response['status'] = 'success'; 			
					}
					
		echo json_encode($response); 
	}

	public function order()
	{

		$result['activeTab'] = "forms";
		$admin_id = $this->session->userdata('admin_id');	

		$this->db->select('*');
	  	$this->db->from('gws_user'); 
	  	$this->db->where('admin_id',$admin_id);	 	  	
	  	$query = $this->db->get();
	  	$result['details'] = $query ->result();	  	
		$this->load->view('admin/create_order',$result);
		
	}

	public function create_new_order()
	{
		$response = array();
		
			$admin_id = $this->session->userdata('admin_id');
			$add_order = array(	'admin_id' 	    	=> $admin_id,	
								'user_id' 	    	=> $this->input->post('user_id'),
								'amount' 			=> $this->input->post('order_val'),			
								'order_name'		=> $this->input->post('order_name'),		
								'create_at'     	=> date('Y-m-d')			
							);
							
			$insert_order =  $this->db->insert('amount', $add_order);

			if($insert_order == true)
					{		 	
						 $response['status'] = 'success'; 		
					}
					else 
					{	
					 	$response['status'] = 'failed';
					}

			echo json_encode($response); 

	}
	public function check_id()
	{
		$admin_id = $this->session->userdata('admin_id');
		if(isset($_POST['user_name']))
		{
			$name=$_POST['user_name'];
			
			$credential = array('user_id' => $name, 'admin_id' => $admin_id);
			$query = $this->db->get_where('gws_user', $credential)->result();
			
			 if($query==true)
			 {
			   echo "<b style='color:green'>Available</b>";
			 }
			 else
			 {
			 	echo "<b style='color:red'>Not Available</b>";
			 
			 }
			 exit();
		}
	}

	public function check_gwsid()
	{	
		if(isset($_POST['phone']))
		{
			$phone=$_POST['phone'];
			
			$credential = array('user_id' => $phone);
			$query = $this->db->get_where('gws_user', $credential)->result();
			
			if($query==true)
			 {
			   echo "<b style='color:red'>This Phone number is already taken. Try New</b>";
			 }
			else
			 {
			 	echo "<b style='color:green'>Available</b>";			 
			 }
			 exit();
		}
	}

	public function get_order_details()
	{		
		$result['activeTab'] = "forms";
		$admin_id = $this->session->userdata('admin_id');

		$query = 'SELECT *,amount.create_at FROM amount LEFT JOIN gws_user ON amount.user_id = gws_user.user_id where (amount.admin_id='.$admin_id.')  ORDER BY amt_id desc' ;		
	  	$result['details'] = $this->db->query($query)->result();	  	
		$this->load->view('admin/order_view_details',$result);
	}

	

	}

