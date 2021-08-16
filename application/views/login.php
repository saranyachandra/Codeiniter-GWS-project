<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from motaadmin.dexignlab.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Feb 2021 05:31:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>GWS-Login </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">

</head>

<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                    <h4 class="text-center mb-4">Login</h4>
                                    <form class="login_form" action="<?php echo base_url('Login/login_auth'); ?>" method="POST" >
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="text" name="user_name" class="form-control" placeholder="Enter User Name">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" name="password" class="form-control" value="Password">
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                               <div class="custom-control custom-checkbox ml-1">
													<input type="checkbox" class="custom-control-input" id="basic_checkbox_1">
													<label class="custom-control-label" for="basic_checkbox_1">Remember my preference</label>
												</div>
                                            </div>
                                            <div class="form-group">
                                                <a href="page-forgot-password.html">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary btn-block">Sign Me In</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="page-register.html">Sign up</a></p>
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
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?php echo base_url('assets/vendor/global/global.min.js');?>"></script>
	<script src="<?php echo base_url('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/custom.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/deznav-init.js')?>"></script>

<script>
var base_url = '<?php echo base_url() ?>'; //form submited


    $(document).on("submit", ".login_form", function(e){

        e.preventDefault();

         $(this).validate({ 
                          rules: {                             
                                                     
                                    user_name: "required",
                                    password: "required", 
                                                                           
                                 },

                          messages: {                           
                                  
                                  user_name: {
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
                                
                                window.location.href = "<?php echo base_url('home/get_patient_details'); ?>";
                           
                            }
                            else 
                            {                            
                                window.location.href = "<?php echo base_url('home/index'); ?>";
                            }          
                        }

               });
        }
     

 });
</script>


</body>


<!-- Mirrored from motaadmin.dexignlab.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Feb 2021 05:31:57 GMT -->
</html>