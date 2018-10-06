<?php
  include_once('dbconfig.php');
  @$userName = $_POST['username'];
  @$pwd = $_POST['pwd'];
  	if(isset($_POST['login'])){
		
		$qry = "SELECT * FROM clientadmin WHERE username = '$userName' AND password = '$pwd' ";
		$result= mysqli_query($db,$qry);
		$num = mysqli_num_rows($result);
		
	
		
			if($num == 1){
				$row = mysqli_fetch_object($result);
				$username = $row->username;
				$access_level = $row->type;
				$companyid = $row ->companyid;
				session_start();
				switch($access_level){
					case "super":
			       $_SESSION['companyid'] = $companyid;
					echo ("<script> window.location='home.php';</script>");
				   break;
						
					case "sub":
			       $_SESSION['companyid'] = $companyid;
					echo ("<script> window.location='homesub.php';</script>");
				   break;
						
					default:
					echo ("<script> alert('Username or password incorrect');</script>");
					exit();
					}
		}else{
					echo ("<script> alert('Invalid login');</script>");
				echo ("<script> window.location='index.php';</script>");
					exit();
			}
	}
  ?>