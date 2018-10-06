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
	
<link rel="stylesheet" type="text/css" href="pop-up-demo/css/popup.css">
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="DataTable/Responsive-2.2.2/css/responsive.dataTables.min.css" rel="stylesheet" type="text/css" />
<link href="DataTable/datatables.min.css" rel="stylesheet" type="text/css" />
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
								<div class="user_icon"><img src="images/user.svg" alt=""></div>
								<div><a href="loginform.php">Sign in/Sign up</a></div>
								
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
									<form action="requestsbefore.php" class="header_search_form clearfix" method="post">
										
										<input name="product" id="product"  type="text" required class="header_search_input" placeholder="Search for products...">
										
										<div class="custom_dropdown" style="display: none;"  >
											<div class="custom_dropdown_list">
												<span class="custom_dropdown_placeholder clc">All Categories</span>
												<i class="fas fa-chevron-down"></i>
												<ul class="custom_list clc">
													<li><a class="clc" href="#">All Categories</a></li>
													<li><a class="clc" href="#">Computers</a></li>
													<li><a class="clc" href="#">Laptops</a></li>
													<li><a class="clc" href="#">Cameras</a></li>
													<li><a class="clc" href="#">Hardware</a></li>
													<li><a class="clc" href="#">Smartphones</a></li>
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
					<div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
						
						<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">

							

							<!-- Cart -->
							<div class="cart">
								<?php
include('dbconfig.php');
$profiles = "SELECT COUNT(*) FROM requisitions  ;";
 $query = mysqli_query($db, $profiles);

  foreach ($query as $row){
		$count = $row['COUNT(*)'] ;
		}

										?>
								<div class="cart_container d-flex flex-row align-items-center justify-content-end">
									<div class="cart_icon">
										
										<div class="cart_count"><span><?php echo($count);?></span></div>
									</div>
									<div class="cart_content">
										
										<div class="cart_text"><a href="requestsrecieved.php">Quote requests processed to date</a></div>
										
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

							<!-- Categories Menu -->


							<!-- Main Nav Menu -->

							<div class="main_nav_menu ml-auto">
								<ul class="standard_dropdown main_nav_dropdown">
									<li style="margin-right: 0px;"><div class="top_bar_user" style="margin-left: 0px;">
								<div class="char_icon" style="margin-right: 0px;"><img src="images/homes.png" alt=""></div>
								<div><a style="margin-right: 0px;" href="index.php">Home</a></div>
								
							</div></li>
									<li style="margin-right: 0px;"><div class="top_bar_user" style="margin-left: 0px;">
								<div class="char_icon" style="margin-right: 0px; "><img  src="images/char_1.png" alt=""></div>
								<div><a style="margin-right: 0px;" href="customreq.php">Quote Requests</a></div>
								
							</div></li>
									
									<li style="margin-right: 0px;"><div class="top_bar_user" style="margin-left: 0px;">
								<div class="char_icon" style="margin-right: 0px;"><img src="images/char_3.png" alt=""></div>
								<div><a style="margin-right: 0px;" href="bigdeals.php">Big Deals</a></div>
								
							</div></li>
									<li style="margin-right: 0px;"><div class="top_bar_user" style="margin-left: 0px;">
								<div class="char_icon" style="margin-right: 0px;"><img src="images/char_2.png" alt=""></div>
								<div><a style="margin-right: 0px;" href="loginform.php">Quote Response</a></div>
								
							</div></li>
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
								<form action="#">
									<input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
								</form>
							</div>
							<ul class="page_menu_nav">
								<li class="page_menu_item">
									<a href="loginform.php">Sign in/Sign up</a>
								</li>
								
								<li class="page_menu_item" style="margin-right: 0px;"><div class="top_bar_user" style="margin-left: 0px;">
								<div class="char_icon" style="margin-right: 0px;"><img src="images/homes.png" alt=""></div>
								<div><a style="margin-right: 0px; font-size: 16px;" href="index.php">Home<i class="fa fa-angle-down"></i></a></div>
								
							</div></li>
								
								<li class="page_menu_item" style="margin-right: 0px;"><div class="top_bar_user" style="margin-left: 0px;">
								<div class="char_icon" style="margin-right: 0px; background-color: white;"><img src="images/char_1.png" alt=""></div>
								<div><a style="margin-right: 0px; font-size: 16px;" href="customreq.php">Quote Requests<i class="fa fa-angle-down"></i></a></div>
								
							</div></li>
								
								
								
								<li class="page_menu_item" style="margin-right: 0px;"><div class="top_bar_user" style="margin-left: 0px;">
								<div class="char_icon" style="margin-right: 0px; background-color: white;"><img src="images/char_3.png" alt=""></div>
								<div><a style="margin-right: 0px; font-size: 16px;" href="bigdeals.php">Big Deals<i class="fa fa-angle-down"></i></a></div>
								
							</div></li>
								
								<li class="page_menu_item" style="margin-right: 0px;"><div class="top_bar_user" style="margin-left: 0px;">
								<div class="char_icon" style="margin-right: 0px; background-color: white;"><img src="images/char_2.png" alt=""></div>
								<div><a  style="margin-right: 0px; font-size: 16px;" href="loginform.php">Quote Response<i class="fa fa-angle-down"></i></a></div>
								
							</div></li>
								
								<li class="page_menu_item" style="margin-right: 0px;"><div class="top_bar_user" style="margin-left: 0px;">
								<div class="char_icon" style="margin-right: 0px;"><img src="images/phones.png" alt=""></div>
								<div><a style="margin-right: 0px; font-size: 16px;" href="#contactus">Contact Us<i class="fa fa-angle-down"></i></a></div>
								
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

	<div class="banner">
	      <div class="banner_background" style="background-image:url(images/banner_background.jpg)">
	      	
	      </div>
		      <div class="banner_content">
		         <div class="home_content d-flex flex-column align-items-center justify-content-center">
					 <h2 class="home_title">Make a Requisition</h2>
		</div>
			   </div>
       </div>


