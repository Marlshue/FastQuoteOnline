<?php
          include('dbconfig.php');
session_start();
$taskOwner = $_SESSION['companyid'];

if (isset($_POST['generate'])){
			   
	          
	          //$date = date('Y-m-d H:i:s');
	         
			   $title =$_POST['title'];
			   
               $select="select * from requisitions where title='$title'";
               $result1=mysqli_query($db,$select);	
	           $num = mysqli_num_rows($result1);
		
			if($num == 1){	
		 echo"<script> alert('Title already exists');</script>";
		
		 }
			   else{
				
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
				$req = "REQ".$place_holder.$counter_update;
	            $update = "Update counter Set counter = '$counter_update' where counterid = '6'";
				mysqli_query($db,$update);
				
		$request = "insert into requisitions(requestid,title,cusid,status,bankname,branch,accnumber,acctype) values('$subprofid','$bid','$accname','$bankname','$branch','$accnumber','$acctype')";
		$done = mysqli_query($db,$request);
				
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