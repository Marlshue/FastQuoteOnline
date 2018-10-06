<?php
include('dbconfig.php');
session_start();
$taskOwner = $_SESSION['companyid'];
$query = "select companyname from clients where companyid = '$taskOwner'";
$com = mysqli_query($db,$query);
$row = mysqli_fetch_assoc($com);
$name = $row['companyname'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Profiles</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/slick-1.8.0/slick.css">

<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" type="text/css" href="style.css">
	
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
	<noscript><link rel="stylesheet" type="text/css" href="css/noJS.css" /></noscript>
</head>

<body>

<!-- Header -->
<div class="super_container">

	
      <header class="header">

		<!-- Top Bar -->

		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="images/mail.png" alt=""></div><a href="mailto:fastsales@gmail.com">support@fastquoteonline.co.zw</a></div>
						<div class="top_bar_content ml-auto">
							
							<div class="top_bar_user">
				
				
					<div class="main_nav_menu ml-auto">
								<ul class="standard_dropdown main_nav_dropdown">
									<li style="margin-right: 0px;"><div class="top_bar_user" style="margin-left: 0px;">
								<div class="user_icon" style="margin-right: 0px;"><img src="images/user.svg" alt=""></div>
								<div><a style="margin-right: 0px;" href="#"><?php echo $name ; ?></a></div>
								
							</div>
									<ul>
											
							<li><a href="profiles.php"><i class="fas fa-chevron-down"></i>Settings</a></li>
							<li><a href="logout.php"><i class="fas fa-chevron-down"></i>Log out</a></li>
										</ul>
									</li>
									</ul>
						</div>
						
								
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>

		<!-- Header Main -->

		<div class="header_main">
			<div class="container">
				<div class="row">

					<!-- Logo -->
					<div class="col-lg-2 col-sm-3 col-3 order-1">
						<div class="logo_container">
							<div class="logo"><a href="#">FastQuote</a></div>
						</div>
					</div>

					<!-- Search -->
					<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
						<div class="header_search">
							<div class="header_search_content">
								<div class="header_search_form_container">
									<form action="searchproduct.php" class="header_search_form clearfix" method="post">
										
										<input name="product" id="product"  type="text" required class="header_search_input" placeholder="Search for products...">
										
										
										
										<button type="submit" name="search" id="search" class="header_search_button trans_300" ><img src="images/search.png" alt=""></button>
										
									</form>
								</div>
							</div>
						</div>
					</div>

					<!-- Wishlist -->
					<!-- Wishlist -->
					<div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
						<?php
include('dbconfig.php');
$profiles = "SELECT COUNT(*) FROM qoutations WHERE status ='Sent' and cusid = '$taskOwner' ;";
 $query = mysqli_query($db, $profiles);

  foreach ($query as $row){
		$count = $row['COUNT(*)'] ;
		}

										?>
						<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
							<div class="wishlist d-flex flex-row align-items-center justify-content-end">
								<div class="cart_container d-flex flex-row align-items-center justify-content-end">
									<div class="cart_icon">
										<img src="images/response.jpeg" alt="">
										<div class="cart_count"><span><?php echo($count);?></span></div>
									</div>
									<div class="cart_content">
										<div class="cart_text"><a href="qoutations.php">Qoutations</a></div>
									</div>
								</div>
							</div>

							<!-- Cart -->
							<div class="cart">
								<?php
include('dbconfig.php');
$profiles = "SELECT COUNT(*) FROM requisitions WHERE status ='Pending' and supid = '$taskOwner' ;";
 $query = mysqli_query($db, $profiles);

  foreach ($query as $row){
		$count = $row['COUNT(*)'] ;
		}

										?>
								<div class="cart_container d-flex flex-row align-items-center justify-content-end">
									<div class="cart_icon">
										<img src="images/flame.jpeg" alt="">
										<div class="cart_count"><span><?php echo($count);?></span></div>
									</div>
									<div class="cart_content">
										
										<div class="cart_text"><a href="requestsrecieved.php">Requisitions</a></div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				
					
				</div>
			</div>
		</div>
		
		<!-- Main Navigation -->

		<nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="main_nav_content d-flex flex-row">

						


							<!-- Main Nav Menu -->

							<div class="main_nav_menu ml-auto">
								<ul class="standard_dropdown main_nav_dropdown">
									<li style="margin-right: 0px;"><div class="top_bar_user" style="margin-left: 0px;">
								<div class="char_icon" style="margin-right: 0px;"><img src="images/homes.png" alt=""></div>
								<div><a style="margin-right: 0px;" href="home.php">Home</a></div>
								
							</div></li>
									
								<li class="hassubs" style="margin-right: 0px;">
								<div class="top_bar_user" style="margin-left: 0px;">
								<div class="char_icon" style="margin-right: 0px; ">
									<img  src="images/char_1.png" alt="">
									</div>
								<div><a style="margin-right: 0px;" href="searchproduct.php">Quote Request</a></div>
									</div>
								<ul>
									<li><a href="requestsrecieved.php">Pending Requests<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="requests.php">Tenders<i class="fas fa-chevron-down"></i></a></li>
											
										</ul>
							</li>
									
									
									<li class="hassubs" style="margin-right: 0px;"><div class="top_bar_user" style="margin-left: 0px;">
								<div class="char_icon" style="margin-right: 0px;"><img src="images/char_2.png" alt=""></div>
								<div><a style="margin-right: 0px;" href="qoutations.php">Quote Response</a></div>
								
							</div>
										<ul>
											
											<li><a href="#">Sent<i class="fas fa-chevron-down"></i></a></li>
											<li><a href="shortlist.php">Shortlisted<i class="fas fa-chevron-down"></i></a></li>
										</ul>
									</li>
									<li style="margin-right: 0px;"><div class="top_bar_user" style="margin-left: 0px;">
								<div class="char_icon" style="margin-right: 0px;"><img src="images/phones.png" alt=""></div>
								<div><a style="margin-right: 0px;" href="#contactus">Contact Us</a></div>
								
							</div></li>
								</ul>
							</div>

							<!-- Menu Trigger -->

							<div class="menu_trigger_container ml-auto">
								<div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
									<div class="menu_burger">
										<div class="menu_trigger_text">menu</div>
										<div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</nav>
		
		<!-- Menu -->

		<div class="page_menu">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="page_menu_content">
							
							<div class="page_menu_search">
								<form action="requestsbefore.php" class="header_search_form clearfix" method="post">
									<input name="product" id="product"  type="text" required class="page_menu_search_input" placeholder="Search for products...">
									<button type="submit" name="search" id="search" class="header_search_button trans_300" ><img src="images/search.png" alt=""></button>
								</form>
							</div>
							<ul class="page_menu_nav">
								
								<li class="page_menu_item" style="margin-right: 0px;"><div class="top_bar_user" style="margin-left: 0px;">
								<div class="char_icon" style="margin-right: 0px;"><img src="images/homes.png" alt=""></div>
								<div><a style="margin-right: 0px; font-size: 16px;" href="home.php">Home<i class="fa fa-angle-down"></i></a></div>
								
							</div></li>
								
								<li class="page_menu_item " style="margin-right: 0px;">
								<div class="top_bar_user" style="margin-left: 0px;">
								<div class="char_icon" style="margin-right: 0px; background-color: white;"><img src="images/char_1.png" alt=""></div>
								<div><a style="margin-right: 0px; font-size: 16px;" href="searchproduct.php">Quote Requests<i class="fa fa-angle-down"></i></a></div>
								</div>
									
						
								</li>
								
								
								<li class="page_menu_item" style="margin-right: 0px;"><div class="top_bar_user" style="margin-left: 0px;">
								<div class="char_icon" style="margin-right: 0px; background-color: white;"><img src="images/char_2.png" alt=""></div>
								<div><a  style="margin-right: 0px; font-size: 16px;" href="qoutations.php">Quote Response<i class="fa fa-angle-down"></i></a></div>
								
							</div></li>
								
								<li class="page_menu_item" style="margin-right: 0px;"><div class="top_bar_user" style="margin-left: 0px;">
								<div class="char_icon" style="margin-right: 0px;"><img src="images/phones.png" alt=""></div>
								<div><a style="margin-right: 0px; font-size: 16px;" href="#contactus">Contact Us<i class="fa fa-angle-down"></i></a></div>
								
							</div></li>
								<li class="page_menu_item">
									<div class="top_bar_user" style="margin-left: 0px;">
								<div class="char_icon" style="margin-right: 0px;"><img src="images/settings.png" alt=""></div>
								<div><a style="margin-right: 0px; font-size: 16px;" href="profiles.php">Settings<i class="fa fa-angle-down"></i></a></div>
								
									</div>
									
								</li>
								
								<li class="page_menu_item" style="margin-right: 0px;"><div class="top_bar_user" style="margin-left: 0px;">
								<div class="char_icon" style="margin-right: 0px;"><img src="images/exit.jpg" alt=""></div>
								<div><a style="margin-right: 0px; font-size: 16px;" href="logout.php">Log Out<i class="fa fa-angle-down"></i></a></div>
								
							</div></li>
								
							</ul>
							
							<div class="menu_contact">
							
								<div class="menu_contact_item"><div class="menu_contact_icon"><img src="images/mail_white.png" alt=""></div><a href="mailto:fastsales@gmail.com">support@fastquoteonline.co.zw</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</header>
       <!-- Banner -->

	<div class="contact_info">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="contact_info_container d-flex flex-lg-row flex-column justify-content-between align-items-between">

						<!-- Contact Item -->
						<div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
							<div class="contact_info_image"><img src="images/prof3.jpeg" alt=""></div>
							<div class="contact_info_content">
								<div class="contact_info_title"><a href="subprofiles.php">SubProfiles</a></div>
								<div class="contact_info_text">Manage Your Subprofiles</div>
							</div>
						</div>

						<!-- Contact Item -->
						<div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
							<div class="contact_info_image"><img src="images/request.jpeg" alt=""></div>
							<div class="contact_info_content">
								<div class="contact_info_title"><a href="products.php">Products</a></div>
								<div class="contact_info_text">Edit Your Product List</div>
							</div>
						</div>

						<!-- Contact Item -->
						<div class="contact_info_item d-flex flex-row align-items-center justify-content-start">
							<div class="contact_info_image"><img src="images/response.jpeg" alt=""></div>
							<div class="contact_info_content">
								<div class="contact_info_title"><a href="admins.php">Users</a></div>
								<div class="contact_info_text">Manage your Admins</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
    
	
   <div class="edit_profile_container" id="test">  
  
    <form id="contact" action="profiles.php" method="post">
		<fieldset>
		Edit Profile
		</fieldset>
		
    <?php
        include('dbconfig.php'); 
		if (isset($_POST['submit'])){
			$companyname =$_POST['name'];
			   $telephone = $_POST['tel'];
			   $cell= $_POST['cell'];
			   $address = $_POST['address'];
			   $email= $_POST['email'];
		$companynumber = $_POST['cnumber'];
		$bpnumber = $_POST['bpnumber'];
		$vatnumber = $_POST['vat'];
		$vendornumber = $_POST['vendor'];
			$response= $_POST['response'];
			
			$qry1 = "UPDATE clients SET companyname = '$companyname',telephone = '$telephone',cell = '$cell',address = '$address',email = '$email',companynumber = '$companynumber',bpnumber = '$bpnumber',vatnumber = '$vatnumber',vendornumber= '$vendornumber',response = '$response' WHERE companyid = '$taskOwner'";
		 mysqli_query($db,$qry1);
		echo ("<script> alert('Profile updated');</script>");
		}
	$profqry = "select * from clients where companyid='$taskOwner'";
	$result3= mysqli_query($db,$profqry);
		 
		
			
	foreach ($result3 as $row){
	
		     $companyname =$row['companyname'];
			   $telephone = $row['telephone'];
			   $cell= $row['cell'];
			   $address = $row['address'];
			   $email= $row['email'];
		$companynumber = $row['companynumber'];
		$bpnumber = $row['bpnumber'];
		$vatnumber = $row['vatnumber'];
		$vendornumber = $row['vendornumber'];
		$response = $row['response'];
	}
		
	
           
		
		?>
    <input name="name" value="<?php error_reporting(0); echo($companyname);  ?>" style="margin-right: 10px; width: 100%; max-width: 350px;"  placeholder="Company Name" type="text" tabindex="1" required autofocus>
		
	<input name="tel" value="<?php error_reporting(0); echo($telephone);  ?>" placeholder="Telephone number" style=" width: 100%; max-width: 350px;"  type="text" tabindex="1" required autofocus>
		
 
      <input style="margin-right: 10px; width: 100%; max-width: 350px;" name="cell" value="<?php error_reporting(0); echo($cell);  ?>" placeholder="Cellphone number" type="text" tabindex="1" required autofocus>
	<input style="margin-right: 10px; width: 100%; max-width: 350px;" name="address" value="<?php error_reporting(0); echo($address);  ?>"  placeholder="Adress" type="text" tabindex="1" required autofocus>
    
   
      <input style="margin-right: 10px; width: 100%; max-width: 350px;" name="email" value="<?php error_reporting(0); echo($email);  ?>" placeholder="Email" type="text" tabindex="1" required autofocus>
		 <input style="margin-right: 10px; width: 100%; max-width: 350px;" name="cnumber" value="<?php error_reporting(0); echo($companynumber);  ?>" placeholder="Company Number" type="text" tabindex="1" required autofocus>
   
    
      <input style="margin-right: 10px; width: 100%; max-width: 350px;" name="bpnumber" value="<?php error_reporting(0); echo($bpnumber);  ?>" placeholder="BP number" type="text" tabindex="1" required autofocus>
	<input style="margin-right: 10px; width: 100%; max-width: 350px;" name="vat" value="<?php error_reporting(0); echo($vatnumber);  ?>" placeholder="VAT number" type="text" tabindex="1" required autofocus>
    
    
    
     
      <input style="margin-right: 10px; width: 100%; max-width: 350px;" name="vendor" value="<?php error_reporting(0); echo($vendornumber);  ?>" placeholder="Vendor number" type="text" tabindex="1" required autofocus>
	
		
		<select style=" margin-right: 10px; width: 100%; max-width: 350px;" name="response" id="response" >
    
    <?php
	//include db config file
include('dbconfig.php'); 

//get all specialty data
		  if($response != NULL){
		
			?>
		<option value="<?php echo $response; ?>"> <?php echo $response; ?></option>;
		   <option value="Automatic">Automatic</option>
		<option value="Manual">Manual</option>
		  
			
	<?php
				  
			
		  }else{
			  ?>
			 <option value="non" >Quotation Response.......</option>
			 <option value="Automatic">Automatic</option>
		<option value="Manual">Manual</option>
		  <?php
		  }
	?>
      
    </select>
		
	
			
		 

    
      <fieldset>
      <button style="margin-top: 10px;" name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    
     </form>
     
   </div>	
	
	<div class="sub_container" style="max-width:810px; margin:0 auto;">
	
	 <div class="enter_products" id="bankcontainer" style="float: left;">  
   <?php
        include('dbconfig.php'); 
		if (isset($_POST['bankdet'])){
	         
			   $accname =$_POST['accname'];
			   $bankname = $_POST['bankname'];
			   $branch = $_POST['branch'];
			   $accnumber = $_POST['accnumber'];
			   $acctype = $_POST['acctype'];
               $select="select * from bank where clientid='$taskOwner'";
               $result1=mysqli_query($db,$select);	
	           $num = mysqli_num_rows($result1);
		
			if($num == 1){	
		
		$qry1 = "UPDATE bank SET accname = '$accname',bankname = '$bankname',branch = '$branch',accnumber = '$accnumber',acctype = '$acctype' WHERE clientid = '$taskOwner'";
		 mysqli_query($db,$qry1);
		 echo"<script> alert('Bankdetails Updated');</script>";
		
		 }else{
				
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
				
		$clientbank = "insert into bank (clientid,bankdetid,accname,bankname,branch,accnumber,acctype) values('$taskOwner','$bid','$accname','$bankname','$branch','$accnumber','$acctype')";
		$done = mysqli_query($db,$clientbank);
				
      	      if($done){
				 
			  echo ("<script> alert('Bankdetails Entered succesfully');</script>");
			  }else{
				  
				echo ("<script> alert('An Error occured');</script>");  
			  } 
			 $qry2 = "UPDATE clients SET bankdetid = '$bid' WHERE companyid = '$taskOwner'";
		             mysqli_query($db,$qry2);	
			}
	
	        }
	$qry = "select * from bank where clientid='$taskOwner'";
	$result= mysqli_query($db,$qry);
		 
		
			
	foreach ($result as $row){
	
		     $accname =$row['accname'];
			   $bankname = $row['bankname'];
			   $branch = $row['branch'];
			   $accnumber = $row['accnumber'];
			   $acctype = $row['acctype'];
	}
		
           
		
		?>
    <form id="contact" action="profiles.php" method="post">
    <fieldset>
		Bank Details
		</fieldset>
    <fieldset>
      <input name="accname" 
      value="<?php error_reporting(0); echo($accname);  ?>" placeholder="Account Name" type="text" tabindex="1" required autofocus>
      
    </fieldset>
    
     <fieldset>
      <input name="bankname"
       value="<?php error_reporting(0); echo($bankname); ?>"
       placeholder="Bank Name" type="text" tabindex="1" required autofocus>
    </fieldset>
    
     <fieldset>
      <input name="branch"  
      value="<?php error_reporting(0); echo($branch);  ?>"  placeholder="Branch" type="text" tabindex="1" required autofocus>
    </fieldset>
    
     <fieldset>
      <input name="accnumber"
       value="<?php error_reporting(0); echo($accnumber);  ?>"  placeholder="Account Number" type="text" tabindex="1" required autofocus>
    </fieldset>
    
     <fieldset>
      <input name="acctype"
       value="<?php error_reporting(0); echo($acctype);  ?>"  placeholder="Account Type" type="text" tabindex="1" required autofocus>
    </fieldset>
 
    
    <fieldset>
      <button name="bankdet" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
     </form>
     
   </div>
   	 
    <div class="enter_products" id="cdocs" style="float: right;">  
   
    <form id="contact" action="ajaxupload.php" method="post" enctype="multipart/form-data">
		<fieldset>
		Company Documents
		</fieldset>
  <?php
		$privqry = "select * from clients where companyid='$taskOwner'";
	$result4= mysqli_query($db,$privqry);
		foreach ($result4 as $row){
			$name =$row['cr14'];
			 $cr14 =$row['cr14'];
			
		}
		?>
    <fieldset>
      <input name="cdoc" type="file" tabindex="1" required autofocus>

		<label style="font-size: 14px"><?php echo $name ?></label>
    </fieldset>
    <div id="preview"><a href="<?php echo $cr14 ?>" ><img src="images/filed.png" /></a></div><br>
		 <label style="font-size: 14px">Download file</label>
      <fieldset>
		 
      <button name="submitdoc" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    
     </form>
     <div id="err"></div>
   </div>
	</div>
	
	
	
	
	
	
	<footer class="footer" id="contactus" style="margin-top: 20px;">
		<div class="newsletter_title_container" >
							
	<div class="newsletter_title"><h2>Contact Us ...</h2></div>
							
</div>
		
		<div class="container">
			<div class="row">

               <div class="contact_container" >
                 <form id="contact" name="contact" method="post" action="" onsubmit="ValidateEmail(document.contact.sender)"> 
                   <input type="text" id="sender" name="sender" placeholder="Your Email"> 
    
                   <textarea rows="5" id="message" name="message" placeholder="Message"></textarea>
                   <button name="send" type="submit" onclick="return validate_contact ( )"class="btn btn-primary"><i class="fa fa-paper-plane"></i> Send</button>
                </form>
				   
              </div>
		
		
					
						
						
						<div class="footer_social" style="margin-left: 20%; margin-top: 15%;">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f" ></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
								
							</ul>
						</div>
					
				</div>
      
			</div>
	 </div>
</footer>

	<!-- Copyright -->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col">
					
					<div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
						<div class="copyright_content"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |<a href="https://fastquoteonline.co.zw" target="_blank">Fast Quote Online</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/slick-1.8.0/slick.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>
	

</body>
</html>
