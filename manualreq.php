<?php
error_reporting(0);
include('dbconfig.php');
include('phpmailer/PHPMailerAutoload.php');
session_start();
$taskOwner = $_SESSION['companyid'];

if(isset($_POST['enter'])){
	//get data from singleprod.php
	$pname = $_POST['pname'];
	
	$quantity= $_POST['quantity'];
	$image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
	$end = $_POST['end'];
	
	$status = 'pending';
	$date = date('Y-m-d H:i:s');
	
	$Hours = (strtotime($end) - strtotime($date)) / 3600;
	
	//create request id
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
	
		
	//search for product in database
	$sql_query = "SELECT * FROM products WHERE pname LIKE '%{$pname}%'";
		
	$result = mysqli_query($db,$sql_query);
	$num = mysqli_num_rows($result);
	
	if ($num != 0){
		foreach($result as $row){
		//if found get product detail for every supplier supplying
		$supplier = $row['profid'];
			$prodid = $row['prodid'];
		$price = $row['price'];
		$taxes = $row['taxes'];
		$description = $row['description'];
			
		//use supplier id to check their response to quotations	
		$sql_response = "select * from clients where companyid = '$supplier'";
		$answer = mysqli_query($db,$sql_response);
		
		while($row = mysqli_fetch_array($answer)){
			$response = $row['response'];
			$email = $row['email'];
			switch($response){
		
	case "Automatic":
					
		$message = 'You have a request for a product in Your catalogue'.'<br/>'.
	        
			'Product name:'.$pname.'<br/>'. 
		    'Quantity:'.$quantity.'<br/>'. 
		    'Expected Lead time:'.$Hours.'<br/>'.
			'Description:'.$description.'<br/>'.
			'Log in at www.fastquoteonline.co.zw';
	
$mail = new PHPMailer;	
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'ushezhakata25@gmail.com';                 // SMTP username
$mail->Password = 'UsheRumbleMarl5hue#%';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                 // TCP port to connect to


$mail->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
)
);

$mail->setFrom('fastquoteonline.co.zw', 'Fast Qoute Online');
$mail->addAddress($email, 'Client');     // Add a recipient
	
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Requisitions';
$mail->Body    = $message;
$mail->send();
		
		$inprod = "insert into requisitions (requestid,supid,cusid,prodid,image,start,pname,quantity,description,status,end) values('$reqid','$supplier','$taskOwner','$prodid','$image','$date','$pname','$quantity','$description','$status','$end')";
		$done = mysqli_query($db,$inprod);
				
      	 if($done){
		echo ("<script> alert('Requisition sent');</script>");
			 
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
		(qouteid,cusid,requestid,supid,pname,price,quantity,subtotal,taxes,total,sent,status) values
		('$qid','$taskOwner','$reqid','$supplier','$pname','$price','$quantity','$subtotal','$taxes','$total','$date','sent')";
		$qdone = mysqli_query($db,$inqoute);
				
      	 if($qdone){
	echo ("<script> alert('Qoutation sent');</script>");
	$qry = "select * from accounts where clientid='$supplier'";
	$accresult= mysqli_query($db,$qry);
			
	foreach ($accresult as $row){
	
		     $balance =$row['balance'];
			   
	}
	
		$quotefee = 0.0025;
		 $final = $balance - $quotefee;
		$date = date('Y-m-d H:i:s');
        $sql_query = "select counter from counter where counterid = '8'";
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
				$act = "ACC".$place_holder.$counter_update;
	            $update = "Update counter Set counter = '$counter_update' where counterid = '8'";
				mysqli_query($db,$update);
				
		$clientacc = "insert into accounts (clientid,actid,date,quotefee,balance) values('$supplier','$act','$date','$quotefee','$final')";
		mysqli_query($db,$clientacc);
			 
			}
		 else{
				echo ("<script> alert('Quotation not send
				occured');</script>");  
			  } 
		
		echo ("<script > window.location ='invoice-db.php?qouteid=$qid'; </script>");
			}
		 else{
				echo ("<script> alert('An Error occured');</script>"); 
			 echo ("<script> window.location='searchproduct.php';</script>");
			  } 
		
					
		 break;
//-------------------------------------------------------------------------------------------------						
		case "Manual":
				
		$message = 'You have a request for a product in Your catalogue'.'<br/>'.
	        
			'Product name:'.$pname.'<br/>'. 
		    'Quantity:'.$quantity.'<br/>'. 
		    'Expected Lead time:'.$Hours.'<br/>'.
			'Description:'.$description.'<br/>'.
			'Log in at www.fastquoteonline.co.zw';
	
	
$mail = new PHPMailer;
	
$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'ushezhakata25@gmail.com';                 // SMTP username
$mail->Password = 'UsheRumbleMarl5hue#%';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                 // TCP port to connect to


$mail->SMTPOptions = array(
'ssl' => array(
'verify_peer' => false,
'verify_peer_name' => false,
'allow_self_signed' => true
)
);

$mail->setFrom('fastquoteonline.co.zw', 'Fast Qoute Online');
$mail->addAddress($email, 'Client');     // Add a recipient
	
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Requisitions';
$mail->Body    = $message;
$mail->send();
		$inprod = "insert into requisitions (requestid,supid,cusid,prodid,image,start,pname,quantity,description,status,end) values('$reqid','$supplier','$taskOwner','$prodid','$image','$date','$pname','$quantity','$description','$status','$end')";
		$done = mysqli_query($db,$inprod);
				
      	 if($done){
				 echo ("<script> alert('Requisition sent');</script>");
			}
		 else{
				echo ("<script> alert('An Error occured');</script>");  
			  } 
		
		echo ("<script> window.location='searchproduct.php';</script>");
		 break;
//-------------------------------------------------------------------------------------------------
				
					}	
		}
	}
	}else{
		$inprod = "insert into requisitions (requestid,cusid,prodid,image,start,pname,quantity,description,status,end) values('$reqid','$taskOwner','$prodid','$image','$date','$pname','$quantity','$description','$status','$end')";
		$done = mysqli_query($db,$inprod);
				
      	 if($done){
				 echo ("<script> alert('Requisition sent');</script>");
			}
		 else{
				echo ("<script> alert('An Error occured');</script>");  
			  } 
		
				echo ("<script> window.location='searchproduct.php';</script>");
	}
	

}

echo ("<script> window.location='searchproduct.php';</script>");
?>