<div  class="productview" >
<div  class="col-lg-10" style="margin: auto;">
	<h2 style="margin-bottom: 10px;">Find What You need</h2>
<form id="frm-example" action="prodviewbefore.php" method="POST">
<table align="center" class="table table-hover " id="products">
	<thead>
		<tr>
			<td>Item</td>
			<td>Description</td>
		</tr>
	</thead>
<tbody>	

<?php
	include('dbconfig.php');
	error_reporting(0);
	if (isset($_POST['search'])){

			$name =$_POST['product'];
				$category = $_POST['category'];
		 
			$sql_query = "SELECT * FROM products WHERE pname LIKE '%{$name}%' OR description LIKE '%{$name}%' AND category = '$category'";
		
	$result = mysqli_query($db,$sql_query);
		while($row = mysqli_fetch_array($result)){
		//echo $row['maid'];
		
	?>
       <tr style="height: 50px;">
		  
       		<td> <a  href="<?php echo 'data:image/jpeg;base64,'.base64_encode($row['image'] ).''?>" >
			   <?php echo ' <img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="200" width="200" class="img-thumnail" />'; ?> 
			   </a></td>
       		<td>
				<label >Name:</label><label ><?php echo $row['pname']; ?></label></br>
		   <label >Price:</label><label ><?php echo $row['price']; ?></label>
	</br>
		<label >Description:</label><label ><?php echo $row['description']; ?></label>
	
		</br>
	<a href="prodviewbefore.php?prodid=<?php echo $row['prodid'];?>" class="btn btn-success">View</a>
		   </td>
            
      		
       </tr>	
        <?php
		}
	}else{
		$sql_query = "SELECT * FROM products";
		
	$result = mysqli_query($db,$sql_query);
		while($row = mysqli_fetch_array($result)){
		//echo $row['maid'];
		
	?>
       <tr style="height: 50px;">
		  
       		<td> <a  href="<?php echo 'data:image/jpeg;base64,'.base64_encode($row['image'] ).''?>" >
			   <?php echo ' <img src="data:image/jpeg;base64,'.base64_encode($row['image'] ).'" height="200" width="200" class="img-thumnail" />'; ?> 
			   </a></td>
       		<td>
				<label >Name:</label><label ><?php echo $row['pname']; ?></label></br>
		   <label >Price:</label><label ><?php echo $row['price']; ?></label>
	</br>
		<label >Description:</label><label ><?php echo $row['description']; ?></label>
		</br>
	<a href="prodviewbefore.php?prodid=<?php echo $row['prodid'];?>" class="btn btn-success">View</a>
		   </td>
            
      		
       </tr>	
        <?php
		}
	}

?>
</tbody>
<tfoot>
</tfoot>
</table>
 
	</form>

</div>

	</div>


	<!-- Recently Viewed -->

	<div class="viewed" style="margin-top: 30px; margin-bottom: 10px;">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="viewed_title_container">
						<h2 class="viewed_title">Our Patners</h2>
						<div class="viewed_nav_container">
							<div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
							<div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
						</div>
					</div>

					<div class="viewed_slider_container">
						
						<!-- Recently Viewed Slider -->

						<div class="owl-carousel owl-theme viewed_slider">
							
							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="images/view_1.jpg" alt=""></div>
									<div class="viewed_content text-center">
										
										<div class="viewed_name"><a href="#">Partner 1</a></div>
									</div>
									<ul class="item_marks">
										
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="images/view_2.jpg" alt=""></div>
									<div class="viewed_content text-center">
										
										<div class="viewed_name"><a href="#">Partner 2</a></div>
									</div>
									<ul class="item_marks">
									
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="images/view_3.jpg" alt=""></div>
									<div class="viewed_content text-center">
										
										<div class="viewed_name"><a href="#">Partner 3</a></div>
									</div>
									<ul class="item_marks">
									
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="images/view_4.jpg" alt=""></div>
									<div class="viewed_content text-center">
										
										<div class="viewed_name"><a href="#">Partner 4</a></div>
									</div>
									<ul class="item_marks">
										
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="images/view_5.jpg" alt=""></div>
									<div class="viewed_content text-center">
										
										<div class="viewed_name"><a href="#">Partner 5</a></div>
									</div>
									<ul class="item_marks">
										
									</ul>
								</div>
							</div>

							<!-- Recently Viewed Item -->
							<div class="owl-item">
								<div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
									<div class="viewed_image"><img src="images/view_6.jpg" alt=""></div>
									<div class="viewed_content text-center">
										
										<div class="viewed_name"><a href="#">Partner 6</a></div>
									</div>
									<ul class="item_marks">
										
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


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
	
	<script type="text/javascript" src="pop-up-demo/js/jquery.leanModal.min.js"></script>
	<script type="text/javascript" src="pop-up-demo/popup.js"></script>

<script src="DataTable/datatables.min.js" type="text/javascript"></script>
<script src="DataTable/Responsive-2.2.2/js/dataTables.responsive.min.js" type="text/javascript"></script>
<script>
$(document).ready( function () {
    $('#products').DataTable( {
    "responsive": true,
		"pageLength": 5,
		 
		 "sDom": 'tp'
		/*
		

    l= Length changing

    f= Filtering input

    r= pRocessing

    t= Table

    i= Info

    p= Pagination

		*/
  } );
} );
</script>
</body>

</html>