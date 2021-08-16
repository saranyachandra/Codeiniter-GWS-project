<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Super_admin extends CI_Controller {

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
		$tot_member = 'SELECT count(user_id) as total FROM gws_user';
		$result['total_member']=$this->db->query($tot_member)->row();

		//$act_member = 'SELECT count(user_id) as total FROM gws_user where active=1';
		$act_member = 'SELECT count(DISTINCT user_id) as total FROM amount  GROUP BY MONTH(create_at)=MONTH(now()) ' ;
		$result['active_member']=$this->db->query($act_member)->row();

		$tot_value = 'SELECT sum(amount) as total FROM amount';
		$result['tot_val']=$this->db->query($tot_value)->row();

		$query = 'SELECT * FROM amount LEFT JOIN gws_user ON amount.user_id = gws_user.user_id ORDER BY id DESC LIMIT 5';		
	  	$result['recent_order'] = $this->db->query($query)->result();

	  	$chart_query = 'SELECT * FROM amount LEFT JOIN gws_user ON amount.user_id = gws_user.user_id ORDER BY id DESC LIMIT 10';
	  	$result['chart_order'] = $this->db->query($chart_query)->result();


	  	$top_per = 'SELECT * FROM `gws_user` es INNER JOIN amount e ON e.user_id = es.user_id ORDER BY e.`amount` DESC LIMIT 3';
	  	//$top_per = 'SELECT temp.user_id, temp.max_amount FROM (SELECT user_id,sum(amount) max_amount FROM `amount` WHERE YEAR (`create_at`) = YEAR(CURRENT_DATE) AND MONTH (`create_at`) = MONTH(CURRENT_DATE) GROUP BY user_id order by sum(amount) desc) temp limit 3';
	  	$result['top_perfomar'] = $this->db->query($top_per)->result();

		//print_r($result['tot_val']);
		
		$this->load->view('super_admin/index',$result);
	}

	public function update_offer()
	{
		$this->load->view('admin/order');
	}

	public function order()
	{
		
		$this->load->view('admin/order',$result);
	}
	public function create_offer()
	{
		$response = array();	

		$id  = $this->input->post('id');
		$val =$this->input->post('off_val');
		$amt =$this->input->post('amt');

		$offer_cal = ($amt*$val)/100 ;		
		
		$user_update = array( 'offer'   => $offer_cal );                  
	           				
			$update = $this->db->where('amt_id', $id)->update('amount', $user_update);
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
	public function create_admin()
	{
		$result['activeTab'] = "apps";
		$this->load->view('super_admin/create_admin',$result);
	}	
	public function create_new_admin()
	{
		$response = array();		
				
		$add_admin = array(	    'user_type' 	    => 'admin',							
								'user_name' 	    => $this->input->post('user_name'),		
								'password' 			=> $this->input->post('password'),
								'email' 			=> $this->input->post('email'),
								'phone' 			=> $this->input->post('phone'),	
								'create_at'     	=> date('Y-m-d'),
								'active'			=> '0'
			
							);
							
			$user_insert =  $this->db->insert('super_admin', $add_admin);	
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
	public function check_admin()
	{	
		if(isset($_POST['user_name']))
		{
			$name=$_POST['user_name'];
			
			$credential = array('email' => $name);
			$query = $this->db->get_where('super_admin', $credential)->result();
			
			 if($query==true)
			 {
			   echo "<b style='color:red'>That GWS-ID is taken. Try another</b>";
			 }
			 else
			 {
			 	echo "<b style='color:green'>Available</b>";			 
			 }
			 exit();
		}
	}

	public function get_admin_details()
	{		
		$result['activeTab'] = "apps";
		$this->db->select('*');
	  	$this->db->from('super_admin');
	  	//$this->db->where('active=1');		  		  	
	  	$query = $this->db->get();
	  	$result['details'] = $query ->result();	  	
		$this->load->view('super_admin/admin_view_details',$result);
	}
	public function delete_user_by_id($user_id)
	{
	    $this->db->where('id', $user_id);
	    $del=$this->db->delete('super_admin'); 

	    if($del == true)
					{		 	
						 $response['status'] = 'success'; 			
					}
					
		echo json_encode($response); 
	}
	public function edit_admin_by_id($super_id)
	{	
		$this->db->select('*');
        $this->db->from('super_admin');        
        $this->db->where('super_admin.super_id',$super_id);          
        $data['details'] = $this->db->get()->result();
		$this->load->view('super_admin/edit_admin_details', $data);
	}
	// update user information
	public function update_admin_details_by_id($user_id)
	{
	       $user_update = array(                
	            'user_name'         => $this->input->post('user_name'),                
	            'password'     		=> $this->input->post('password'), 
	            'email'             => $this->input->post('email'),
	            'phone'             => $this->input->post('phone')    

	        );      
	          
	    $update = $this->db->where('super_id', $user_id)->update('super_admin', $user_update);
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

	public function gws_member()
	{
		$result['activeTab'] = "User";
		$this->db->select('*');
	  	$this->db->from('gws_user');
	  		  		  	
	  	$query = $this->db->get();
	  	$result['details'] = $query ->result();	  	
		$this->load->view('super_admin/gws_member',$result);
	}
	public function get_order_details()
	{		
		$result['activeTab'] = "forms";
		$query = 'SELECT *,amount.create_at FROM amount LEFT JOIN gws_user ON amount.user_id = gws_user.user_id ORDER BY amt_id desc' ;		
	  	$result['details'] = $this->db->query($query)->result();	  	
		$this->load->view('super_admin/order_view_details',$result);
	}
	public function create_offer_all()
	{		
		$result['activeTab'] = "components";
		$query = 'SELECT *,amount.create_at FROM amount LEFT JOIN gws_user ON amount.user_id = gws_user.user_id ORDER BY amt_id desc' ;		
	  	$result['details'] = $this->db->query($query)->result();	  	
		$this->load->view('super_admin/create_offer',$result);
	}
	public function edit_offer_by_id($amt_id)
	{	
		$this->db->select('*');
        $this->db->from('amount');        
        $this->db->where('amount.amt_id',$amt_id);          
        $data['details'] = $this->db->get()->result();
		$this->load->view('super_admin/edit_offer', $data);
	}
	public function update_offer_by_id($amt_id)
	{   
	  
		$val =$this->input->post('off_val');
		$amt =$this->input->post('amt');

		$amt_total = str_replace("₹", "", $amt);
		

		$offer_cal = ($amt_total*$val)/100 ;	
		
		
		$update = array( 'offer'   => $offer_cal );                  
	           				
		$update = $this->db->where('amt_id', $amt_id)->update('amount', $update);
		
	  	if($update == true)
					{		 	
						$this->create_offer_all();		
					}
					else 
					{	
					 	$response['status'] = 'failed';
					}	

	}
	public function view_refer_person()
	{		
		$result['activeTab'] = "Refer";
		$query = 'SELECT * FROM refer_member ORDER BY id desc' ;		
	  	$result['details'] = $this->db->query($query)->result();	  	
		$this->load->view('super_admin/view_refer_person',$result);
	}
	public function view_refer_doctor()
	{		
		$result['activeTab'] = "Refer";
		$query = 'SELECT * FROM refer_doctor ORDER BY id desc' ;		
	  	$result['details'] = $this->db->query($query)->result();	  	
		$this->load->view('super_admin/view_refer_doctor',$result);
	}
	public function gws_status_id()
	{   
	  
		$id =$this->input->post('id');
		$sta =$this->input->post('status');
				
		$update = array( 'active' => $sta );                  
	           				
		$update = $this->db->where('id', $id)->update('gws_user', $update);
		
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
	public function update_status_id()
	{   
	  
		$id =$this->input->post('id');
		$sta =$this->input->post('status');
				
		$update = array( 'status' => $sta );                  
	           				
		$update = $this->db->where('id', $id)->update('refer_member', $update);
		
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
	public function update_doctor_status()
	{   
	  
		$id =$this->input->post('id');
		$sta =$this->input->post('status');
				
		$update = array( 'status' => $sta );                  
	           				
		$update = $this->db->where('id', $id)->update('refer_doctor', $update);
		
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
	public function update_admin_status_id()
	{   
	  
		$id  = $this->input->post('id');
		$sta = $this->input->post('status');
				
		$update = array( 'active' => $sta );  		           
	           				
		$update = $this->db->where('super_id', $id)->update('super_admin', $update);
		
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
	public function Logout()
    {
        $this->session->sess_destroy();
        redirect('Login/index');
    }


}




