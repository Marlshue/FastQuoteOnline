jQuery(document).ready(function($) {
	
	$('#stuff').'change'(function(){
		var prodID = $(this).val();
		if(prodID){
			$.ajax({
				type:'POST',
				url:'ajax.php',
				data:'prodid='+ prodID,
				success:function(data){
					$('#prices').html(data);
					}
				
				});
			}else{
				$('#prices').html('<input type="checkbox" value="" />');
				}
		
		});
	
	
});