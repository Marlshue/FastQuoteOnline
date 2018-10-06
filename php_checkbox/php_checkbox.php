<!DOCTYPE html> 
<html>
<head> 
	<title>PHP: Get Values of Multiple Checked Checkboxes</title>
	<link rel="stylesheet"  href="css/php_checkbox.css" />
</head> 
 <body>
 <div class="container">
	<div class="main">
		<h2>PHP: Get Values of Multiple Checked Checkboxes</h2><hr/>
		<form action="php_checkbox.php" method="post">
		<label class="heading">Select Your Technical Exposure:</label><br/><br/>
			<?php
include('../dbconfig.php');
$qry = "select * from products";
	$result= mysqli_query($db,$qry);
	
	
		while($row = mysqli_fetch_assoc($result)){
			
			?>
			<label><input type="checkbox" onClick="getId(this.value);" id="stuff" name="check_list[]" value="<?php echo $row['prodid'];?>" /> <?php echo $row['pname'];?></label>
			<?php
		}
		
?>
	
		<input type="submit" name="submit" Value="Submit"/>
		<!-----Including PHP Script----->
		
		</form>
	</div>
	<div style="float: right;">
	 <?php include 'checkbox_value.php';?>
	 </div>
<!-- Div Fugo is advertisement div-->
	
 </div>
</body>
</html>
