jQuery(document).ready(function($) {
	
	$('#cat').on('change',function(){
		var catID = $(this).val();
		if(catID){
			$.ajax({
				type:'POST',
				url:'ajax.php',
				data:'catid='+ catID,
				success:function(data){
					$('#subcat').html(data);
					}
				
				});
			}else{
				$('#subcat').html('<option value="">Select specialty </option>');
				}
		
		});
	
	
});