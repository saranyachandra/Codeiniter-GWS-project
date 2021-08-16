<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from motaadmin.dexignlab.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Feb 2021 05:31:57 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>GWS - Login</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/images/logo.png');?>">
    <link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">

</head>

<style>
.error{
    color:red;
}

</style>
<body class="h-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
                                  
                                    <div class="logo" style="text-align: center;">
                                        <img style="width:250px" src="<?php echo base_url('assets/images/logo.png');?>" > 
                                    </div>
                                    <form id="login" action="<?php echo base_url('Login/login_auth');?>" method="POST">
                                        <div id="error" style="display: none;">
                                            <div class="alert alert-danger alert-dismissible fade show" >
                                                <strong>Error!</strong> User name or Password incorrect. Plz try again
                                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>User Name</strong></label>
                                            <input type="text" class="form-control" name="user_name" placeholder="User Name">
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" name="password" class="form-control" placeholder="Password" >
                                        </div>
                                       
                                        <div class="text-center">
                                            <button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
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
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="<?php echo base_url('assets/vendor/global/global.min.js');?>"></script>
	<script src="<?php echo base_url('assets/vendor/bootstrap-select/dist/js/bootstrap-select.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/custom.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/deznav-init.js')?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.validate.js')?>"></script>
    <script>

        var base_url = '<?php echo base_url() ?>'; //form submited


    $(document).on("submit", "#login", function(e){

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
                           if(response.status == 'admin')
                           {                                
                                window.location.href = "<?php echo base_url('admin/dashboard'); ?>";                           
                            }  
                            else if(response.status == 'super_admin')
                            {                                
                                window.location.href = "<?php echo base_url('super_admin/dashboard'); ?>";                           
                            }   
                            else 
                            {                            
                                $("#error").show();
                            }          
                        }

               });
        }
     

 });
    </script>

</body>


<!-- Mirrored from motaadmin.dexignlab.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 04 Feb 2021 05:31:57 GMT -->
</html>