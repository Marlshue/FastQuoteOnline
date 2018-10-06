<?php
include('dbconfig.php');
session_start();
$taskOwner = $_SESSION['companyid'];
if (isset($_GET['supid'])){
              $supplier=$_GET["supid"];
	$request = $_GET['requestid'];
	
	$shortlist="insert into shortlist (requestid,cusid,supid) values('$request','$taskOwner','$supplier')";
     $done=mysqli_query($db,$shortlist);
		
	if($done){
	echo ("<script> alert('Suppliers shortlisted succesfully');</script>");
		$qry1 = "UPDATE qoutations SET status = 'Shortlisted' WHERE requestid = '$request'";
		 mysqli_query($db,$qry1);
			  }else{
				  
				echo ("<script> alert('An Error occured');</script>");  
			  } 
}
echo ("<script>window.location='qoutations.php';</script>");
?>