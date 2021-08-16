


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
						<a class="nav-link" data-toggle="tab" href="#dashboard" >
							<svg id="icon-home1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            <span style="font-size: 12px;text-align: center;">Home  </span>  
						</a>
					</li>
                    <li class="nav-item">
                        <a class="nav-link " data-toggle="tab" href="#components" >
                            <svg id="icon-bootstrap" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg><span style="font-size: 12px;text-align: center;">Offer  </span> 
                        </a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#User" >
                            <svg id="icon-apps" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" style="stroke-dasharray: 25, 45; stroke-dashoffset: 0;"></path><path d="M5,7A4,4 0,1,1 13,7A4,4 0,1,1 5,7" style="stroke-dasharray: 26, 46; stroke-dashoffset: 0;"></path><path d="M23 21v-2a4 4 0 0 0-3-3.87" style="stroke-dasharray: 8, 28; stroke-dashoffset: 0;"></path><path d="M16 3.13a4 4 0 0 1 0 7.75" style="stroke-dasharray: 11, 31; stroke-dashoffset: 0;"></path></svg>
                            <span style="font-size: 12px;text-align: center;">User  </span>   
                        </a>
                    </li>   
                    <li class="nav-item ">
                        <a class="nav-link " data-toggle="tab" href="#apps" >
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
                            <svg id="icon-forms" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" style="stroke-dasharray: 66, 86; stroke-dashoffset: 0;"></path><path d="M14,2L14,8L20,8" style="stroke-dasharray: 12, 32; stroke-dashoffset: 0;"></path><path d="M16,13L8,13" style="stroke-dasharray: 8, 28; stroke-dashoffset: 0;"></path><path d="M16,17L8,17" style="stroke-dasharray: 8, 28; stroke-dashoffset: 2;"></path><path d="M10,9L9,9L8,9" style="stroke-dasharray: 2, 22; stroke-dashoffset: 12;"></path></svg>
                            <span style="font-size: 12px;text-align: center;">Report  </span>   
                        </a>
                    </li>     
				</ul>
			</div>
			<a href="<?php echo base_url('super_admin/Logout') ?>" class="logout-btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg></a>
        </div>
       
        <div class="content-body">
            <!-- row -->
			<div class="container-fluid">
                <div class="row">
					<div class="col-xl-12 col-xxl-12">
						<div class="row">
						<div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header border-0 pb-0">
										<h4 class="card-title">View GWS Member</h4>
									</div>
									<div class="card-body">									   
                                    	<div>                                        
                                        <section>
                                           <div class="table-responsive">
                                    <table  id="table_view" class="table table-striped table-bordered">
                                         <div class="alert alert-success" id="success_msg" role="alert" style="display:none;" >Successfully deleted
                                        </div>
                                        <thead>
                                            <tr>
                                                <th>S.No</th> 
                                                <th>GWS-ID</th>                                                                      
                                                <th>Name</th>                                               
                                                <th>Email</th>                                   
                                                <th >Phone</th>                                   
                                                <th>Create At</th>
                                                <th >Status</th>                                                
                                            </tr>
                                        </thead>
                                            <tbody>
                                                <?php 
                                                    $i=1;
                                                    foreach ($details as $detail) 
                                                    {                                                
                                                ?>
                                            <tr>                                               
                                                <td><?php echo $i; ?></td> 
                                                <td><?php echo $detail->user_id; ?> </td>                                     
                                                <td> <?php echo $detail->user_name; ?>  </td> 
                                                
                                                <td> <?php echo $detail->email; ?> </td>                                              
                                                <td> <?php echo $detail->phone; ?> </td>                                                
                                                <td>
                                                   <?php 
                                                         $timestamp = strtotime($detail->create_at);
                                                         echo date('d-m-Y', $timestamp);
                                                    ?>
                                                </td>
                                                <td>                                                    
                                                    <SELECT name="status" id="dropdown1_id" data-id="<?php echo $detail->id; ?>" >
                                                        <option value="0" <?php if($detail->active==0) echo 'selected="selected"'; ?>>Disapproved</option>
                                                        <option value="1" <?php if($detail->active==1) echo 'selected="selected"';?>>Approved</option>
                                                    </SELECT>                                               
                                                </td>                                                
                                            </tr> 
                                            <?php $i++; } ?>     <!--   here end foreach   -->              
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </section>                                        
                                       
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
    
 <?php $this->load->view('layout/admin_js'); ?> 

<script src="<?php echo base_url('assets/js/bootbox.js')?>"></script> <!-- conformation delete boot box -->
<script src="<?php echo base_url('assets/plugins/datatables/datatables.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables/datatables.min.js');?>"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>

// show table inbuild function like pagination 
   $(document).ready(function() {
    $('#table_view').DataTable();
} ); 

var base_url = '<?php echo base_url() ?>'; //form submited

  $(document).on('change', '#dropdown1_id', function(){

   var id= $(this).data("id");
    var status = $(this).val();
    $.ajax({

                            url : 'gws_status_id',                           
                            type: 'POST',
                            data:  {id: id, status:status},
                            dataType:'json',
                            error: function(xhr,status,error)
                            {   
                               alert(xhr.responseText);
                            },              
                            
                            success: function(response)
                            {
                               if(response.status == 'success')
                               {
                                
                                 Swal.fire('GWS member successfully approved... ');
                                                                   
                                }else 
                                 {                    
                                    Swal.fire('Somethink went wrong... ');
                                 }
                            }

                        });

  });
</script>

</body>

<!-- Mirrored from motaadmin.dexignlab.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Feb 2021 05:30:46 GMT -->
</html>