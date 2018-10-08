<?php
include('dbconfig.php');
session_start();
$taskOwner = $_SESSION['companyid'];
if (isset($_GET['requestid'])){
     //$supplier=$_GET["supid"];
	$request = $_GET['requestid'];
	$getsup = "select * from qoutations where requestid = '$request'";
	$reply = mysqli_query($db,$getsup);
	foreach($reply as $row){
		$supplier=$row["supid"];
		$shortlist="insert into shortlist (requestid,cusid,supid) values('$request','$taskOwner','$supplier')";
     $done = mysqli_query($db,$shortlist);
		
	}
	
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