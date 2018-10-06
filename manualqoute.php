<?php
// when the user's respnse for requisitions is set to manual
 include('dbconfig.php');
session_start();
$taskOwner = $_SESSION['companyid'];
if (isset($_POST['enter'])){
     $reqid = $_GET['requestid'];
	$cusid = $_POST['cusid'];
	$pname = $_POST['pname'];
	$price = $_POST['price'];
	$quantity = $_POST['quantity'];
	$subtotal = $_POST['subtotal'];
	$taxes = $_POST['taxes'];
	$date = date('Y-m-d H:i:s');
		$sql_query1 = "select counter from counter where counterid = '7'";
		$result1 = mysqli_query($db,$sql_query1);
		$row1 = mysqli_fetch_assoc($result1);
		$counter_update1 = $row1["counter"];
				
		if(strlen($counter_update1)== 1)
		{$place_holder1 = "00";}
		else if(strlen($counter_update1)== 2)
		{$place_holder1 = "0";}
		else if(strlen($counter_update1)== 3)
		{$place_holder1 = "";}
				
		$counter_update1 = $counter_update1 + 1;
		$qid = 'QID'.$place_holder1.$counter_update1;
	    $update1 = "Update counter Set counter = '$counter_update1' where counterid = '7'";
		mysqli_query($db,$update1);
		
		
		$tax = $subtotal * $taxes;
		$total = $subtotal + $tax;
		$inqoute = "insert into qoutations
		(qouteid,cusid,supid,pname,price,quantity,subtotal,taxes,total,sent) values
		('$qid','$cusid','$taskOwner','$pname','$price','$quantity','$subtotal','$taxes','$total','$date')";
		$qdone = mysqli_query($db,$inqoute);
				
      	 if($qdone){
				 echo ("<script> alert('Qoutation sent');</script>");
			 $sql = "update requisitions set status = 'Sent' where requestid = '$reqid' ";
            mysqli_query($db,$sql);
			}
		 else{
				echo ("<script> alert('An Error occured');</script>");  
			  } 
		
		echo ("<script > 
		
		window.location ='invoice-db.php?qouteid=$qid';
		
		</script>");
		 
//-------------------------------------------------------------------------------------------------				
			
		}
		



?>
 
