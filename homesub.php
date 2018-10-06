<?php
session_start();
//$taskOnwer = $_SESSION['companyid'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Home</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" type="text/css" href="visuals/styles/bootstrap4/bootstrap.min.css">
<link href="visuals/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/blog_styles.css">
<link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">
<link rel="stylesheet" type="text/css" href="visuals/plugins/slick-1.8.0/slick.css">
<link rel="stylesheet" type="text/css" href="visuals/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="visuals/styles/responsive.css">
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<div class="super_container">  
<!-- Header -->		
     <?php
         
 
       ?>
       <div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="top_bar_contact_item">
                        <div class="top_bar_icon"><img src="images/phone.png" alt=""></div>+38 068 005 3570</div>
						<div class="top_bar_contact_item">
                        <div class="top_bar_icon"><img src="images/mail.png" alt=""></div>
                        <a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a></div>
						<div class="top_bar_content ml-auto">
							
							<div class="top_bar_user">
								<div class="user_icon"><img src="images/user.svg" alt=""></div>
								
								<div><a href="index.php">Sign out</a></div>
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>
       <!-- Header Main -->
<header class="header">
		<div class="header_main">
			<div class="container">
				<div class="row">

					<!-- Logo -->
					<div class="col-lg-2 col-sm-3 col-3 order-1">
						<div class="logo_container">
							<div class="logo"><a href="#">Anything</a></div>
						</div>
					</div>

					<!-- Search -->
					<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
						<div class="header_search">
							<div class="header_search_content">
								<div class="header_search_form_container">
									<form action="#" class="header_search_form clearfix">
										<input type="search" required class="header_search_input" placeholder="Search for supplier...">
										
										<button type="submit" class="header_search_button trans_300" value="Submit"><img src="images/search.png" alt=""></button>
									</form>
								</div>
							</div>
						</div>
					</div>

					<!-- Wishlist -->
					<div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
						<div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
							<div class="wishlist d-flex flex-row align-items-center justify-content-end">
								<div class="cart_container d-flex flex-row align-items-center justify-content-end">
									<div class="cart_icon">
										<img src="images/cart.png" alt="">
										<div class="cart_count"><span>11</span></div>
									</div>
									<div class="cart_content">
										<div class="cart_text"><a href="#">Qoutations</a></div>
									</div>
								</div>
							</div>

							<!-- Cart -->
							<div class="cart">
								<div class="cart_container d-flex flex-row align-items-center justify-content-end">
									<div class="cart_icon">
										<img src="images/cart.png" alt="">
										<div class="cart_count"><span>10</span></div>
									</div>
									<div class="cart_content">
										<div class="cart_text"><a href="#">Requisitions</a></div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
      <nav class="main_nav">
			<div class="container">
				<div class="row">
					<div class="col">
						
						<div class="main_nav_content d-flex flex-row">

							<!-- Categories Menu -->

							

							<!-- Main Nav Menu -->

							<div class="main_nav_menu ml-auto">
								<ul class="standard_dropdown main_nav_dropdown">
									<li><a href="homesub.php">Home<i class="fas fa-chevron-down"></i></a></li>
									<li >
										<a href="profiles.php">Profiles<i class="fas fa-chevron-down"></i></a>
										
									</li>
									<li >
										<a href="#">Qoutations<i class="fas fa-chevron-down"></i></a>
										
									</li>
									<li >
										<a href="requests.php">Requisitions<i class="fas fa-chevron-down"></i></a>
										
									</li>
									<li><a href="blog.html">Onboarding<i class="fas fa-chevron-down"></i></a></li>
									<li><a href="contact.html">Reports<i class="fas fa-chevron-down"></i></a></li>
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
		
      
	</header>	 
	 <!-- Banner -->

	  <div class="banner">
	      <div class="banner_background" style="background-image:url(images/banner_background.jpg)">
	      	
	      </div>
		      <div class="banner_content">
		         <div class="home_content d-flex flex-column align-items-center justify-content-center">
					 <h2 class="home_title">Home</h2>
		</div>
			   </div>
       </div>
	
          
          <div class="blog">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="blog_posts d-flex flex-row align-items-start justify-content-between">
						
						<!-- Blog post -->
						<div class="blog_post">
						<h3 align="center">Profiles</h3> 
							<div class="blog_image" style="background-image:url(images/blog_1.jpg)"></div>
							<div class="blog_text">Edit your user profile and create users for your profile</div>
							<div class="blog_button"><a href="profiles.php">Continue Reading</a></div>
						</div>

						<!-- Blog post -->
						<div class="blog_post">
						<h3 align="center">Qoutations</h3> 
							<div class="blog_image" style="background-image:url(images/blog_2.jpg)"></div>
							<div class="blog_text">
							Create a qoutation for recieved requisitions
							</div>
							<div class="blog_button"><a href="qoutations.php">Continue Reading</a></div>
						</div>

						<!-- Blog post -->
						<div class="blog_post">
						<h3 align="center">Requisitions</h3> 
							<div class="blog_image" style="background-image:url(images/blog_3.jpg)"></div>
							<div class="blog_text">
							Make a requisition, get a qoutation instantly
							</div>
							<div class="blog_button"><a href="requisitions.php">Continue Reading</a></div>
						</div>

						<!-- Blog post -->
						<div class="blog_post">
						<h3 align="center">Onboarding</h3> 
							<div class="blog_image" style="background-image:url(images/blog_4.jpg)"></div>
							<div class="blog_text">
								Register a clients you want to associate with on Fastqouteonline
							</div>
							<div class="blog_button"><a href="onboarding.php">Continue Reading</a></div>
						</div>

						<!-- Blog post -->
						<div class="blog_post">
						<h3 align="center">Reports</h3> 
							<div class="blog_image" style="background-image:url(images/blog_5.jpg)">
								
							</div>
							<div class="blog_text">Check out Your activities on fastqouteonline</div>
							<div class="blog_button"><a href="reports.php">Continue Reading</a></div>
						</div>
		
					</div>
				</div>
					
			</div>
		</div>
	</div>
		

<!-- Footer -->
 <footer class="footer">
		<div class="container">
			<div class="row">

				<div class="col-lg-3 footer_col">
					<div class="footer_column footer_contact">
						<div class="logo_container">
							<div class="logo"><a href="#">Fast Qoute Online</a></div>
						</div>
						<div class="footer_title">Got Question? Call Us 24/7</div>
						<div class="footer_phone">+38 068 005 3570</div>
						<div class="footer_contact_text">
							<p>17 Princess Road, London</p>
							<p>Grester London NW18JR, UK</p>
						</div>
						<div class="footer_social">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-youtube"></i></a></li>
								<li><a href="#"><i class="fab fa-google"></i></a></li>
								<li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
	 
			
               <div class="contact_container">
                 <form id="contact" name="contact" method="post" action="" onsubmit="ValidateEmail(document.contact.sender)"> 
                   <input type="text" id="sender" name="sender" placeholder="Your Email"> 
    
                   <textarea rows="5" id="message" name="message" placeholder="Message"></textarea>
                   <button name="send" type="submit" onclick="return validate_contact ( )"class="btn btn-primary"><i class="fa fa-paper-plane"></i> Send</button>
                </form>
              </div>
		
		
      
			</div>
	 </div>
</footer>
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
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/blog_custom.js"></script

></body>
</html>

