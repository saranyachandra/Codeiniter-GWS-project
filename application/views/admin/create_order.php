

<?php $this->load->view('layout/admin_css'); ?>
 <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
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
						<a class="nav-link" data-toggle="tab" href="#dashboard">
							<svg id="icon-home1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
              <span style="font-size: 12px;text-align: center;">home  </span>
						</a>
					</li>
					
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#apps">
							<svg id="icon-apps" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
              <span style="font-size: 12px;text-align: center;">User  </span>
						</a>
					</li>
					
					<li class="nav-item ">
						<a class="nav-link active" data-toggle="tab" href="#forms">
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
					<div class="col-xl-12 col-xxl-12">
						<div class="row">
						<div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header border-0 pb-0 ">
										<h4 class="card-title"  style="font-size: 27px;">Create Order</h4>
									</div>
									<div class="card-body">
									             <form id="form_id" action="<?php echo base_url('admin/create_new_order');?>" class="create-order step-form-horizontal" method="POST">
                                       
                                      <div class="container mt-5 ">    
                                            <div class="row">                                                
                                                <div class="col-lg-12 mb-2">
                                                  <div class="form-group">
                                                      <label class="text-label">GWS-ID</label>
                                                      <select name="user_id" id="user_id" class="form-control" required="">
                                                          <option value="">Please Select </option>
                                                          <?php foreach ($details as $detail) { ?>
                                                          <option value="<?php echo $detail->user_id; ?>">
                                                          <?php echo $detail->user_id; ?></option>
                                                          <?php } ?>
                                                      </select>
                                                  </div>
                                                  <div style="display: none;">
                                                        <input type="text" id="drug_id_1" name="drug_id" class="form-control"> 
                                                  </div>
                                                </div>
                                                <div class="col-lg-12 input-group mb-2">
                                                    <input type="text" name="order_name"  class="form-control" placeholder="Enter Order Name" >
                                                </div>
                                                <div class="col-lg-12 input-group mb-2">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text">₹</span>
                                                    </div>
                                                    <input type="text" name="order_val" id="order_val" onkeypress="return isNumberKey(event)" class="form-control" placeholder="Enter Order Value" onchange="check_inputval();" >
                                                </div>
                                                <div id="error_show" style="display: none;">
                                                       <label style="color: red;">minimum order value is 2500</label> 
                                                </div>
                                            </div>
                                      </div>                                       
                                       
                                       
                                         <div class="col-lg-12 text-center mb-2">
                                            <div class="form-group">                                             
                                               <input type="submit" name="submit" class="btn btn-info" value="submit">
                                            </div>
                                        </div>
                                </form>
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
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>


$('#user_id').select2().trigger('change');
	// hide phone number type text      
function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

function check_inputval(){
  var amt_val = document.getElementById("order_val").value;   
  if(amt_val>=2500)
  {
    $("#error_show").hide(); 
  }
  else{
      $("#order_val").val("");
      $("#error_show").show();      
  }

}

//form submited
var base_url = '<?php echo base_url() ?>'; 

    $(document).on("submit", ".create-order", function(e){

        e.preventDefault();

         $(this).validate({ 
                          rules: {         
                                                     
                                    user_id: "required",
                                    order_val: "required",                                     
                                                                           
                                 },

                          messages: {                           
                                  
                                  user_id: {
                                      required: "Required ", 
                                  }, 
                                  order_val: {
                                      required: "Required ", 
                                  },                                   
                                                                                                                       
                             },

                           }); 

    if($(this).valid())
        {     
                var url = $(this).attr('action');
                var formdata = new FormData(this);
              
                $.ajax({
                        url : url,
                        method: 'POST',
                        data: formdata,
                        processData: false,
                        contentType: false,
                        dataType:'json',
                        error: function(xhr,status,error)
                        {   
                            alert(xhr.responseText);
                        },
                        beforeSend: function()
                        {              
                        },
                        
                        success: function(response)
                        {
                           if(response.status == 'success')
                           {                            
                              $('#form_id').trigger("reset");
                              $("#user_id").val(false).trigger( "change" );
                              Swal.fire('Order created successfully... ');
                            }	
                            else 
                            {                            
                                 Swal.fire('Somethink went wrong... ');
                            }          
                        }

               });
        }
     

 });
</script>
</body>

<!-- Mirrored from motaadmin.dexignlab.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Feb 2021 05:30:46 GMT -->
</html>