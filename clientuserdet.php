
<?php
 include('dbconfig.php');
include('generatepass.php'); 
session_start();
$taskOwner = $_SESSION['companyid'];
if (isset($_GET['clientuserid'])){
$clientuserid=$_GET["clientuserid"];

if (isset($_POST['submit'])){

		     $aname =$_POST['name'];
			  $surname = $_POST['surname'];
			 
			  $cell = $_POST['cell'];
		$email = $_POST['email'];
		$subprofid = $_POST['subprofid'];
	
				
			$select="select * from clientusers where clientuserid = '$clientuserid'";
               $result1=mysqli_query($db,$select);	
	           $num = mysqli_num_rows($result1);
		if($num == 1){
			
			$qry1 = "UPDATE clientusers SET name = '$aname',surname = '$surname',cell = '$cell',email = '$email',subprofid = '$subprofid' WHERE clientuserid = '$clientuserid'";
		 mysqli_query($db,$qry1);
		echo ("<script> alert('Profile updated');</script>");
		}else
		{
			if (isset($_POST['submit'])){
			  $aname =$_POST['name'];
			  $surname = $_POST['surname'];
			 
			  $cell = $_POST['cell'];
		$email = $_POST['email'];
		$subprofid = $_POST['subprofid'];
				
			$sql_query = "select counter from counter where counterid = '2'";
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
				$adm = "ADM".$place_holder.$counter_update;
	            $update = "Update counter Set counter = '$counter_update' where counterid = '2'";
				mysqli_query($db,$update);
				
			
			$creating = new CreatePass();
$pass = $creating->randomPassword();	
				
		$insertsp = "insert into clientusers (clientuserid,subprofid,name,surname,cell,email,companyid) values	('$adm','$subprofid','$aname','$surname','$cell','$email','$taskOwner')";
		$done = mysqli_query($db,$insertsp);
				
      	      if($done){
				 
			  echo ("<script> alert('Admin Entered succesfully');</script>");
	$insert1 = "insert into clientadmin(companyid,password,type) values('$adm','$pass','sub')";
mysqli_query($db,$insert1);
			  }else{
				  
				echo ("<script> alert('An Error occured');</script>");  
			  }
			}
		}
		}
}
echo ("<script>window.location='admins.php';</script>");

?>