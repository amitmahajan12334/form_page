<?php

require 'db.php';
$msg = "";

if(isset($_POST['submit'])){
	$firstN=$_POST['firstName'];
	$lastN=$_POST['lastName'];
	$email=$_POST['email'];
	

	$sql="INSERT INTO user(first_name,last_name,email_id)VALUES('$firstN','$lastN','$email')";

	if(mysqli_query($con,$sql)){
		$msg="user value inserted successfully!";
	}
	else{
		$msg="failed insertion!";
	}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

<style>
a{
	text-decoration: none;
	padding-left: 40px;;
}

</style>
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(https://previews.123rf.com/images/sirikornt/sirikornt1709/sirikornt170900317/86517725-laptop-with-smart-phone-notebook-and-coffee-cup-on-workplace-table-white-background-on-laptop-screen.jpg);">
				</div>

				<form method="post" class="login100-form validate-form">
					<div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100" style="font-family:unset;">First Name</span>
						<input class="input100" type="text" name="firstName" placeholder="Enter First Name" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100" style="font-family:unset;">Last Name</span>
						<input class="input100" type="text" name="lastName" placeholder="Enter Last Name" required>
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100" style="font-family:unset;">Email</span>
						<input class="input100" type="email" name="email" placeholder="Enter Email address" required>
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<input name="submit" type="submit" class="login100-form-btn" value="Submit">
						<a href="printData.php" class="login100-form-btn" style="background-color:blue; margin-left:40px;">Check Form</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="js/main.js"></script>
<!--===============================================================================================-->

</body>
</html>