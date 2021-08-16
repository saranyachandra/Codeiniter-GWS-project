<!--**********************************
            Sidebar Fixed
        ***********************************-->
		<div class="fixed-content-box">
			<div class="head-name">
				 <img src="<?php echo base_url('assets/images/logo.png');?>" width="150px" alt=""/>
				<span class="close-fixed-content fa-left d-lg-none">
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"/><rect fill="#000000" opacity="0.3" transform="translate(15.000000, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-15.000000, -12.000000) " x="14" y="7" width="2" height="10" rx="1"/><path d="M3.7071045,15.7071045 C3.3165802,16.0976288 2.68341522,16.0976288 2.29289093,15.7071045 C1.90236664,15.3165802 1.90236664,14.6834152 2.29289093,14.2928909 L8.29289093,8.29289093 C8.67146987,7.914312 9.28105631,7.90106637 9.67572234,8.26284357 L15.6757223,13.7628436 C16.0828413,14.136036 16.1103443,14.7686034 15.7371519,15.1757223 C15.3639594,15.5828413 14.7313921,15.6103443 14.3242731,15.2371519 L9.03007346,10.3841355 L3.7071045,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(9.000001, 11.999997) scale(-1, -1) rotate(90.000000) translate(-9.000001, -11.999997) "/></g></svg>
				</span>				
			</div>
			<div class="fixed-content-body dz-scroll" id="DZ_W_Fixed_Contant">
				<div class="tab-content" id="menu">
					<div class="tab-pane chart-sidebar fade " id="dashboard-area" role="tabpanel"></div>
					<div class='tab-pane fade in show <?php echo ($activeTab == "dashboard") ? "active" : ""; ?>' id="dashboard" role="tabpanel">
						<ul class="metismenu tab-nav-menu ">
							<li class="nav-label ">DASHBOARD</li>
							<li>
								<a href="<?php echo base_url('user/dashboard');?>" aria-expanded="false">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5"/><path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3"/></g>
									</svg>
								Home
								</a>
								
							</li>
						</ul>
					</div>					
					<div class='tab-pane fade show <?php echo ($activeTab == "apps") ? "active" : ""; ?>' id="apps">
						<ul class="metismenu tab-nav-menu">
							<li class="nav-label">Referral</li>
							<li>
								<a class="has-arrow" href="<?php echo base_url('user/refer_user');?>" aria-expanded="false">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><polygon fill="#000000" opacity="0.3" points="5 7 5 15 19 15 19 7"/>       <path d="M11,19 L11,16 C11,15.4477153 11.4477153,15 12,15 C12.5522847,15 13,15.4477153 13,16 L13,19 L14.5,19 C14.7761424,19 15,19.2238576 15,19.5 C15,19.7761424 14.7761424,20 14.5,20 L9.5,20 C9.22385763,20 9,19.7761424 9,19.5 C9,19.2238576 9.22385763,19 9.5,19 L11,19 Z" fill="#000000" opacity="0.3"/><path d="M5,7 L5,15 L19,15 L19,7 L5,7 Z M5.25,5 L18.75,5 C19.9926407,5 21,5.8954305 21,7 L21,15 C21,16.1045695 19.9926407,17 18.75,17 L5.25,17 C4.00735931,17 3,16.1045695 3,15 L3,7 C3,5.8954305 4.00735931,5 5.25,5 Z" fill="#000000" fill-rule="nonzero"/></g></svg>
									<span class="nav-text">Refer Person</span>									
								</a>
							</li>
							<li>
								<a class="has-arrow" href="<?php echo base_url('user/refer_doctor');?>" aria-expanded="false">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><polygon fill="#000000" opacity="0.3" points="5 7 5 15 19 15 19 7"/>       <path d="M11,19 L11,16 C11,15.4477153 11.4477153,15 12,15 C12.5522847,15 13,15.4477153 13,16 L13,19 L14.5,19 C14.7761424,19 15,19.2238576 15,19.5 C15,19.7761424 14.7761424,20 14.5,20 L9.5,20 C9.22385763,20 9,19.7761424 9,19.5 C9,19.2238576 9.22385763,19 9.5,19 L11,19 Z" fill="#000000" opacity="0.3"/><path d="M5,7 L5,15 L19,15 L19,7 L5,7 Z M5.25,5 L18.75,5 C19.9926407,5 21,5.8954305 21,7 L21,15 C21,16.1045695 19.9926407,17 18.75,17 L5.25,17 C4.00735931,17 3,16.1045695 3,15 L3,7 C3,5.8954305 4.00735931,5 5.25,5 Z" fill="#000000" fill-rule="nonzero"/></g></svg>
									<span class="nav-text">Refer Doctor</span>
								</a>
							</li>
							<li><a class="has-arrow" href="<?php echo base_url('user/get_user_details');?>" aria-expanded="false">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M4.00246329,12.2004927 L13,14 L13,4.06189375 C16.9463116,4.55399184 20,7.92038235 20,12 C20,16.418278 16.418278,20 12,20 C7.64874861,20 4.10886412,16.5261253 4.00246329,12.2004927 Z" fill="#000000" opacity="0.3"/><path d="M3.0603968,10.0120794 C3.54712466,6.05992157 6.91622084,3 11,3 L11,11.6 L3.0603968,10.0120794 Z" fill="#000000"/></g></svg>
									<span class="nav-text">Manage Refer Person</span>									
								</a>								
							</li>
							<li><a class="has-arrow" href="<?php echo base_url('user/get_doctor_details');?>" aria-expanded="false">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M4.00246329,12.2004927 L13,14 L13,4.06189375 C16.9463116,4.55399184 20,7.92038235 20,12 C20,16.418278 16.418278,20 12,20 C7.64874861,20 4.10886412,16.5261253 4.00246329,12.2004927 Z" fill="#000000" opacity="0.3"/><path d="M3.0603968,10.0120794 C3.54712466,6.05992157 6.91622084,3 11,3 L11,11.6 L3.0603968,10.0120794 Z" fill="#000000"/></g></svg>
									<span class="nav-text">Manage Refer Doctor</span>									
								</a>								
							</li>
						</ul>
					</div>
					
					<div class='tab-pane fade show <?php echo ($activeTab == "forms") ? "active" : ""; ?>' id="forms">
						<ul class="metismenu tab-nav-menu">
							<li class="nav-label">Reports</li>							
							<li>
								<a class="has-arrow ai-icon" href="<?php echo base_url('user/get_order_details');?>" aria-expanded="false">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><polygon points="0 0 24 0 24 24 0 24"/><path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/><rect fill="#000000" x="6" y="11" width="9" height="2" rx="1"/><rect fill="#000000" x="6" y="15" width="5" height="2" rx="1"/></g></svg>
									<span class="nav-text">View My Orders</span>									
								</a>								
							</li>
						</ul>
					</div>
				</div>
				<!--<div class="tab-pane chart-sidebar fade show active" role="tabpanel">
					<div class="card">
						<div class="card-header align-items-start">
							<div>
								<h6>Daily Sales</h6>
								<p>Check out each colum for more details</p>
							</div>
							<span class="btn btn-primary light sharp ml-2">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><rect fill="#000000" opacity="0.3" x="12" y="4" width="3" height="13" rx="1.5"/><rect fill="#000000" opacity="0.3" x="7" y="9" width="3" height="8" rx="1.5"/><path d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z" fill="#000000" fill-rule="nonzero"/><rect fill="#000000" opacity="0.3" x="17" y="11" width="3" height="6" rx="1.5"/></g></svg>
							</span>
						</div>
						<div class="card-body">
							<canvas id="daily-sales-chart" height="85" style="height:85px;"></canvas>
						</div>
					</div>
					<div class="card bg-warning-light">
						<div class="card-header align-items-start mb-3">
							<div>
								<h6>Profit Share</h6>
								<p>Check out each colum for more details</p>
							</div>
							<span class="btn btn-warning light sharp ml-2">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"/><path d="M4.00246329,12.2004927 L13,14 L13,4.06189375 C16.9463116,4.55399184 20,7.92038235 20,12 C20,16.418278 16.418278,20 12,20 C7.64874861,20 4.10886412,16.5261253 4.00246329,12.2004927 Z" fill="#000000" opacity="0.3"/><path d="M3.0603968,10.0120794 C3.54712466,6.05992157 6.91622084,3 11,3 L11,11.6 L3.0603968,10.0120794 Z" fill="#000000"/></g></svg>
							</span>
						</div>
						<div class="card-body">
							<div class="chart-point">
								<div class="check-point-area">
									<canvas id="ShareProfit"></canvas>
								</div>
								<ul class="chart-point-list">
									<li><i class="fa fa-circle text-primary mr-1"></i> 40% Tickets</li>
									<li><i class="fa fa-circle text-success mr-1"></i> 35% Events</li>
									<li><i class="fa fa-circle text-warning mr-1"></i> 25% Other</li>
								</ul>
							</div>
						</div>
					</div>
				</div>-->

			</div>
		</div>

		<!--**********************************
            Sidebar End
        ***********************************-->