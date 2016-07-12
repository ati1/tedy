<?php

//echo $_SERVER["SCRIPT_NAME"];  //    /tedy/index.php  ili   /tedy/test.php
$current_script = $_SERVER["SCRIPT_NAME"]; 

$pos = strpos($current_script,'index.php');

if ($pos===false){
	$has_index_page = false;
} else {
	$has_index_page = true;
}

//echo '<br>';

////echo getcwd();  \\C:\xampp\htdocs\tedy
?>
<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->



<!DOCTYPE html>
<html>

<!-- Head -->
<head>

<title>Tedy site</title>

<!-- For-Mobile-Apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Wanderer a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps -->

<!-- Custom-Stylesheet-Links -->
<!-- Bootstrap-Core-CSS --> 	<link rel="stylesheet"	href="css/bootstrap.min.css" 	type="text/css" media="all">
<!-- Index-Page-CSS --> 	<link rel="stylesheet"	href="css/style.css" 		type="text/css" media="all">
<!-- Flexslider-CSS --> 	<link rel="stylesheet" 	href="css/flexslider.css" 	type="text/css" media="all">
<!-- Popup-Box-CSS --> 		<link rel="stylesheet" 	href="css/chocolat.css" 		type="text/css" media="all">
<!-- //Custom-Stylesheet-Links -->

<!-- Web-Fonts -->
<!-- Body-Font --> 		<link rel='stylesheet' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' 	type='text/css'>
<!-- Logo-Font --> 		<link rel='stylesheet' href='//fonts.googleapis.com/css?family=Sigmar+One' 			type='text/css'>
<!-- Navbar-Links-Font --> 	<link rel='stylesheet' href='//fonts.googleapis.com/css?family=Raleway:400,500,600'		type='text/css'>
<!-- //Web-Fonts -->

</head>
<!-- //Head -->



<!-- Body -->
<body>

	<!-- Header -->
	<div class="header" id="home">

		<!-- Navbar -->
		<nav class="navbar navbar-default">
			<div class="container-fluid">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html">ATITEDDY</a>
				</div>

				<div class="collapse navbar-collapse navbar-right" id="navbar">
					<div class="top-nav">

						<a href="#about" class="hover-effect scroll">
							<span>
								<span>ABOUT</span>
								<span>ABOUT</span>
								<span></span>
							</span>
						</a>

						<a href="#services" class="hover-effect scroll">
							<span>
								<span>SERVICES</span>
								<span>SERVICES</span>
								<span></span>
							</span>
						</a>

						<a href="#gallery" class="hover-effect scroll">
							<span>
								<span>GALLERY</span>
								<span>GALLERY</span>
								<span></span>
							</span>
						</a>

						<a href="#team" class="hover-effect scroll">
							<span>
								<span>TEAM</span>
								<span>TEAM</span>
								<span></span>
							</span>
						</a>

						<a href="#contact" class="hover-effect scroll">
							<span>
								<span>CONTACT</span>
								<span>CONTACT</span>
								<span></span>
							</span>
						</a>

					</div>
				</div>

			</div>
		</nav>
		<!-- //Navbar -->

		
		
		
		
		
		
<?php
   if ($has_index_page){
?>		
		<!-- Slider -->
		<div class="slider">
			<ul class="rslides" id="slider1">
				<li>
					<img src="images/slide-1.jpg" alt="Wanderer">
					<div class="caption">
						<h3>Explore the unexplored territories</h3>
					</div>
				</li>
				<li>
					<img src="images/slide-2.jpg" alt="Wanderer">
					<div class="caption">
						<h3>Feel the love of the nature</h3>
					</div>
				</li>
				<li>
					<img src="images/slide-3.jpg" alt="Wanderer">
					<div class="caption">
						<h3>Away from the concrete jungles</h3>
					</div>
				</li>
				<li>
					<img src="images/slide-4.jpg" alt="Wanderer">
					<div class="caption">
						<h3>Achieve nirvana and inner peace</h3>
					</div>
				</li>
				<li>
					<img src="images/slide-5.jpg" alt="Wanderer">
					<div class="caption">
						<h3>Get lost in the wonders of the nature</h3>
					</div>
				</li>
			</ul>
		</div>
		<!-- //Slider -->
<?php
   }
 ?>  
		
		
		
		
	</div>
	<!-- //Header -->

