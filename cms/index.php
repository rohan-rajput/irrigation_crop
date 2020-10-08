<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!--Bootstrap CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<!--Font Awesome CSS -->
<link rel="stylesheet" href="css/all.min.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/custom.css">


<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
<link rel = "icon" type = "images/icon.png" href = "icon.jpg">
<title>CROP MANAGEMENT SYSTEM</title>
</head>
<body>
	<!-- start navigation -->
	<nav class="navbar navbar-expand-sm navbar-light bg-light pl-5 fixed-top">
		<a href="index.php" class="navbar-brand">CMS</a>
		<span class="navbar-text">Farmer's helping hand</span>
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="myMenu">
			<ul class="navbar-nav pl-5 custom-nav">
				<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
				<li class="nav-item"><a href="#Services" class="nav-link">Services</a></li>
				<li class="nav-item"><a href="#registration" class="nav-link">Registration</a></li>
				<li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link">Login</a></li>
				<li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
				
			</ul>
		</div>


	</nav>
	<!-- end nav tab-->


	<!-- start header Jumbotron -->
	<header class ="jumbotron back-image" style="background-image:url(images/farm.jpg);">
		<div class="myclass mainHeading">
			<h1 class="text-uppercase text-light  font-weight-bold">Welcome to CMS </h1>
			<p class=" text-light ">Farmer's helping hand</p>
			<p class="font-italic text-light ">Crop & Farm Management Software is designed to help improve productivity and operational efficiency.   </p>
			<p class="font-italic text-light"> Almost effortlessly, it allows growers to keep and store accurate records,
			 monitor their team, keep tabs on their chemical applications and chemical inventory, and schedule and manage their production practice events.</p>
			<p class="font-italic text-light"> It also provides the real-time data growers need to make the right decisions at the right time.</p>
			<a href="Requester/RequesterLogin.php" class="btn btn-light mr-4">Login</a>
			<a href="#registration" class="btn btn-success mr-4">Sign Up</a>
		</div>
		</header> <!-- end header Jumbotron -->

		

		<!-- start services section -->
		<div class="container text-center border-bottom text-dark">
			<h2> our services</h2>
			<div class="row mt-4">
				<div class="col-sm-4 mb-4">
					<a href="#"><i class="fas fa-tv fa-8x text-dark"></i></a>
					<h4 class="mt-4 text-dark">tools</h4>
				</div>

				<div class="col-sm-4 mb-4">
					<a href="#"><i class="fas fa-sliders-h  fa-8x text-dark"></i></a>
					<h4 class="mt-4 text-dark">maintenence</h4>
				</div>
				<div class="col-sm-4 mb-4">
					<a href="#"><i class="fas fa-cogs fa-8x text-dark"></i></a>
					<h4 class="mt-4 text-dark">repair</h4>
				</div>
</div>
</div>
<!-- End Services section-->

<?php include('userRegistration.php') ?>

<!-- start registration form -->

	
<!-- end registarion form container  -->
<!-- happy customers -->
<div class="jumbotron bg-light">
	<div class="container">
		<h2 class="text-center text-black"> a word from our users</h2>
		<div class="row mt-7">
			<div class="col-lg-3 col-sm-6"> <!--sart first column -->
				<div class="card shadow -lg mb-2">
					<div class="card-body text-center">
						<img src="images/avatar1.jpg" class="img-fluid" style= "border-radius:100px;" alt="avt1">
						<h4 class="card-title">Kiran</h4>
						<p class="card-text">this website's good for people like us .good work done by developers</p>
					</div>
				</div>
			</div><!-- end 1st column-->
			<div class="col-lg-3 col-sm-6"> <!--start 2nd column -->
				<div class="card shadow -lg mb-2">
					<div class="card-body text-center">
						<img src="images/avatar2.jpg" class="img-fluid" style= "border-radius:100px;" alt="avt2">
						<h4 class="card-title">sam</h4>
						<p class="card-text">this website's good for people like us .</p>
					</div>
				</div>
			</div><!-- end 2nd column-->
			<div class="col-lg-3 col-sm-6"> <!--start 3rd column -->
				<div class="card shadow -lg mb-2">
					<div class="card-body text-center">
						<img src="images/avatar3.jpg" class="img-fluid" style= "border-radius:100px;" alt="avt2">
						<h4 class="card-title">harry</h4>
						<p class="card-text">this website's good for people like us .good work done by developers</p>
					</div>
				</div>
			</div><!-- end 3rd column-->
			<div class="col-lg-3 col-sm-6"> <!--start 4th column -->
				<div class="card shadow -lg mb-2">
					<div class="card-body text-center">
						<img src="images/avatar4.jpg" class="img-fluid" style= "border-radius:100px;" alt="avt3">
						<h4 class="card-title">samuel</h4>
						<p class="card-text">this website's good for people like us .good work done by developers</p>
					</div>
				</div>
			</div><!-- end 4th column-->
		</div>
	</div>
</div><!-- end happy customer-->
<!--Start Contact Us-->
  <div class="container" id="Contact">
    <!--Start Contact Us Container-->
    <h2 class="text-center mb-4">Contact US</h2> <!-- Contact Us Heading -->
    <div class="row">

      <!--Start Contact Us Row-->
      <?php include('contactform.php'); ?>
      <!-- End Contact Us 1st Column -->   
      <div class="col-md-4 text-center ">
        <!-- Start Contact Us 2nd Column-->
        <strong>Headquarter:</strong> <br>
        CMS Pvt Ltd, <br>
        Sec IV, Bokaro <br>
        Jharkhand - 834005 <br>
        Phone: +00000000 <br>
        <a href="#" target="_blank">www.cms.com</a> <br>

        <br><br>
        <strong>Bengaluru Branch:</strong> <br>
        CMS Pvt Ltd, <br>
        Ashok Nagar, Bengaluru <br>   
        Bengaluru- 560067 <br>
        Phone: +00000000 <br>
        <a href="#" target="_blank">www.cms.com</a> <br>
      </div> <!-- End Contact Us 2nd Column-->
    </div> <!-- End Contact Us Row-->
  </div> <!-- End Contact Us Container-->
  <!-- End Contact Us -->

  <!-- Start Footer-->
  <footer class="container-fluid bg-dark text-white mt-5" style="border-top: 3px solid #00ff00;">
    <div class="container">
      <!-- Start Footer Container -->
      <div class="row py-3">
        <!-- Start Footer Row -->
        <div class="col-md-6">
          <!-- Start Footer 1st Column -->
          <span class="pr-2">Follow Us: </span>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a>
        </div> <!-- End Footer 1st Column -->

        <div class="col-md-6 text-right">
          <!-- Start Footer 2nd Column -->
          <small> Designed by Rohan &copy; 2019.
          </small>
          <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
        </div> <!-- End Footer 2nd Column -->
      </div> <!-- End Footer Row -->
    </div> <!-- End Footer Container -->
  </footer> <!-- End Footer -->

	

<!--Bootstrap javascript -->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>

</body>
</html>


