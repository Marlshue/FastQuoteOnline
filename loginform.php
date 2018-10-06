<!DOCTYPE html>
<html lang="en">
<head>
<title>FastQuoteOnline</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="OneTech shop project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/loginform.css">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />

</head>

<body>

<div class="super_container">
	
	
	<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
			
			<div class="sign-in-htm">
				<form action="login.php"  method="post">
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" name="username" type="text" class="input" required autofocus>
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" name="pwd" class="input"type="password" data-type="password" required autofocus>
					
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<button name="login" type="submit" data-submit="...Sending" class="button">Sign In</button>
					
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
					<br>
					<a href="index.php">Back</a>
				</div>
				</form>
			</div>
			
			<div class="sign-up-htm">
				<form action="registration.php" method="post">
				<div class="group">
					<label for="user" class="label">Email Adress</label>
					<input name="email" class="input" type="text" required autofocus>
				</div>
				<div class="group">
					<label for="pass" class="label">Cell number</label>
					<input name="cell" class="input" type="text" required autofocus>
					
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					 <input class="input" name="password" type="password" required autofocus>
					
				</div>
				<div class="group">
					<label for="pass" class="label">Repeat Password</label>
					<input class="input"  name="confirm" type="password" required autofocus>
					
				</div>
				
				<div class="group">
					<button name="join" type="submit"  class="button"  data-submit="...Sending">Join</button>
					
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>

</body>

</html>