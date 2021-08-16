<!-- jQuery 2.2.3 -->


<!-- Jquery validation -->



<?php foreach($details as $detail) ?>
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="text-align:center;">Edit User Details </h4>
        </div>
        <div class="modal-body">
          <div class="prescription_details">
            <form enctype="multipart/form-data" method="post" action="<?php echo base_url(). 'admin/update_user_details_by_id/'.$detail->id ?>" id="patient_update" class=" form-horizontal form-groups-bordered"  role="form"> 

               
                <div class="col-sm-12 form-group">
                    <label  for="treat_type">GWS-ID</label>                    
                    <input type="text"  class="form-control" name="user_id" value="<?php echo $detail->user_id; ?>" readonly>
                   
                </div>
                <div class="col-sm-12 form-group">
                    <label  for="treat_type">Name</label>                    
                    <input type="text"  class="form-control" name="user_name" value="<?php echo $detail->user_name; ?>">
                   
                </div>

                <div class="col-sm-12  form-group">
                    <label  for="treat_desc">Email</label>                    
                        <input type="text"  class="form-control" name="email" value="<?php echo $detail->email ?>">                    
                </div>   

                <div class="col-sm-12  form-group">
                    <label  for="treat_desc">Phone</label>                    
                        <input type="text"  class="form-control" name="phone" value="<?php echo $detail->phone ?>">                    
                </div>                

                <div class="action text-center">
                    <button type="submit" class="btn violet btn-info">Save</button>
                    <button type="button" class="btn cancel btn-info" data-dismiss="modal">Cancel</button>
                </div>
            </form>
          </div>
        </div><!--/.modal nody -->
        <div class="modal-footer">
        </div>

<script>
// url link  form submit
var base_url = '<?php echo base_url() ?>'; //form submited
$(document).ready(function(){

   $(document).on("submit", "#patient_update", function(e){     
         e.preventDefault();
        var url = $(this).attr('action');     
         
                    $.ajax({

                            url : url,
                            method: 'POST',                
                            data: new FormData(this),
                            processData: false,
                            contentType: false,
                            dataType:'JSON',
                            error: function(xhr,status,error)
                            {   
                              alert("An error occoured!");
                            },              
                            
                            success: function(response)
                            {
                               if(response.status == 'success')
                               {                               
                                 window.location.href = "<?php echo base_url('admin/get_user_details'); ?>";
                                                                   
                                }else 
                                 {                    
                                    alert('Something went wrong..');
                                 }
                            }

                        });
               
    }); 
   
});

</script>