<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();		
		$this->load->library('session'); 
		$this->load->helper(array('form','url'));
		$this->load->database();
		$this->load->model('');
		if($this->session->userdata('user_id') == '') { 
			redirect('Login/index_user');
		}
	}
	
	
	public function check_userid()
	{
		
		if(isset($_POST['user_name']))
		{
			$user_id=$_POST['user_name'];			
			
			$credential = array('user_id' => $user_id);
			$query = $this->db->get_where('gws_user', $credential)->result();

			
			if($query!=true)
			 {
			   echo "<b style='color:red'>Please enter correct GWS-ID</b>";
			 }
			
			 exit();
		}
	}
	
	public function dashboard()
	{
		$result['activeTab'] = "dashboard";
		$user_id = $this->session->userdata('user_id');

		$offer_val = 'SELECT user_id,sum(offer) as tot_off FROM `amount` where user_id='.$user_id.' ' ;
		$result['total_offer']=$this->db->query($offer_val)->row();

		$act_member = 'SELECT count(refer_id) as total FROM refer_member where user_id='.$user_id.' and status=1 ' ;
		$result['active_member']=$this->db->query($act_member)->row();

		$tot_value = 'SELECT sum(amount) as total FROM amount where user_id="'.$user_id.'" ';
		$result['tot_val']=$this->db->query($tot_value)->row();

		$rank = 'SELECT user_id,sum(amount) as total,dense_rank() over (order by total desc) as rank_order from amount group by user_id ';
		$result['rank_order']=$this->db->query($rank)->result();
		
		$upcoming = 'SELECT * FROM `amount` WHERE user_id='.$user_id.' and `create_at` BETWEEN DATE_SUB( DATE( NOW( ) ) , INTERVAL 1 MONTH ) AND LAST_DAY( DATE_SUB( DATE( NOW( ) ) , INTERVAL 1 MONTH ) )';
		$result['upcoming_order'] = $this->db->query($upcoming)->result();
		
		$recent_order = 'SELECT *,amount.create_at FROM amount LEFT JOIN gws_user ON amount.user_id = gws_user.user_id where (amount.user_id="'.$user_id.'")  ORDER BY amt_id desc  limit 5 ';
	  	$result['details'] = $this->db->query($recent_order)->result();

	  	$this->load->view('user/index',$result);
	}

	public function refer_user()
	{
		$result['activeTab'] = "apps";
		$this->load->view('user/refer_user',$result);
	}
	public function create_new_user()
	{
		$response = array();

		$user_id = $this->session->userdata('user_id');	
				
			$add_user = array(	'refer_id' 	    => $this->input->post('r_phone'),	
								'user_id' 	    => $user_id,	
								'r_name' 	    => $this->input->post('refer_name'),		
								'r_email' 		=> $this->input->post('r_mail'),
								'r_phone' 		=> $this->input->post('r_phone'),									
								'create_at'     => date('Y-m-d'),			
							);
							
			$user_insert =  $this->db->insert('refer_member', $add_user);	
			if($user_insert == true)
					{		 	
						 $response['status'] = 'success'; 		
						
					}
					else 
					{	
					 	$response['status'] = 'failed';
					}

			echo json_encode($response); 

	}
	public function refer_doctor()
	{
		$result['activeTab'] = "apps";
		$this->load->view('user/refer_doctor',$result);
	}
	public function create_new_refer_doctor()
	{
		$response = array();

		$user_id = $this->session->userdata('user_id');	
				
			$add_user = array(	'doc_refer_id' 	=> $this->input->post('r_phone'),	
								'user_id' 	    => $user_id,	
								'doc_name' 	    => $this->input->post('refer_name'),		
								'doc_email' 	=> $this->input->post('r_mail'),
								'doc_phone' 	=> $this->input->post('r_phone'),												
								'create_at'     => date('Y-m-d'),
			
							);
							
			$user_insert =  $this->db->insert('refer_doctor', $add_user);	
			if($user_insert == true)
					{		 	
						 $response['status'] = 'success'; 		
						
					}
					else 
					{	
					 	$response['status'] = 'failed';
					}

			echo json_encode($response); 

	}
	public function check_refer_id()
	{	
		if(isset($_POST['user_name']))
		{
			$name=$_POST['user_name'];
			
			$credential = array('refer_id' => $name);
			$query = $this->db->get_where('refer_member', $credential)->result();
			
			 if($query==true)
			 {
			   echo "<b style='color:red'>That Phone Number is already taken. Try another</b>";
			 }
			 else
			 {
			 	echo "<b style='color:green'>Available</b>";			 
			 }
			 exit();
		}
	}
	public function check_doctor_id()
	{	
		if(isset($_POST['refer_id']))
		{
			$name=$_POST['refer_id'];
			
			$credential = array('doc_refer_id' => $name);
			$query = $this->db->get_where('refer_doctor', $credential)->result();
			
			 if($query==true)
			 {
			   echo "<b style='color:red'>That Phone Number is already taken. Try another</b>";
			 }
			 else
			 {
			 	echo "<b style='color:green'>Available</b>";			 
			 }
			 exit();
		}
	}
	public function get_user_details()
	{	
		$result['activeTab'] = "apps";	

		$user_id = $this->session->userdata('user_id');	
		$this->db->select('*');
	  	$this->db->from('refer_member');	  	
	  	$this->db->where('user_id',$user_id);
	  	$this->db->order_by("id", "desc");
	  	$query = $this->db->get();
	  	$result['details'] = $query ->result();	  	
		$this->load->view('user/user_view_details',$result);
	}
	public function get_doctor_details()
	{	
		$result['activeTab'] = "apps";	

		$user_id = $this->session->userdata('user_id');	
		$this->db->select('*');
	  	$this->db->from('refer_doctor');	  	
	  	$this->db->where('user_id',$user_id);
	  	$this->db->order_by("id", "desc");
	  	$query = $this->db->get();
	  	$result['details'] = $query ->result();	  	
		$this->load->view('user/doctor_view_details',$result);
	}
	public function edit_user_by_id($id)
	{	
		$this->db->select('*');
        $this->db->from('refer_member');        
        $this->db->where('refer_member.id',$id);          
        $data['details'] = $this->db->get()->result();
		$this->load->view('user/edit_user_details', $data);
	}
	public function update_user_details_by_id($id)
	{
	       $user_update = array(                
	            'r_name'         => $this->input->post('user_name'),                
	            'r_password'     		=> $this->input->post('password'), 
	            'r_email'             => $this->input->post('email'),
	            'r_phone'             => $this->input->post('phone')            

	        );      
	          
	    $update = $this->db->where('id', $id)->update('refer_member', $user_update);
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
	public function get_order_details()
	{		
		$result['activeTab'] = "forms";	
		$user_id = $this->session->userdata('user_id');

		$query = 'SELECT *,amount.create_at FROM amount LEFT JOIN gws_user ON amount.user_id = gws_user.user_id where (amount.user_id="'.$user_id.'")  ORDER BY amt_id desc' ;		
	  	$result['details'] = $this->db->query($query)->result();	  	
		$this->load->view('user/order_view_details',$result);
	}
	public function delete_user_by_id($id)
	{
	    $this->db->where('id', $id);
	    $del=$this->db->delete('refer_member'); 

	    if($del == true)
					{		 	
						$response['status'] = 'success'; 			
					}
					
		echo json_encode($response); 
	}
	public function delete_doctor_by_id($id)
	{
	    $this->db->where('id', $id);
	    $del=$this->db->delete('refer_doctor'); 

	    if($del == true)
					{		 	
						$response['status'] = 'success'; 			
					}
					
		echo json_encode($response); 
	}

	public function Logout()
    {
        $this->session->sess_destroy();
        redirect('Login/index_user');
    }
   

}