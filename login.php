<?php

session_start();

$arr = array();
//initializing the cart
$_SESSION['cart'] = $arr;

?>


<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<style>
		/* body {
			padding-top: 150px;
		} */

		#submit-btn {
			background-color: #E85B72;
			border: #E85B72;
		}
	</style>
	<title>Login</title>
</head>

<body>
	<nav class="navbar  navbar-expand-lg navbar-light">
		<a class="navbar-brand" href="home.php"><img src="images/logo.jpeg" height="80px" width="150px" /> </a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="main_nav">

			<ul class="navbar-nav mx-auto">
				<li class="nav-item"> <a class="nav-link mx-4" href="home.php">Home </a> </li>
				<li class="nav-item"><a class="nav-link mx-4" href="about.php"> About </a></li>
				<li class="nav-item"><a class="nav-link mx-4" href="contact.php">Contact us</a></li>

			</ul>
			<ul style="list-style: none;">
				<li class="nav-item"><a class="nav-link" href="addtocart.php"><img src="images/add-to-basket.png" width="40px" height="40px"></a></li>
			</ul>
			<a class="btn btn-warning mx-4" href="login.php">Login</a>
			<a class="btn btn-warning mx-4" href="register.php">Register</a>
		</div> <!-- navbar-collapse.// -->
	</nav>
	<section>
		<div class="container">
			<div class="row">
				<div class="col">
					<form method="POST">
						<div class="form-group">
							<label for="exampleInputEmail1">Email address</label>
							<input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
							<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password" required>
						</div>
						<!-- <div class="form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Remember me</label>
						</div><br> -->
						<p><a href="register.php" class="text-muted">Need to Register? Signup</a></p>
						<input type="submit" class="btn btn-primary" id="submit-btn" value="Login" name="login"></input>
					</form>
				</div>
				<div class="col">
					<img src="./images/login (2).png" alt="medicine" id="image" width="90%" height="80%" style="margin-top: 0px;" />
				</div>
			</div>
	</section>
	<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6">
					<h6>About</h6>
					<p class="text-justify">Medico shop- Your Health & Fitness Partner is an online portal for healthcare products brought to you by Medicare Products Inc. The company is managed by a team of two young & motivated entrepreneurs with an objective to provide and extend personalized and innovative healthcare services to its customers.</p>
				</div>

				<div class="col-xs-6 col-md-3">
					<h6>Categories</h6>
					<ul class="footer-links">
						<li><a href="#">Syrup</a></li>
						<li><a href="#">Tablet</a></li>
						<li><a href="#">Ayurveda</a></li>
						<li><a href="#">Hompyopethik</a></li>
						<li><a href="#">Emulsions</a></li>
						<li><a href="#">Inhalers</a></li>
					</ul>
				</div>

				<div class="col-xs-6 col-md-3">
					<h6>Quick Links</h6>
					<ul class="footer-links">
						<li><a href="about.php">About Us</a></li>
						<li><a href="#">Contact Us</a></li>
						<li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
						<li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
					</ul>
				</div>
			</div>
			<hr>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-6 col-xs-12">
					<p class="copyright-text">Copyright &copy; 2022 All Rights Reserved by
						<a href="#">Medico</a>.
					</p>
				</div>

				<div class="col-md-4 col-sm-6 col-xs-12">
					<ul class="social-icons">
						<li><a class="facebook" href="#"><i class="fa-brands fa-facebook"></i></a></li>
						<li><a class="twitter" href="#"><i class="fa-brands fa-twitter"></i></a></li>
						<li><a class="linkedin" href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>


	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>

<?php


include("./admin/connection.php");

if (isset($_POST['login'])) {
	$email = $_POST["email"];
	$pass = $_POST["password"];

	//	echo "<script>alert('$email');</script>";

	if ($email == 'admin@gmail.com' && $pass == '12345') {
		echo "<script>alert('Login success');location='admin/index.php';</script>";
	} else if ($email  != 'admin@gmail.com' && $pass != '12345') {
		$qry = "select * from user where email = '$email' AND password = '$pass'";
		$sql = mysqli_query($conn, $qry);
		$result = mysqli_fetch_assoc($sql);
		if (mysqli_num_rows($sql) > 0) {
			$_SESSION['email'] = $email;
			echo $email;
			echo "<script>alert('Login success!');location='home.php';</script>";
		} else {
			echo "<script>alert('User doesnot exist!')</script>";
		}
	}
}


?>
Footer