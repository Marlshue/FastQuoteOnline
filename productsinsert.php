<?php
 include('dbconfig.php');
session_start();
$taskOwner = $_SESSION['companyid'];

if (isset($_GET['prodid'])){
     $prodid=$_GET["prodid"];

if (isset($_POST['enter'])){

			$category = $_POST['cat'];
$subcategory = $_POST['subcat'];
            $result_explode = explode('|', $category);
	//$result_explode[1]
			   $price= $_POST['price'];
			   $pcode =$_POST['pcode'];
			   $pname = $_POST['pname'];
			   $description = $_POST['description'];
				$taxes = $_POST['taxes'];
				$leadtime = $_POST['leadtime'];
				
	
	$image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
	
			 $fproduct="select * from products where prodid='$prodid'";
               $prodres=mysqli_query($db,$fproduct);	
	           $num = mysqli_num_rows($prodres);
		if($num == 1){	
		
		$qry1 = "UPDATE products SET pcode = '$pcode',pname = '$pname',price = '$price',description = '$description',taxes = '$taxes',image = '$image',leadtime = '$leadtime',category = '$result_explode[1]',subcategory = '$subcategory' WHERE prodid = '$prodid'";
		 mysqli_query($db,$qry1);
		 echo"<script> alert('Product Updated');</script>";
		
		 }else{
			
				
		$sql_query = "select counter from counter where counterid = '5'";
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
				$pid = "PID".$place_holder.$counter_update;
	            $update = "Update counter Set counter = '$counter_update' where counterid = '5'";
				mysqli_query($db,$update);
				
		$inprod = "insert into products (profid,prodid,pcode,pname,price,description,taxes,image,leadtime,category,subcategory) values('$taskOwner','$pid','$pcode','$pname','$price','$description','$taxes','$image','$leadtime','$result_explode[1]','$subcategory')";
		$done = mysqli_query($db,$inprod);
				
      	     if($done){
				 
			  echo ("<script> alert('Product Entered succesfully');</script>");
			  }else{
				  
				echo ("<script> alert('An Error occured');</script>");  
			  } 
			
		}
		}
	if (isset($_POST['enterdetail'])){

			
			   $price= $_POST['price'];
			   $pcode =$_POST['pcode'];
			   $pname = $_POST['pname'];
			   $description = $_POST['description'];
				$taxes = $_POST['taxes'];
				$leadtime = $_POST['leadtime'];
				$category = $_POST['cat'];
$subcategory = $_POST['subcat'];
            $result_explode = explode('|', $category);
	//$result_explode[1]
	
	
			 $fproduct="select * from products where prodid='$prodid'";
               $prodres=mysqli_query($db,$fproduct);	
	           $num = mysqli_num_rows($prodres);
		if($num == 1){	
		
		$qry1 = "UPDATE products SET pcode = '$pcode',pname = '$pname',price = '$price',description = '$description',taxes = '$taxes',leadtime = '$leadtime',category = '$result_explode[1]',subcategory = '$subcategory' WHERE prodid = '$prodid'";
		 mysqli_query($db,$qry1);
		 echo"<script> alert('Product Updated');</script>";
		
		 }else{
			
				
		$sql_query = "select counter from counter where counterid = '5'";
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
				$pid = "PID".$place_holder.$counter_update;
	            $update = "Update counter Set counter = '$counter_update' where counterid = '5'";
				mysqli_query($db,$update);
				
		$inprod = "insert into products (profid,prodid,pcode,pname,price,description,taxes) values('$taskOwner','$pid','$pcode','$pname','$price','$description','$taxes')";
		$done = mysqli_query($db,$inprod);
				
      	     if($done){
				 
			  echo ("<script> alert('Product Entered succesfully');</script>");
			  }else{
				  
				echo ("<script> alert('An Error occured');</script>");  
			  } 
			
		}
		}
	if (isset($_POST['entpic'])){

			
	$image = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
	
			 $fproduct="select * from products where prodid='$prodid'";
               $prodres=mysqli_query($db,$fproduct);	
	           $num = mysqli_num_rows($prodres);
		if($num == 1){	
		
		$qry1 = "UPDATE products SET image = '$image' WHERE prodid = '$prodid'";
		 mysqli_query($db,$qry1);
		 echo"<script> alert('Image Updated');</script>";
		
		 }else{
			
		
				echo ("<script> alert('Product does not exist');</script>");
			
		}
		}
}
echo ("<script>window.location='products.php';</script>");

?>
 
