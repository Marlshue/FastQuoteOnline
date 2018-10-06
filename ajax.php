
<?php
include"dbconfig.php";
if (!empty($_POST["catid"])){
	//get all employees data
	$category = $_POST['catid'];
	$query = "SELECT * FROM subcategories where catid = '$category'";
	
$result = mysqli_query($db,$query);
   
		foreach ($result as $row){
			?>
			 <option value="<?php echo $row["subcatname"]; ?>"> 
				 <?php echo $row["subcatname"]; ?></option>;
		<?php
			}

	}
	?>