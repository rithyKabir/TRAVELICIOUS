<?php
// Create database connection
$db = mysqli_connect("localhost", "root", "", "tms");

// Initialize message variable
$msg = "";

// If upload button is clicked ...
if (isset($_POST['upload'])) {
	// Get image name
	$image = $_FILES['image']['name'];
	// Get text
	$image_text1 = mysqli_real_escape_string($db, $_POST['image_text1']);
	$image_text2 = mysqli_real_escape_string($db, $_POST['image_text2']);
	$image_text3 = mysqli_real_escape_string($db, $_POST['image_text3']);

	// image file directory
	$target = "images/" . basename($image);

	$sql = "INSERT INTO tblblog (blogimage,blogheading, blogdetails,blogplace) VALUES ('$image', '$image_text1','$image_text3','$image_text2')";
	// execute query
	mysqli_query($db, $sql);

	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
		echo '<script>alert("BLOG UPLOADED SUCCESSFULLY");window.location="blog.php"</script>';

	} else {
		
		echo '<script>alert("REGISTRATION ERROR")</script>';

	}
}

?>






<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>TRAVELICIOUS</title>
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
							<div id="colorlib-logo"><a href="index.html">TRAVELICIOUS</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>

							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
					<li style="background-image: url(images/cover-img-2.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
									<div class="slider-text-inner text-center">
										<h2>by travelicious.com</h2>
										<h1>Blog</h1>
									</div>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</aside>

		<div id="colorlib-blog">
			<div class="container">
				<div class="row">
					<div class="col-md-8">


						<div class="container mt-5">

							<!-- <form method="POST">
								<input type="text" placeholder="Blog Title" class="form-control bg-dark text-white my-5 text-center" name="blogname" required>
								<input type="text" placeholder="Blog Place" class="form-control bg-dark text-white my-5 text-center" name="blogplace" required>
								<textarea class="form-control bg-dark text-white my-3" id="blogdetails" name="blogdetails" required></textarea>
								<input type="file" name="blogimage" id="blogimage" required>

								<div class="row">
									<div class="col-sm-8 col-sm-offset-5">
										<button type="submit" name="submit">Create New Blog</button>
									</div>
								</div>

							</form> -->

							<form method="POST" action="createblog.php" enctype="multipart/form-data">
								<input type="hidden" name="size" value="1000000">
								<div>
									<input type="file" name="image">
								</div>
								<div>
									<textarea id="text" cols="80" rows="2" name="image_text1" placeholder="Blog Name"></textarea>
								</div>
								<div>
									<textarea id="text" cols="80" rows="3" name="image_text2" placeholder="Blog Place"></textarea>
								</div>
								<div>
									<textarea id="text" cols="80" rows="15" name="image_text3" placeholder="Blog Details"></textarea>
								</div>
								<div>
									<button type="submit" name="upload">POST</button>
								</div>
							</form>


						</div>


					</div>


				</div>
			</div>
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
	</div>

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