<?php

include 'db.php';
$msg = "";

$ids = $_GET['id'];

$showquery = "select * from user where id = {$ids}";

$showdata = mysqli_query($con, $showquery);

$arrdata = mysqli_fetch_array($showdata);

if(isset($_POST['submit'])){

	$idupdate = $_GET['id'];

	$firstN=$_POST['firstName'];
	$lastN=$_POST['lastName'];
	$email=$_POST['email'];

	$query = " update user set id='$idupdate' first_name='$firstN', last_name='$lastN,' email_id='$email' where id=$idupdate ";

	if(mysqli_query($con,$query)){
		$msg="donation money added to the database successfully!";
	}
	else{
		$msg="failed to added donation money!";
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
						<input class="input100" type="text" name="firstName" value="<?php echo $arrdata['first_name']; ?>" placeholder="Enter First Name" >
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100" style="font-family:unset;">Last Name</span>
						<input class="input100" type="text" name="lastName" value="<?php echo $arrdata['last_name']; ?>" placeholder="Enter Last Name" >
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-26">
						<span class="label-input100" style="font-family:unset;">Email</span>
						<input class="input100" type="email" name="email" value="<?php echo $arrdata['email_id']; ?>" placeholder="Enter Email address" >
						<span class="focus-input100"></span>
					</div>

					<div class="container-login100-form-btn">
						<input name="submit" type="submit" class="login100-form-btn" value="Update">
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