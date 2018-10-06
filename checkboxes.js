jQuery(document).ready(function($) {
	
	$('#spec').on('change',function(){
		var specID = $(this).val();
		if(specID){
			$.ajax({
				type:'POST',
				url:'ajax.php',
				data:'specid='+ specID,
				success:function(data){
					$('#emp').html(data);
					}
				
				});
			}else{
				$('#emp').html('<option value="">Select specialty </option>');
				}
		
		});
	
	
});