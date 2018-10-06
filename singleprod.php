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
<title>FastQuoteOnline</title>
<meta charset="utf-8">
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
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<link rel="stylesheet" type="text/css" href="styles/product_styles.css">
<link rel="stylesheet" type="text/css" href="styles/product_responsive.css">
	
	<link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
	
<noscript><link rel="stylesheet" type="text/css" href="css/noJS.css" /></noscript>
</head>

<body>

<div class="super_container">
	
	<!-- Header -->
	
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
										
										<div class="custom_dropdown" style="display: none;">
											<div class="custom_dropdown_list">
												<span class="custom_dropdown_placeholder clc">All Categories</span>
												<i class="fas fa-chevron-down"></i>
												<ul class="custom_list clc" >
														<?php
	//include db config file
include('dbconfig.php'); 

//get all specialty data
$query = "SELECT * FROM category ";
$result = mysqli_query($db,$query);
   
		foreach ($result as $row){
			?>
             
			 <li>
				 <a href="searchproduct.php?catid=<?php echo $row["catid"];?>">
					 <?php echo $row["name"]; ?> 
					 <i class="fas fa-chevron-right ml-auto"></i>
				 </a>
			</li>
		<?php
			}
	?>
									
												</ul>
											</div>
										</div>
										
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
		
	

	<!-- Single Product -->

	<div class="single_product">
		<div class="container">
			<div class="row">

				<?php
          include('dbconfig.php');
		
		if (isset($_GET['prodid'])){
              $prodid=$_GET["prodid"];
		
          
			$fproduct="select * from products where prodid='$prodid'";
               $prodres=mysqli_query($db,$fproduct);
			foreach ($prodres as $row){
	
			   $pname = $row['pname'];
				
			   $description = $row['description'];
				$price = $row['price'];
				$image = $row['image'];
			   
			   
	        }
		}
	
	
       ?>

				<!-- Selected Image -->
				<div class="col-lg-5 order-lg-2 order-1">
					<div class="image_selected"><?php error_reporting(0); echo ' <img src="data:image/jpeg;base64,'.base64_encode($image ).'" class="img-thumnail" />'; ?> </div>
				</div>

				<!-- Description -->
				
				<div class="col-lg-5 order-3">
					<div class="product_description">
						
						<div class="product_name"><?php error_reporting(0); echo $pname; ?></div>
						
						<div class="product_text"><p><?php error_reporting(0); echo $description; ?></p></div>
						<div class="order_info d-flex flex-row">
							<form action="manualreq.php" method="post">
								<input value="<?php error_reporting(0); echo($prodid);  ?>" type="hidden" name="prodid" >
								<input value="<?php error_reporting(0); echo($pname);  ?>" type="hidden" name="pname" >
								<input value="<?php error_reporting(0); echo($description);  ?>" type="hidden" name="description" >
								<input value="<?php echo 'data:image/jpeg;base64,'.base64_encode($image ).''?>" type="hidden" name="image" >
								<div class="clearfix" style="z-index: 1000;">

									<!-- Product Quantity -->
									<div class="product_quantity clearfix">
										<span>Quantity: </span>
										<input id="quantity_input" name="quantity" type="text" pattern="[0-9]*" value="1">
										<div class="quantity_buttons">
											<div id="quantity_inc_button" class="quantity_inc quantity_control"><i class="fas fa-chevron-up"></i></div>
											<div id="quantity_dec_button" class="quantity_dec quantity_control"><i class="fas fa-chevron-down"></i></div>
										</div>
									</div>

									<div style="margin-right: 5px; margin-top: 10px; margin-left: -15px; margin-bottom: 10px; width: 100%; max-width: 250px;"  class="input-group date form_datetime col-md-5" data-link-field="dtp_input1">
			
                    <input class="form-control" name="end" size="16" type="text" value="" placeholder="Due date" type="text" readonly>
			
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
          </div>
									

								</div>

								<div class="product_price"><input value="<?php error_reporting(0); echo($price);  ?>" type="hidden" name="price" ><?php error_reporting(0); echo "$".$price; ?></div>
								<div class="button_container">
									<button name="enter" type="submit" id="contact-submit" data-submit="...Sending"class="button cart_button">Make Request</button>
									<div class="product_fav"><i class="fas fa-heart"></i></div>
								</div>
								
							</form>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Recently Viewed -->

	
	
	

	
   
<!-- Footer -->

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
	
<script type="text/javascript" src="./jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
		startDate: new Date(),
		format:'yyyy-mm-dd hh:ii',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
	$('.form_date').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
	$('.form_time').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0
    });
</script>
<script type="text/javascript" src="js/modernizr.custom.79639.js"></script> 
</body>

</html>