<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="style.css" rel="stylesheet">
<title>Change Password</title>
</head>

<body>
<div class="container">  
  <form id="contact" action="" method="post">
    <h3>Change Password</h3>
    
    <fieldset>
      <input placeholder="Company Id" type="text" tabindex="1" name="username" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Password" type="password" tabindex="2" name="pwd" required>
    </fieldset>
    <fieldset>
      <input placeholder="Confirm" type="password" tabindex="2" name="confirm" required>
    </fieldset>
    
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
   
  </form>
 
  <?php
  include_once('dbconfig.php');
  @$userName = $_POST['username'];
   
  	if(isset($_POST['submit'])){
		
		$qry = "SELECT * FROM userlog WHERE companyid = '$userName'";
		$result= mysqli_query($db,$qry);
		$num = mysqli_num_rows($result);
		
			if($num == 1){
				$pwd = $_POST['pwd'];
				 $confirm = $_POST['confirm'];
				 
		if ($pwd == $confirm){
			
		$qry1 = "UPDATE userlog SET password = '$pwd' WHERE empid = '$userName'";
		 mysqli_query($db,$qry1);
		 echo"<script> alert('Passwords added');</script>";
		 echo ("<script> window.location='index.php';</script>");
		 
		}
		else{
			
			echo"<script> alert('Passwords do not match');</script>";
			exit();
			}
			
			}else{
					echo ("<script> alert('Employee number does not exist');</script>");
					exit();
					}
		}
  ?>
</div>
</body>
</html>