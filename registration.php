<?php
include('dbconfig.php'); 

include('phpmailer/PHPMailerAutoload.php');
	
if (isset($_POST['join'])){
	
	
	//$date = date('Y-m-d H:i:s');
	$email = $_POST['email'];
	$cellphone = $_POST['cell'];
	$pass = $_POST['password'];
	$confirm = $_POST['confirm'];
	if($confirm != $pass){
		echo ("<script> alert('Passwords do not match');</script>");
	}else{
		
	
		$findmail =  "SELECT * FROM clientadmin WHERE username = '$email'";
	$prodres=mysqli_query($db,$findmail);	
$num = mysqli_num_rows($prodres);
		
	
		
			if($num == 1){
				echo ("<script> alert('email already exists');</script>");
				echo ("<script> window.location='index.php';</script>");
					exit();}
	else{
				$sql_query = "select counter from counter where counterid = '1'";
	$result = mysqli_query($db,$sql_query);
		
		$row = mysqli_fetch_assoc($result);
		$counter_update = $row["counter"];
		
		if(strlen($counter_update)== 1){
			$place_holder = "00";
			}else if(strlen($counter_update)== 2)
			{
				$place_holder = "0";
				}
				else if(strlen($counter_update)== 3)
			{
				$place_holder = "";
				}
				
				$counter_update = $counter_update + 1;
				$co_Id = "CLI".$place_holder.$counter_update;
	$update = "Update counter Set counter = '$counter_update' where counterid = '1'";
					mysqli_query($db,$update);
		
$insert = "insert into clients (companyid,email,cell) values ('$co_Id','$email','$cellphone')";
$result = mysqli_query($db,$insert);
		
		if($result){
	echo ("<script> alert('Registration Succesful please check your email for log in details');</script>");
			
	$insert1 = "insert into clientadmin(companyid,username,password,type) values('$co_Id','$email','$pass','super')";
mysqli_query($db,$insert1);
	
$message = 'Congratulations, you have successfully Registered with Fastqoute online'.'<br/>'.
	        'Your log in details are'.'<br/>'.
			'Username:'.$co_Id.'<br/>'. 
		    'Password:'.$pass.'<br/>'.
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

$mail->Subject = 'Registration Succesfull';
$mail->Body    = $message;
	$mail->send();
	
}
	else{
	echo ("<script> alert('Registration Unsuccesful please try again later');</script>");
	
}

	
	}
     

	}
	

				
			}
	echo ("<script>window.location='index.php';</script>");
	
	


?>