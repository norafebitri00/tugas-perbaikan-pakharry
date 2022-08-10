<?php
session_start();
if(!isset($_SESSION["login"])) {
  exit(header("Location: login.php" ));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!--
Fitness Template
http://www.templatemo.com/tm-487-fitness
-->
<title>Fitness - Responsive HTML Template</title>
<meta name="description" content="">
<meta name="author" content="">
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/owl.theme.css">
<link rel="stylesheet" href="css/owl.carousel.css">

<!-- Main css -->
<link rel="stylesheet" href="css/style.css">

<!-- Google Font -->
<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,600' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lora:700italic' rel='stylesheet' type='text/css'>

</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


<!-- =========================
     PRE LOADER       
============================== -->
<div  class="preloader">

	<div class="sk-spinner sk-spinner-pulse"></div>

</div>


<!-- =========================
    NAVIGATION SECTION   
============================== -->
<div class="navbar navbar-default navbar-fixed-top sticky-navigation" role="navigation">
	<div class="container">

		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand">Fitness</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right main-navigation">
				<li><a href="#home" class="smoothScroll">Home</a></li>
				<li><a href="#overview" class="smoothScroll">About</a></li>
                <li><a href="logout.php" class="smoothScroll">Logout</a>
            </li>
			</ul>
		</div>

	</div>
</div>


<!-- =========================
    HOME SECTION   
============================== -->
<section id="home" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-1 col-md-10 col-sm-12">
				<h1 class="wow bounceIn" data-wow-delay="0.9s">Nora Febitri</h1>
				<h2 class="wow fadeInUp" data-wow-delay="1.6s">1955201019</h2>
				<h3 class="wow fadeInUp" data-wow-delay="1.6s">Forensik Digital 6.4</h3>
			</div>

		</div>
	</div>
</section>


<!-- =========================
    OVERVIEW SECTION   
============================== -->
<section id="overview" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="col-md-6 col-sm-12">
				<img src="images/overview-img.jpg" class="img-responsive" alt="Overview">
				<blockquote class="wow fadeInUp" data-wow-delay="1.9s">Fitness is free website template that can be used for any company. You may download, modify and use this layout for your website.</blockquote>
			</div>

			<div class="col-md-1"></div>

			<div class="wow fadeInUp col-md-4 col-sm-12" data-wow-delay="1s">
				<div class="overview-detail">
					<h2>About Fitness</h2>
					<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet. Dolore magna aliquam erat.</p>
					<p>Fitness web template includes total 2 pages. This is an index (main) page and another is a <a href="blog-single.html">blog page</a>.</p>
					<a href="#trainer" class="btn btn-default smoothScroll">Let us begin</a>
				</div>
			</div>

			<div class="col-md-1"></div>

		</div>
	</div>
</section>




<!-- =========================
     SCRIPTS   
============================== -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.parallax.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/jquery.backstretch.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/smoothscroll.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/custom.js"></script>

</body>
</html>