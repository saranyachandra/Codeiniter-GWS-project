
<!-- edit module popup  -->

<?php foreach($details as $detail) ?>
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="text-align:center;">Edit User Details </h4>
        </div>
        <div class="modal-body">
          <div class="prescription_details">
            <form enctype="multipart/form-data" action="<?php echo base_url(). 'super_admin/update_offer_by_id/'.$detail->amt_id ?>" id="update" class=" form-horizontal form-groups-bordered"  role="form"  method="post"> 
                              
                <div class="col-sm-12 form-group">
                    <label  for="treat_type">GWS ID</label>                    
                    <input type="text"  class="form-control" name="user_id" value="<?php echo $detail->user_id; ?>" readonly>
                   
                </div>           
                <div class="col-sm-12  form-group">
                    <label  for="treat_desc">Amount</label>                    
                        <input type="text"  class="form-control" name="amt" value="<?php echo "₹".$detail->amount ?>" readonly>                    
                </div>   

                <div class="col-sm-12  form-group">
                    <label  for="treat_desc">Offer</label>                    
                        <input type="text"  class="form-control" maxlength="2" onkeypress="return isNumberKey(event)" name="off_val" value="<?php echo $detail->offer ?>">                    
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
  function isNumberKey(evt) {
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
    return true;
}
/* url link  form submit
var base_url = '<?php echo base_url() ?>'; //form submited
$(document).ready(function(){

   $(document).on("submit", "#update", function(e){     
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
                                 window.location.href = "<?php echo base_url('super_admin/create_offer_all'); ?>";
                                                                   
                                }else 
                                 {                    
                                    alert('Something went wrong..');
                                 }
                            }

                        });
               
    }); 
   
});*/

</script>