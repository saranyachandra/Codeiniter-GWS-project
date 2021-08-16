
<?php $this->load->view('layout/admin_css'); ?>
<body>  
    <div id="main-wrapper">
        <div class="nav-header">
            <a href="<?php echo base_url('admin/dashboard') ?>" class="brand-logo">
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
		<?php $this->load->view('layout/sidebar'); ?>		
        <?php $this->load->view('layout/headerbar'); ?>     
	        <div class="deznav">
	            <div class="deznav-scroll">
					<ul class="nav menu-tabs">
						
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#dashboard">
								<svg id="icon-home1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
								<span style="font-size: 12px;text-align: center;">home  </span>
							</a>
						</li>						
						<li class="nav-item">
							<a  class="nav-link" data-toggle="tab" href="#apps">
								<svg id="icon-apps" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
								<span style="font-size: 12px;text-align: center;">User </span>
							</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#forms">
								<svg id="icon-forms" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" style="stroke-dasharray: 66, 86; stroke-dashoffset: 0;"></path><path d="M14,2L14,8L20,8" style="stroke-dasharray: 12, 32; stroke-dashoffset: 0;"></path><path d="M16,13L8,13" style="stroke-dasharray: 8, 28; stroke-dashoffset: 0;"></path><path d="M16,17L8,17" style="stroke-dasharray: 8, 28; stroke-dashoffset: 2;"></path><path d="M10,9L9,9L8,9" style="stroke-dasharray: 2, 22; stroke-dashoffset: 12;"></path></svg>
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
										<div class="row">
											<div class="col">
												<h5 class="mb-1"><?php echo $total_member->total; ?></h5>
												<span class="text-success">Total GWS Member</span>
											</div>
										</div>
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
												<h5 class="text-white mb-1"><?php echo $active_member->active; ?></h5></h5>
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
												<h5 class="text-white mb-1"><?php echo "₹"." ".$tot_val->total; ?></h5>
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
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-responsive-sm mb-0">
												<thead>
													<tr>														
														<th><strong>NAME</strong></th>
														<th><strong>MOBILE NO</strong></th>
														<th><strong>ORDER VALUE</strong></th>	
														<th><strong>OFFER</strong></th>										
														<th><strong>CREATE AT</strong></th>	
													</tr>
												</thead>
												<tbody>
													<?php                                                         
                                                        foreach ($details as $detail) 
                                                        {                                                
                                                	?>
													<tr>													
		                                                <td>
		                                                   <?php echo $detail->user_name; ?>
		                                                </td>
														<td>
		                                                   <?php echo $detail->phone; ?>
		                                                </td>
		                                                <td >
		                                                   <?php echo "₹".$detail->amount; ?>
		                                                </td>
		                                                <td >
		                                                   <?php
		                                                   	if($detail->offer!=null) 
		                                                   	{
		                                                   		echo "₹".$detail->offer; 
		                                                   	}
		                                                   	else{
		                                                   		echo "00.00";
		                                                   	}

		                                                   		
		                                                   ?>
		                                                </td>
		                                                <td >
		                                                  <?php 
                                                        	 	$timestamp = strtotime($detail->create_at);
                                                         		echo date('d-m-Y', $timestamp);
                                                    		?>
		                                                </td>
														
													</tr>
													<?php  } ?> 													
													
												</tbody>
											</table>
										</div>
									</div>
									<div class="form-group text-center">
										<a href="<?php echo base_url('admin/get_order_details') ?>" class="btn btn-info"> View All</a>
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
													<h5 class="mb-1 text-white" style="text-transform: capitalize;">
														<?php echo $details->user_name; ?>
													</h5>
													<small class="d-block">
													<?php echo $details->create_at; ?>
													</small>
												</div>
												<div class="dropdown">
													<a class="btn btn-primary light sharp" href="<?php echo base_url('admin/get_order_details') ?>">View</a>				
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
							<div class="card-header border-0 pb-0 d-sm-flex d-block">
								<div>
									<h4 class="card-title">Report 2021</h4>
									
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
							</div>
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
        <!--**********************************
            Content body end
        ***********************************-->

        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © 2021. Yung Pharma. All Rights Reserved. &amp; Powered by <a href="https://yungmedia.com" target="_blank">Yung</a></p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->

		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
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
	
</body>

<!-- Mirrored from motaadmin.dexignlab.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Feb 2021 05:30:46 GMT -->
</html>