

<?php $this->load->view('layout/admin_css'); ?>
<style>
.error{
	color:red;
}

</style>
<body>

    

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
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
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Chat box start
        ***********************************-->
		
		<!--**********************************
            Chat box End
        ***********************************-->
		
		
		<?php $this->load->view('layout/sidebar_super'); ?>
		
        <!--**********************************
            Header start
        ***********************************-->
      <?php $this->load->view('layout/header_super'); ?>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="nav menu-tabs">
					
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#dashboard" >
							<svg id="icon-home1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                            <span style="font-size: 12px;text-align: center;">home  </span>
						</a>
					</li>
                     <li class="nav-item">
                        <a class="nav-link " data-toggle="tab" href="#components" >
                            <svg id="icon-bootstrap" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg><span style="font-size: 12px;text-align: center;">Offer  </span> 
                        </a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#User" >
                            <svg id="icon-apps" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" style="stroke-dasharray: 25, 45; stroke-dashoffset: 0;"></path><path d="M5,7A4,4 0,1,1 13,7A4,4 0,1,1 5,7" style="stroke-dasharray: 26, 46; stroke-dashoffset: 0;"></path><path d="M23 21v-2a4 4 0 0 0-3-3.87" style="stroke-dasharray: 8, 28; stroke-dashoffset: 0;"></path><path d="M16 3.13a4 4 0 0 1 0 7.75" style="stroke-dasharray: 11, 31; stroke-dashoffset: 0;"></path></svg>
                            <span style="font-size: 12px;text-align: center;">User  </span>   
                        </a>
                    </li>   
                    <li class="nav-item ">
                        <a class="nav-link active" data-toggle="tab" href="#apps" >
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
										<h4 class="card-title">Create New Admin</h4>
									</div>
									<div class="card-body">
									   <form action="<?php echo base_url('super_admin/create_new_admin');?>" class="create-admin step-form-horizontal" method="POST">
                                    	<div>
                                        
                                        <section>
                                            <div class="row">                                               
                                                
                                                <div class="col-lg-12 mb-2">
                                                    <div class="form-group">
                                                        <label class="text-label">Admin Name</label>
                                                        <input type="text" name="user_name"  class="form-control alpha-only" placeholder="Enter Name"  >
                                                         
                                                    </div>
                                                </div>
                                                
                                                
                                                <div class="col-lg-12 mb-2">
                                                    <div class="form-group">
                                                        <label class="text-label">Email</label>
                                                        <input type="email" name="email" id="user_id_1" class="form-control" placeholder="Enter email" onkeyup="checkname();">
                                                        <span id="name_status"></span>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-2">
                                                    <div class="form-group">
                                                        <label class="text-label">Phone Number</label>
                                                        <input type="text" name="phone" maxlength="10" class="form-control" onkeypress="return isNumberKey(event)" placeholder="Enter Phone Number" >
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 mb-2">
                                                    <div class="form-group">
                                                        <label class="text-label">Password </label>
                                                        <input type="password" name="password" class="form-control" placeholder="Enter Password" >
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </section>                                        
                                       
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
        


    </div>
    
 <?php $this->load->view('layout/admin_js'); ?>
  
 

<script>
var base_url = '<?php echo base_url() ?>'; //form submited
	// hide phone number type text      
function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}

// hide number for input text box
 $(function() 
   {
        $('.alpha-only').bind('keyup input',function()
        {       
            if (this.value.match(/[^a-zA-Z áéíóúÁÉÍÓÚüÜ]/g)) 
            {
                this.value = this.value.replace(/[^a-zA-Z áéíóúÁÉÍÓÚüÜ]/g, '');
            }
        });
    });

function checkname() {

 var name=document.getElementById("user_id_1").value; 
    
 if(name)
 {
      $.ajax({
      type: 'post',
      url: '<?php echo base_url('super_admin/check_admin'); ?>',
      data: {
       user_name:name,
      },
      success: function (response) {
           $( '#name_status' ).html(response);
           if(response=="OK")   
           {
            return true;    
           }
           else
           {
            return false;   
           }
          }
      });
 }
}



    $(document).on("submit", ".create-admin", function(e){

        e.preventDefault();

         $(this).validate({ 
                          rules: {                                         
                                    user_name: "required",
                                    email: "required",
                                    phone: "required",
                                    password: "required", 
                                                                           
                                 },

                          messages: {          
                                 
                                  user_name: {
                                      required: "Required ", 
                                  }, 
                                  email: {
                                      required: "Required ", 
                                  }, 
                                  phone: {
                                      required: "Required ", 
                                  }, 
                                  password: {
                                      required: "Required", 
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
                               window.location.href = "<?php echo base_url('super_admin/get_admin_details'); ?>";                          
                            }	
                            else 
                            {                            
                                window.location.href = "<?php echo base_url('super_admin/dashboard'); ?>";
                            }          
                        }

               });
        }
     

 });
</script>
</body>

<!-- Mirrored from motaadmin.dexignlab.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Feb 2021 05:30:46 GMT -->
</html>