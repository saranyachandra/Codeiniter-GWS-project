
<?php $this->load->view('layout/admin_css'); ?>
<body>    
    <div id="main-wrapper">
        <div class="nav-header">
            <a href="<?php echo base_url('super_admin/dashboard') ?>" class="brand-logo">
                <img class="logo-abbr" src="<?php echo base_url('assets/images/logo-white.png');?>" alt="">
                <img class="logo-compact" src="<?php echo base_url('assets/images/logo-text.png');?>" alt="">
                <img class="brand-title" src="<?php echo base_url('assets/images/logo-text.png');?>" alt="">
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
       
		<?php $this->load->view('layout/sidebar_super'); ?>		
        <?php $this->load->view('layout/header_super'); ?>
              
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="nav menu-tabs">					
					<li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#dashboard" >
							<svg id="icon-home1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg><br>
							<span style="font-size: 12px;text-align: center;">Home  </span>  
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#components" >
							<svg id="icon-bootstrap" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg><br>
							<span style="font-size: 12px;text-align: center;">Offer  </span> 
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#User" >
							<svg id="icon-forms" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" style="stroke-dasharray: 66, 86; stroke-dashoffset: 0;"></path><path d="M14,2L14,8L20,8" style="stroke-dasharray: 12, 32; stroke-dashoffset: 0;"></path><path d="M16,13L8,13" style="stroke-dasharray: 8, 28; stroke-dashoffset: 0;"></path><path d="M16,17L8,17" style="stroke-dasharray: 8, 28; stroke-dashoffset: 2;"></path><path d="M10,9L9,9L8,9" style="stroke-dasharray: 2, 22; stroke-dashoffset: 12;"></path></svg><br>
							<span style="font-size: 12px;text-align: center;">User  </span>   
						</a>
					</li>	
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#apps" >
							<svg id="icon-pages" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><path width="7" height="7" d="M3 3 L10 3 L10 10 L3 10 Z" style="stroke-dasharray: 28, 48; stroke-dashoffset: 0;"></path><path width="7" height="7" d="M14 3 L21 3 L21 10 L14 10 Z" style="stroke-dasharray: 28, 48; stroke-dashoffset: 0;"></path><path width="7" height="7" d="M14 14 L21 14 L21 21 L14 21 Z" style="stroke-dasharray: 28, 48; stroke-dashoffset: 0;"></path><path width="7" height="7" d="M3 14 L10 14 L10 21 L3 21 Z" style="stroke-dasharray: 28, 48; stroke-dashoffset: 0;"></path></svg> <span style="font-size: 12px;text-align: center;">Admin  </span> 
						</a>
					</li>								                
					
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#Refer" >
							<svg id="icon-table" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-server"><path width="20" height="8" d="M2 2 L22 2 L22 10 L2 10 Z" style="stroke-dasharray: 56, 76; stroke-dashoffset: 0;"></path><path width="20" height="8" d="M2 14 L22 14 L22 22 L2 22 Z" style="stroke-dasharray: 56, 76; stroke-dashoffset: 0;"></path><path d="M6,6L6,6" style="stroke-dasharray: 0, 20; stroke-dashoffset: 0;"></path><path d="M6,18L6,18" style="stroke-dasharray: 0, 20; stroke-dashoffset: 0;"></path></svg>
							<span style="font-size: 12px;text-align: center;">Referral  </span>   
						</a>
					</li>							
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#forms" >
							<svg id="icon-forms" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" style="stroke-dasharray: 66, 86; stroke-dashoffset: 0;"></path><path d="M14,2L14,8L20,8" style="stroke-dasharray: 12, 32; stroke-dashoffset: 0;"></path><path d="M16,13L8,13" style="stroke-dasharray: 8, 28; stroke-dashoffset: 0;"></path><path d="M16,17L8,17" style="stroke-dasharray: 8, 28; stroke-dashoffset: 2;"></path><path d="M10,9L9,9L8,9" style="stroke-dasharray: 2, 22; stroke-dashoffset: 12;"></path></svg><br>
							<span style="font-size: 12px;text-align: center;">Report  </span>   
						</a>
					</li>					
				</ul>
			</div>
			<a href="<?php echo base_url('super_admin/Logout') ?>" class="logout-btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg></a>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
		
		<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
                <div class="row">
					<div class="col-xl-8 col-xxl-8">
						<div class="row">
							<div class="col-xl-4 col-xxl-4 col-lg-6 col-sm-6">
								<div class="card overflow-hidden">									
									<div class="card-body pb-0 px-4 pt-4">
										<a href="<?php echo base_url('super_admin/gws_member') ?>">
										<div class="row">											
												<div class="col">
													<h5 class="mb-1">
														<?php echo $total_member->total; ?>												
													</h5>
													<span class="text-success">Total GWS Member</span>
												</div>											
										</div>
										</a>
									</div>
									
									<div class="chart-wrapper">
										<canvas id="areaChart_2" class="chartjs-render-monitor" height="90"></canvas>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-xxl-4 col-lg-6 col-sm-6">
								<div class="card bg-success	overflow-hidden">
									<div class="card-body pb-0 px-4 pt-4">
										<div class="row">
											<div class="col">
												<h5 class="text-white mb-1">
													<?php echo $active_member->total; ?></h5>
												<span class="text-white">Active GWS Member</span>
											</div>
										</div>
									</div>
									<div class="chart-wrapper" style="width:100%">
										<span class="peity-line" data-width="100%">6,2,8,4,3,8,4,3,6,5,9,2</span>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-xxl-4 col-lg-6 col-sm-6">
								<div class="card bg-primary overflow-hidden">
									<div class="card-body pb-0 px-4 pt-4">
										<div class="row">
											<div class="col text-white">
												<h5 class="text-white mb-1">
													<?php echo '$'." ".$tot_val->total; ?>
														
													</h5>
												<span>Total Order Value</span>
											</div>
										</div>
									</div>
									<div class="chart-wrapper px-2">
										<canvas id="chart_widget_2" height="100"></canvas>
									</div>
								</div>
							</div>
							
						<div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h4 class="card-title">Recent Orders</h4>
									</div>
									<div id="success" style="display: none;">
                                            <div class="alert alert-danger alert-dismissible fade show" >
                                                <strong>Error!</strong> User name or Password incorrect. Plz try again
                                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            </div>
                                        </div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-responsive-sm mb-0">
												<thead>
													<tr>
														
														<th><strong>NAME</strong></th>
														<th><strong>MOBILE NO</strong></th>
														<th><strong>ORDER VALUE</strong></th>
														<th><strong>Offer</strong></th>
														<th><strong>ACTION</strong></th>
													</tr>
												</thead>
												<tbody>
													<?php      
														$hotels=$chart_order;
														$order_amt = array_column($hotels, 'amount');
														$user_id = array_column($hotels, 'user_name');
														//print_r($rooms);
                                                        foreach ($recent_order as $detail) 
                                                        {

                                                    ?>
													<tr>				                                                              
		                                                <td>
		                                                   <?php echo $detail->user_name; ?>
		                                                </td>
														<td>
		                                                   <?php echo $detail->phone; ?>
		                                                </td>
		                                                <td>
		                                                   <?php echo "₹".$detail->amount; ?>
		                                                </td> 
		                                                <td>
		                                                	<?php 
		                                                		if($detail->offer!= null)
		                                                		{
		                                                			echo "₹".$detail->offer;
		                                                		}else{
		                                                			echo '<input style="display: none;" type="text" maxlength="2" onkeypress="return isNumberKey(event)" class="form-control offer_value" data-amt='.$detail->amount.' data-id='.$detail->amt_id.' id="offer_'.$detail->amt_id.' " name="offer_val" >' ;
		                                                		}		                                                		
		                                                	?>		                                                  
		                                                </td>													
														<td>
															<a href="#" class="btn btn-primary shadow sharp mr-1 create_offer" id="btn_<?php echo $detail->amt_id; ?>">Create Offer</a>				
														</td>
													</tr>
													<?php  } ?>													
													
												</tbody>
											</table>
										</div>
									</div>
										<div class="form-group text-center">
											<a href="<?php echo base_url('super_admin/create_offer_all') ?>" class="btn btn-info"> View All</a>
										</div>
								</div>
							</div>
							
						
						</div>
					</div>
					<div class="col-xl-4 col-xxl-4 col-lg-12 col-md-12">
						<div class="card bg-primary text-white">
                            <div class="card-header pb-0 border-0">
                                <h4 class="card-title text-white">Top Performer</h4>
                            </div>
                            <div class="card-body"> 
                                <div class="widget-media">
                                    <ul class="timeline">
                                    	<?php 
                                    		foreach ($top_perfomar as  $details) { 

                                    	?>
                                        <li>
                                            <div class="timeline-panel">
												<div class="media mr-2">
													<img alt="image" width="50" src="<?php echo base_url('assets/images/avatar/avatar.jpg');?>">
												</div>
                                                <div class="media-body">
													<h5 class="mb-1 text-white">
														<?php echo $details->user_name; ?>
													</h5>
													<small class="d-block">
													<?php echo $details->create_at; ?>
													</small>
												</div>
												<div class="dropdown">
													<button type="button" class="btn btn-primary light sharp" data-toggle="dropdown">
														<svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><circle fill="#000000" cx="5" cy="12" r="2"/><circle fill="#000000" cx="12" cy="12" r="2"/><circle fill="#000000" cx="19" cy="12" r="2"/></g></svg>
													</button>
													<!--<div class="dropdown-menu">
														<a class="dropdown-item" href="#">Edit</a>
														<a class="dropdown-item" href="#">Delete</a>
													</div>-->
												</div>
											</div>
                                        </li>
                                    <?php } ?>
                                       
                                        </li>
                                    </ul>
                                </div>
                            </div>
							<canvas id="lineChart_3Kk"></canvas> 							
                        </div>					
						
					</div>
					
					
					<div class="col-xl-8 col-xxl-8 col-lg-12 col-md-12">
						<div id="user-activity" class="card">
							<!--<div class="card-header border-0 pb-0 d-sm-flex d-block">
								<div>
									<h4 class="card-title">Report 2021</h4>
									<p class="mb-1"></p>
								</div>
								<div class="card-action">
									<ul class="nav nav-tabs" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" href="#user" role="tab">
												Monthly
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#bounce" role="tab">
												Weekly
											</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" data-toggle="tab" href="#session-duration" role="tab">
												Today
											</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="card-body">
								<div class="tab-content" id="myTabContent">
									<div class="tab-pane fade show active" id="user" role="tabpanel">
										<canvas id="activity" class="chartjs"></canvas>
									</div>
								</div>
							</div>-->
							<canvas  id="chartjs_bar"></canvas> 

						</div>
					</div>
			   
			   <div class="col-xl-4 col-xxl-4 col-lg-6 col-md-6">
						<div class="card bg-info activity_overview">
                            <div class="card-header  border-0 pb-3 ">
                                <h4 class="card-title text-white">Activity</h4>
                            </div>
                            <div class="card-body pt-0">
								<div class="custom-tab-1">
                                    <ul class="nav nav-tabs mb-2">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-toggle="tab" href="#sale">Sale</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link " data-toggle="tab" href="#overview">Overview</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane fade active show" id="sale">
                                            <canvas id="chart_widget_4"></canvas>
                                        </div>
										<div class="tab-pane fade " id="overview" role="tabpanel">
                                            <div class="pt-4 text-white">
                                                <h4 class="text-white">This is home title</h4>
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
                                                </p>
                                                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
					</div>
			   
			   </div>
            </div>
        </div>
       
        <div class="footer">
            <div class="copyright">
                <p>Copyright © 2021. Yung Pharma. All Rights Reserved. &amp; Powered by <a href="https://yungmedia.com" target="_blank">Yung</a></p>
            </div>
        </div>
        
    </div>
  
    <!-- Required vendors -->
    <script src="<?php echo base_url('assets/vendor/global/global.min.js');?>"></script>
	<script src="<?php echo base_url('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendor/chart.js/Chart.bundle.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/custom.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/deznav-init.js');?>"></script>
	<!-- Apex Chart -->
	<script src="<?php echo base_url('assets/vendor/apexchart/apexchart.js');?>"></script>
	
    <!-- Vectormap -->
	<!-- Chart piety plugin files -->
    <script src="<?php echo base_url('assets/vendor/peity/jquery.peity.min.js');?>"></script>
	
    <!-- Chartist -->
    <script src="<?php echo base_url('assets/vendor/chartist/js/chartist.min.js');?>"></script>
	
	<!-- Dashboard 1 -->
	<script src="<?php echo base_url('assets/js/dashboard/dashboard-1.js');?>"></script>
	<!-- Svganimation scripts -->
	<script src="<?php echo base_url('assets/vendor/svganimation/vivus.min.js');?>"></script>
    <script src="<?php echo base_url('assets/vendor/svganimation/svg.animation.js');?>"></script>

    <script src="//code.jquery.com/jquery-1.9.1.js"></script>  
 	<script src="//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>	
	<script>


