<?php
 include('dbconfig.php');
session_start();
$taskOwner = $_SESSION['companyid'];
if (isset($_GET['prodid'])){
     $prodid=$_GET["prodid"];

$fproduct="select * from products where prodid='$prodid'";
 $prodres=mysqli_query($db,$fproduct);	
foreach ($prodres as $row){
	
			   $pcode = $row['pcode'];
	          $pname = $row['pname'];
			   $price = $row['price'];
			  $supid = $row['profid'];
	$taxes= $row['taxes'];
	$response = $row['response'];
		    }
	
switch($response){
		
		case "Automatic":
		$quantity = $_POST['quantity'];	
		$date = date('Y-m-d H:i:s');
		$sql_query = "select counter from counter where counterid = '6'";
		$result = mysqli_query($db,$sql_query);
		$row = mysqli_fetch_assoc($result);
		$counter_update = $row["counter"];
				
		if(strlen($counter_update)== 1)
		{$place_holder = "00";}
		else if(strlen($counter_update)== 2)
		{$place_holder = "0";}
		else if(strlen($counter_update)== 3)
		{$place_holder = "";}
				
		$counter_update = $counter_update + 1;
		$reqid = 'REQ'.$place_holder.$counter_update;
	    $update = "Update counter Set counter = '$counter_update' where counterid = '6'";
		mysqli_query($db,$update);
				
		$inprod = "insert into requisitions (requestid,supid,cusid,pcode,price,quantity,status,sent) values('$reqid','$supid','$taskOwner','$pcode','$price','$quantity','Sent','$date')";
		$done = mysqli_query($db,$inprod);
				
      	 if($done){
				 echo ("<script> alert('Requisition sent');</script>");
			}
		 else{
				echo ("<script> alert('An Error occured');</script>");  
			  } 
		
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
		
		$subtotal = $price * $quantity;
		$tax = $subtotal * $taxes;
		$total = $subtotal + $tax;
		$inqoute = "insert into qoutations
		(qouteid,cusid,supid,pname,price,quantity,subtotal,taxes,total,sent) values
		('$qid','$taskOwner','$supid','$pname','$price','$quantity','$subtotal','$taxes','$total','$date')";
		$qdone = mysqli_query($db,$inqoute);
				
      	 if($qdone){
				 echo ("<script> alert('Qoutation sent');</script>");
			}
		 else{
				echo ("<script> alert('An Error occured');</script>");  
			  } 
		
		echo ("<script > 
		
		window.location ='invoice-db.php?qouteid=$qid';
		
		</script>");
		 break;
//-------------------------------------------------------------------------------------------------						
		case "Manual":
				
		$quantity = $_POST['quantity'];	
		$date = date('Y-m-d H:i:s');
		$sql_query = "select counter from counter where counterid = '6'";
		$result = mysqli_query($db,$sql_query);
		$row = mysqli_fetch_assoc($result);
		$counter_update = $row["counter"];
				
		if(strlen($counter_update)== 1)
		{$place_holder = "00";}
		else if(strlen($counter_update)== 2)
		{$place_holder = "0";}
		else if(strlen($counter_update)== 3)
		{$place_holder = "";}
				
		$counter_update = $counter_update + 1;
		$reqid = 'REQ'.$place_holder.$counter_update;
	    $update = "Update counter Set counter = '$counter_update' where counterid = '6'";
		mysqli_query($db,$update);
				
		$inprod = "insert into requisitions (requestid,supid,cusid,pcode,price,quantity,status,sent) values('$reqid','$supid','$taskOwner','$pcode','$price','$quantity','Pending','$date')";
		$done = mysqli_query($db,$inprod);
				
      	 if($done){
				 echo ("<script> alert('Request sent');</script>");
			}
		 else{
				echo ("<script> alert('An Error occured');</script>");
			 
			  } 
		echo ("<script> window.location='requests.php';</script>");
		 break;
//-------------------------------------------------------------------------------------------------
			default:
					echo ("<script> alert('Username or password incorrect');</script>");
					exit();
					}	
		
			
		}
		



?>
 
