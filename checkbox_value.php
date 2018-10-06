<?php
	if(isset($_POST['submit'])){
	if(!empty($_POST['check_list'])) {
	
	//Counting number of checked checkboxes 
	$checked_count = count($_POST['check_list']);
	
	
		foreach($_POST['check_list'] as $selected) {
				echo "<p>".$selected ."</p>"; 
		}
		
	}
	else{
	echo "<b>Please Select Atleast One Option.</b>";
	}
	}
?>