//dynamic open and close input box

	$(".create_offer").on("click", function(){ 		
 		$(this).closest("tr").find(".offer_value").toggle(); 		
	});	
 
function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
var base_url = '<?php echo base_url() ?>'; //form submited

    $(document).on("change", 'input[id^="offer_"]', function () {

    	var off_val = $(this).val();
    	var id= $(this).data("id");
    	var amt= $(this).data("amt");
    	console.log(id);

    	 $.ajax({

                            url : 'create_offer',                           
                            type: 'POST',
                            data:  {off_val: off_val, id: id, amt:amt},                          
                            dataType:'json',
                            error: function(xhr,status,error)
                            {   
                               alert(xhr.responseText);
                            },              
                            
                            success: function(response)
                            {
                               if(response.status == 'success')
                               {
                                 $('#success').show();
                                 window.location.href = "<?php echo base_url('super_admin/dashboard'); ?>";
                                                                   
                                }else 
                                 {                    
                                    alert('Something went wrong..');
                                 }
                            }

                        });

    });  


//bar chart 
 var ctx = document.getElementById("chartjs_bar").getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels:<?php echo json_encode($user_id); ?>,
                        datasets: [{
                            backgroundColor: [
                               "#3a7afe",
                                "#3a7afe",
                                "#3a7afe",
                                "#3a7afe",
                                "#3a7afe",
                                "#3a7afe",
                                "#3a7afe"
                            ],
                            data:<?php echo json_encode($order_amt); ?>,
                        }]
                    },
                    options: {
                           legend: {
                        display: true,
                        position: 'bottom',
 
                        labels: {
                            fontColor: '#71748d',
                            fontFamily: 'Circular Std Book',
                            fontSize: 14,
                        }
                    },
                }
                });

</script>


</body>

<!-- Mirrored from motaadmin.dexignlab.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Feb 2021 05:30:46 GMT -->
</html>