<!DOCTYPE html>
<html lang="en">
<head>
<title>Fast Qoute Online</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	
<link rel="stylesheet" type="text/css" href="style.css">
	
<link rel="stylesheet" type="text/css" href="pop-up-demo/css/popup.css">
	
<link rel="stylesheet" type="text/css" href="sliderfullwidth/jssor.css">
	<link href="DataTable/DataTables-1.10.16/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="plugins/slick-1.8.0/slick.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
	
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />

</head>

<body>

	
	<div id="modal" class="popupContainer" style="display:none;">
		<header class="popupHeader">
			<span class="header_title">Login</span>
			<span class="modal_close"><i class="fa fa-times"></i></span>
		</header>
		
		<section class="popupBody">
			<!-- Social Login -->
			<div class="social_login">
				<div class="">
					<a href="#" class="social_box fb">
						<span class="icon"><i class="fa fa-facebook"></i></span>
						<span class="icon_title">Connect with Facebook</span>
						
					</a>

					<a href="#" class="social_box google">
						<span class="icon"><i class="fa fa-google-plus"></i></span>
						<span class="icon_title">Connect with Google</span>
					</a>
				</div>

				<div class="centeredText">
					<span>Or use your Email address</span>
				</div>

				<div class="action_btns">
					<div class="one_half"><a href="#" id="login_form" class="btn">Login</a></div>
					<div class="one_half last"><a href="#" id="register_form" class="btn">Sign up</a></div>
				</div>
			</div>

			<!-- Username & Password Login form -->
			<div class="user_login">
				<form action="login.php"  method="post">
					
					<input name="username" placeholder="Username" type="text" tabindex="1" required autofocus>
					<br />

					<input name="pwd" placeholder="Password" type="password" tabindex="1" required autofocus>
					<br />

					<div class="checkbox">
						<input id="remember" type="checkbox" />
						<label for="remember">Remember me on this computer</label>
					</div>

					<div class="action_btns">
						<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
						<div class="one_half last"><button name="login" type="submit" data-submit="...Sending" class="btn btn_red">Login</button></div>
					</div>
				</form>

				<a href="#" class="forgot_password">Forgot password?</a>
			</div>

			<!-- Register Form -->
	<div class="user_register">
	<form action="registration.php" method="post">
					 
       <input name="email" placeholder="Email" type="text" tabindex="1" required autofocus>
    <br />
     <input name="cell" placeholder="Cellphone number" type="text" tabindex="1" required autofocus>
   <br />
   
      <input name="password" placeholder="Password" type="password" tabindex="1" required autofocus>
   <br />
      <input name="confirm" placeholder="Confirm Password" type="password" tabindex="1" required autofocus>
    <br />

					<div class="action_btns">
						<div class="one_half"><a href="#" class="btn back_btn"><i class="fa fa-angle-double-left"></i> Back</a></div>
						<div class="one_half last"><button name="join" type="submit"  class="btn btn_red" data-submit="...Sending">Join</button></div>
					</div>
				</form>
			</div>
		</section>
	</div>

<div class="super_container"  > 
		<!-- Top Bar -->
	
		<div class="top_bar">
			<div class="container">
				<div class="row">
					<div class="col d-flex flex-row">
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="images/phone.png" alt=""></div>+38 068 005 3570</div>
						<div class="top_bar_contact_item"><div class="top_bar_icon"><img src="images/mail.png" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a></div>
						<div class="top_bar_content ml-auto">
							
							<div class="top_bar_user">
								<div class="user_icon"><img src="images/user.svg" alt=""></div>
								<div><a id="modal_trigger" href="#modal">Sign in/Sign up</a></div>
								
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
							<div class="logo"><a href="index.php">OneTech</a></div>
						</div>
					</div>

					<!-- Search -->
					<div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
						<div class="header_search">
							<div class="header_search_content">
								<div class="header_search_form_container">
									<form action="indexproducts.php" class="header_search_form clearfix" method="post">
										
										<input name="product" id="product"  type="text" required class="header_search_input" placeholder="Search for products...">
										
										<button type="submit" name="search" id="search" class="header_search_button trans_300" ><img src="images/search.png" alt=""></button>
										
									</form>
								</div>
							</div>
						</div>
					</div>

					
					
				</div>
			</div>
		</div>
		
		
		

	</header>

	
  <div class="banner">
	      <div class="banner_background" style="background-image:url(images/banner_background.jpg)">
	      	
	      </div>
		      <div class="banner_content">
		         <div class="home_content d-flex flex-column align-items-center justify-content-center">
					 <h2 class="home_title">Home</h2>
		</div>
			   </div>
       </div>
<div  class="productview" >
	
<div  class="col-lg-10" style="margin: auto;"   >
	<h2 style="margin-bottom: 10px;">Find What You need</h2>
<form id="frm-example" action="requests.php" method="POST">
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
	if (isset($_POST['search'])){

			$name =$_POST['product'];
			
							
			$sql_query = "SELECT * FROM products WHERE pname LIKE '%{$name}%' OR description LIKE '%{$name}%'";
		
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
	<a href="requests.php?prodid=<?php echo $row['prodid'];?>" class="btn btn-success">View</a>
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
	<!--<a href="requests.php?prodid=<?php //echo $row['prodid'];?>" class="btn btn-success">View</a>-->
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
	
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="contact_container">
                 <form id="contact" name="contact" method="post" action="" onsubmit="ValidateEmail(document.contact.sender)"> 
                   <input type="text" id="sender" name="sender" placeholder="Your Email"> 
    
                   <textarea rows="5" id="message" name="message" placeholder="Message"></textarea>
                   <button name="send" type="submit" onclick="return validate_contact ( )"class="btn btn-primary"><i class="fa fa-paper-plane"></i> Send</button>
                </form>
              </div>

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
<script src="plugins/slick-1.8.0/slick.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>

<script src="DataTable/DataTables-1.10.16/js/jquery.dataTables.min.js" type="text/javascript"></script>

<script src="sliderfullwidth/js/jssor.slider-27.4.0.min.js" type="text/javascript"></script>
	<script src="sliderfullwidth/js/jssor.js" type="text/javascript"></script>
	<script type="text/javascript" src="pop-up-demo/js/jquery.leanModal.min.js"></script>
	<script type="text/javascript" src="pop-up-demo/popup.js"></script>
 <script type="text/javascript">jssor_1_slider_init();</script>

<script>
$(document).ready( function () {
    $('#products').DataTable( {
    
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