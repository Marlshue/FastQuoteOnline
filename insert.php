<?php
include('dbconfig.php'); 
if (isset($_GET['id'])){
	$id=$_GET["id"];
	$date = date('Y-m-d H:i:s');
	//$id = $_POST['id'];
	
	$status = 'In Progress';
$insert = "update tasks set start = '$date' ,status='$status' where id = '$id'";
mysqli_query($db,$insert);
	if($insert==true)
	{
		echo ("<script>window.location='emppage.php';</script>");
		}
	}

?>