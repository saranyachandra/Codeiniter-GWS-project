$(document).ready(function(){
	$(document).on('click', '.edit', function(){
		var id=$(this).val();
		var first=$('#username'+id).text();
		var last=$('#password'+id).text();
		var address=$('#email'+id).text();
	
		$('#edit').modal('show');
		$('#efirstname').val(first);
		$('#elastname').val(last);
		$('#eaddress').val(address);
	});
});