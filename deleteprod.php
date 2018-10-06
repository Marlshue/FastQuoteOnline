<?php
include('dbconfig.php'); 
if (isset($_GET['prodid'])){
	$id=$_GET["prodid"];
	
$delete = "delete from products where prodid = '$id'";
$qry = mysqli_query($db,$delete);
	if($qry==true)
	{
		 echo"<script> alert('Item deleted');</script>";
		}
					echo ("<script>window.location='profiles.php';</script>");
	}

?>