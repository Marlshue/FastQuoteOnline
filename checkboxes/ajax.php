
<?php
include"../dbconfig.php";
if (!empty($_POST["prodid"])){
	//get all employees data
	$product = $_POST['prodid'];
	$query = "SELECT * FROM products where prodid = '$product'";
	
$result = mysqli_query($db,$query);
   
		foreach ($result as $row){
			?>
<label>
	<input type="checkbox" value="<?php echo $row["price"]; ?>" /><?php echo $row["pname"]; ?> </label>
			 
		<?php
			}

	}
	?>