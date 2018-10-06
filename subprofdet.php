<?php
 include('dbconfig.php');
session_start();
$taskOwner = $_SESSION['companyid'];
if (isset($_GET['subprofid'])){
$subprofid=$_GET["subprofid"];

if (isset($_POST['submit'])){

			$companyname =$_POST['name'];
			$telephone = $_POST['tel'];
			$address = $_POST['address'];
			$companynumber = $_POST['cnumber'];
		$bpnumber = $_POST['bpnumber'];
		$vatnumber = $_POST['vat'];
		$vendornumber = $_POST['vendor'];
				
			$select="select * from subprofiles where subprofid = '$subprofid'";
               $result1=mysqli_query($db,$select);	
	           $num = mysqli_num_rows($result1);
		if($num == 1){
			
			$qry1 = "UPDATE subprofiles SET name = '$companyname',telephone = '$telephone',address = '$address',companynumber = '$companynumber',bpnumber = '$bpnumber',vatnumber = '$vatnumber',vendornumber= '$vendornumber' WHERE subprofid = '$subprofid'";
		 mysqli_query($db,$qry1);
		echo ("<script> alert('Profile updated');</script>");
		}else
		{
			if (isset($_POST['submit'])){
			$companyname =$_POST['name'];
			$telephone = $_POST['tel'];
			$address = $_POST['address'];
			$companynumber = $_POST['cnumber'];
		$bpnumber = $_POST['bpnumber'];
		$vatnumber = $_POST['vat'];
		$vendornumber = $_POST['vendor'];
			$sql_query = "select counter from counter where counterid = '4'";
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
				$subid = "SPID".$place_holder.$counter_update;
	            $update = "Update counter Set counter = '$counter_update' where counterid = '4'";
				mysqli_query($db,$update);
				
		$insertsp = "insert into subprofiles (companyid,subprofid,name,telephone,address,companynumber,bpnumber,vatnumber,vendornumber) values	('$taskOwner','$subid','$companyname','$telephone','$address','$companynumber','$bpnumber','$vatnumber','$vendornumber')";
		$done = mysqli_query($db,$insertsp);
				
      	      if($done){
				 
			  echo ("<script> alert('SubProfile Entered succesfully');</script>");
			  }else{
				  
				echo ("<script> alert('An Error occured');</script>");  
			  }
			}
		}
		}
}
echo ("<script>window.location='subprofiles.php';</script>");

?>