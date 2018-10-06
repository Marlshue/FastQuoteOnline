<?php
          include('dbconfig.php');
session_start();
$taskOwner = $_SESSION['companyid'];

if (isset($_GET['subprofid'])){
$subprofid=$_GET["subprofid"];
	
           if (isset($_POST['bankdet'])){
			   
	          
	          //$date = date('Y-m-d H:i:s');
	         
			   $accname =$_POST['accname'];
			   $bankname = $_POST['bankname'];
			   $branch = $_POST['branch'];
			   $accnumber = $_POST['accnumber'];
			   $acctype = $_POST['acctype'];
               $select="select * from bank where clientid='$subprofid'";
               $result1=mysqli_query($db,$select);	
	           $num = mysqli_num_rows($result1);
		
			if($num == 1){	
		
		$qry1 = "UPDATE bank SET accname = '$accname',bankname = '$bankname',branch = '$branch',accnumber = '$accnumber',acctype = '$acctype' WHERE clientid = '$subprofid'";
		 mysqli_query($db,$qry1);
		 echo"<script> alert('Bankdetails Updated');</script>";
		
		 }
			   else{
				
		$sql_query = "select counter from counter where counterid = '3'";
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
				$bid = "BID".$place_holder.$counter_update;
	            $update = "Update counter Set counter = '$counter_update' where counterid = '3'";
				mysqli_query($db,$update);
				
		$clientbank = "insert into bank (clientid,bankdetid,accname,bankname,branch,accnumber,acctype) values('$subprofid','$bid','$accname','$bankname','$branch','$accnumber','$acctype')";
		$done = mysqli_query($db,$clientbank);
				
      	      if($done){
				 
			  echo ("<script> alert('Bankdetails Entered succesfully');</script>");
			  }else{
				  
				echo ("<script> alert('An Error occured');</script>");  
			  } 
			 $qry2 = "UPDATE subprofiles SET bankdetid = '$bid' WHERE subprofid = '$subprofid'";
		             mysqli_query($db,$qry2);	
			}
	
	        }
}
echo ("<script>window.location='subprofiles.php';</script>");
       ?>