<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tour Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>

	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container-fluid">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="index.html">Travelicious</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li><a href="home.php">Home</a></li>
								<li class="has-dropdown">
									<a href="tours.php">Tours</a>
									<ul class="dropdown">
										<li><a href="#">Destination</a></li>
										<li><a href="#">Cruises</a></li>
										<li><a href="#">Hotels</a></li>
										<li><a href="#">Booking</a></li>
									</ul>
								</li>
								<li class="active"><a href="hotels.php">Hotels</a></li>
								<li><a href="services.html">Services</a></li>
								<li><a href="blog.php">Blog</a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="contact.html">Contact</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
					<li style="background-image: url(images/cover-img-4.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
									<div class="slider-text-inner text-center">
										<h2>by Travelicious.com</h2>
										<h1>Find Hotel</h1>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</aside>

		<div class="colorlib-wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="wrap-division">





								<?php


								$conn = new mysqli("localhost", "root", "", "tms");
								if ($conn->connect_error) {
									die("Connection failed: " . $conn->connect_error);
								}
								$sql = "select * from tblhotels";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()) {
								?>


										<div class="col-md-6 col-sm-6 animate-box">
											<div class="hotel-entry">
												<a href="hotel-room.php?hotelid=<?php echo $row["hotelid"] ?>" class="hotel-img" style="background-image: url(admin/hotelimages/<?php echo $row["hotelimage"] ?>);">
													<p class="price"><span>৳<?php echo $row["hotelprice"] ?></span><small> /night</small></p>
												</a>
												<div class="desc">
													<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span>
														545 Reviews</p>
													<h3><a href="hotel-room.php?hotelid=<?php echo $row["hotelid"] ?>"> <?php echo $row["hotelname"] ?></a></h3>
													<span class="place"><?php echo $row["hotellocation"] ?></span>
													<p class="paragraph"><?php echo $row["hoteldetails"] ?></p>
												</div>
											</div>
										</div>




								<?php
									}
								}
								?>














							</div>
						</div>

					</div>


				</div>
			</div>
			</div>

			
			<footer id="colorlib-footer" role="contentinfo">
				<div class="container">
					<div class="row row-pb-md">
						<div class="col-md-6 colorlib-widget">
							<h4>Tour Agency</h4>
							<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
							<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="https://www.facebook.com//"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
							</p>
						</div>




						<div class="col-md-6 col-md-push-1">
							<h4>Contact Information</h4>
							<ul class="colorlib-footer-links">
								<li>Townhall 123, <br> Asad gate </li>
								<li><a href="tel://1234567920">+ 1235 2355 98</a></li>
								<li><a href="mailto:info@yoursite.com">Travelicious@gmail.com</a></li>
								<li><a href="#">Travelicious.com</a></li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 text-center">
							<p>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>
									document.write(new Date().getFullYear());
								</script> All rights reserved <i class="icon-heart2" aria-hidden="true"></i> by <a href="#" target="_blank">Travelicious</a>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>

							</p>
						</div>
					</div>
				</div>
			</footer>					
		

		<div class="gototop js-top">
			<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
		</div>

		<!-- jQuery -->
		<script src="js/jquery.min.js"></script>
		<!-- jQuery Easing -->
		<script src="js/jquery.easing.1.3.js"></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Waypoints -->
		<script src="js/jquery.waypoints.min.js"></script>
		<!-- Flexslider -->
		<script src="js/jquery.flexslider-min.js"></script>
		<!-- Owl carousel -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- Magnific Popup -->
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/magnific-popup-options.js"></script>
		<!-- Date Picker -->
		<script src="js/bootstrap-datepicker.js"></script>
		<!-- Stellar Parallax -->
		<script src="js/jquery.stellar.min.js"></script>

		<!-- Main -->
		<script src="js/main.js"></script>

</body>

</html>