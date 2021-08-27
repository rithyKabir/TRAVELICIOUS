<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Travelicious</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
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

	<!-- Review -->
	<link rel="stylesheet" href="review.css">
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
							<div id="colorlib-logo"><a href="home.php">TRAVELICIOUS</a></div>
						</div>
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li><a href="index.php">Home</a></li>
								
								<li class="has-dropdown active">
									<a href="tours.php">Tours</a>
									<ul class="dropdown">
										<li><a href="#">Destination</a></li>
										<li><a href="#">Cruises</a></li>
										<li><a href="#">Hotels</a></li>
										<li><a href="#">Booking</a></li>
									</ul>
								</li>
								<li><a href="hotels.php">Hotels</a></li>
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
					<li style="background-image: url(images/tour-1.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
									<div class="slider-text-inner text-center">
										<h2>by travelicious.com</h2>
										<h1>Tour Overview of Amiyakhum</h1>
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
					<div class="col-md-9">
						<div class="row">
							<div class="col-md-12">
								<div class="wrap-division">

									<?php
									$ppackageid1 = intval($_GET['pkgid']);


									$conn = new mysqli("localhost", "root", "", "tms");
									//if ($conn->connect_error) {
									//die("Connection failed: " . $conn->connect_error);
									//}
									$p = 1;
									if(isset($_POST["go"]))
									{
										
										$sql = "update tbltourpackages set reviewsCount = reviewsCount+p where PackageId='$ppackageid1'";
										$conn->query($sql);
										
									}
									$sql = "select * from tbltourpackages where PackageId='$ppackageid1'";
									$result = $conn->query($sql);


									if ($result->num_rows > 0) {
										while ($row = $result->fetch_assoc()) {
											//echo "I have a dream";
											//echo $ppackageid1;


									?>


											<div class="col-md-12 col-md-offset-0 heading2 animate-box">
												<h2> <?php echo $row["PackageName"] ?></h2>
											</div>
											<label>Location : <?php echo $row["PackageLocation"]?></label>
											<p><b>Features :</b> <?php echo $row["PackageFetures"]?></p>
											<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span><?php echo $row["reviewsCount"] ?> Reviews</p>
											<p><b>Price :</b> <?php echo $row["PackagePrice"] ?> BDT</p>
											<p class="paragraph"><b>Details : </b> <?php echo $row["PackageDetails"] ?> </p>
											<div class="row">





												<div class="col-md-12 animate-box">
													<div class="room-wrap">
														<div class="row">
															<div class="col-md-6 col-sm-6">
																<div class="room-img" style="background-image: url(admin/day1images/<?php echo $row["day1image"] ?>);"></div>
															</div>
															<div class="col-md-6 col-sm-6">
																<div class="desc">
																	<span class="day-tour">Day 1</span>
																	<h2><?php echo $row["day1heading"] ?></h2>
																	<p><?php echo $row["day1details"] ?></p>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="col-md-12 animate-box">
													<div class="room-wrap">
														<div class="row">
															<div class="col-md-6 col-sm-6">
																<div class="room-img" style="background-image: url(admin/day2images/<?php echo $row["day2image"] ?>);"></div>
															</div>
															<div class="col-md-6 col-sm-6">
																<div class="desc">
																	<span class="day-tour">Day 2</span>
																	<h2><?php echo $row["day2heading"] ?></h2>
																	<p><?php echo $row["day2details"] ?></p>
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="col-md-12 animate-box">
													<div class="room-wrap">
														<div class="row">
															<div class="col-md-6 col-sm-6">
																<div class="room-img" style="background-image: url(admin/day3images/<?php echo $row["day3image"] ?>);"></div>
															</div>
															<div class="col-md-6 col-sm-6">
																<div class="desc">
																	<span class="day-tour">Day 3</span>
																	<h2><?php echo $row["day3heading"] ?></h2>
																	<p><?php echo $row["day3details"] ?></p>
																</div>
															</div>
														</div>
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

					<!-- SIDEBAR-->
					<div class="col-md-3">
						<div class="sidebar-wrap">
							<div class="side search-wrap animate-box">
								<h3 class="sidebar-heading">Book Tour Package</h3>
								<form method="post" class="colorlib-form">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label for="date">Check-in:</label>
												<div class="form-field">
													<i class="icon icon-calendar2"></i>
													<input type="text" id="date" class="form-control date" placeholder="Check-in date">
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label for="date">Check-out:</label>
												<div class="form-field">
													<i class="icon icon-calendar2"></i>
													<input type="text" id="date" class="form-control date" placeholder="Check-out date">
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label for="guests">Guest</label>
												<div class="form-field">
													<i class="icon icon-arrow-down3"></i>
													<select name="people" id="people" class="form-control">
														<option value="#">1</option>
														<option value="#">2</option>
														<option value="#">3</option>
														<option value="#">4</option>
														<option value="#">5+</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-md-12">
											<input type="submit" name="submit" id="submit" value="BOOK" class="btn btn-primary btn-block">
										</div>
									</div>
								</form>
							</div>

									
							<script src="https://apps.elfsight.com/p/platform.js" defer></script>
							<div class="elfsight-app-b1bffb1e-e837-40dd-bac4-bd07f150d48c"></div>
							<div class="side animate-box">
								<div class="row">
									<div class="col-md-12">
										<h3 class="sidebar-heading">Facilities</h3>
										<ul>
											<li>

												<h4 class="place">Comfortable Transport System</h4>
											</li>
											<li>

												<h4 class="place">Best Hotel</h4>
											</li>
											<li>

												<h4 class="place">Entertainment Facilities</h4>
											</li>
											<li>

												<h4 class="place">Safety Guarantee</h4>
											</li>

										</ul>

									</div>
									<button id="myBtn" class="btn btn-primary btn-block" style="color:black">SHARE YOU REVIEW</button>
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

		</div>

		<div class="modal" id="myModal">

			<div class="feedback">
				<span class="close">&times;</span>
				<p>SHARE YOUR REVIEW</p>
				<div class="rating">
				
					<input type="radio" name="rating1" id="rating-5">
					<label for="rating-5"></label>
					<input type="radio" name="rating2" id="rating-4">
					<label for="rating-4"></label>
					<input type="radio" name="rating3" id="rating-3">
					<label for="rating-3"></label>
					<input type="radio" name="rating4" id="rating-2">
					<label for="rating-2"></label>
					<input type="radio" name="rating5" id="rating-1">
					<label for="rating-1"></label>
					
					<div class="emoji-wrapper">
						<div class="emoji">
							<svg class="rating-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
								<circle cx="256" cy="256" r="256" fill="#ffd93b" />
								<path d="M512 256c0 141.44-114.64 256-256 256-80.48 0-152.32-37.12-199.28-95.28 43.92 35.52 99.84 56.72 160.72 56.72 141.36 0 256-114.56 256-256 0-60.88-21.2-116.8-56.72-160.72C474.8 103.68 512 175.52 512 256z" fill="#f4c534" />
								<ellipse transform="scale(-1) rotate(31.21 715.433 -595.455)" cx="166.318" cy="199.829" rx="56.146" ry="56.13" fill="#fff" />
								<ellipse transform="rotate(-148.804 180.87 175.82)" cx="180.871" cy="175.822" rx="28.048" ry="28.08" fill="#3e4347" />
								<ellipse transform="rotate(-113.778 194.434 165.995)" cx="194.433" cy="165.993" rx="8.016" ry="5.296" fill="#5a5f63" />
								<ellipse transform="scale(-1) rotate(31.21 715.397 -1237.664)" cx="345.695" cy="199.819" rx="56.146" ry="56.13" fill="#fff" />
								<ellipse transform="rotate(-148.804 360.25 175.837)" cx="360.252" cy="175.84" rx="28.048" ry="28.08" fill="#3e4347" />
								<ellipse transform="scale(-1) rotate(66.227 254.508 -573.138)" cx="373.794" cy="165.987" rx="8.016" ry="5.296" fill="#5a5f63" />
								<path d="M370.56 344.4c0 7.696-6.224 13.92-13.92 13.92H155.36c-7.616 0-13.92-6.224-13.92-13.92s6.304-13.92 13.92-13.92h201.296c7.696.016 13.904 6.224 13.904 13.92z" fill="#3e4347" />
							</svg>
							<svg class="rating-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
								<circle cx="256" cy="256" r="256" fill="#ffd93b" />
								<path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534" />
								<path d="M328.4 428a92.8 92.8 0 0 0-145-.1 6.8 6.8 0 0 1-12-5.8 86.6 86.6 0 0 1 84.5-69 86.6 86.6 0 0 1 84.7 69.8c1.3 6.9-7.7 10.6-12.2 5.1z" fill="#3e4347" />
								<path d="M269.2 222.3c5.3 62.8 52 113.9 104.8 113.9 52.3 0 90.8-51.1 85.6-113.9-2-25-10.8-47.9-23.7-66.7-4.1-6.1-12.2-8-18.5-4.2a111.8 111.8 0 0 1-60.1 16.2c-22.8 0-42.1-5.6-57.8-14.8-6.8-4-15.4-1.5-18.9 5.4-9 18.2-13.2 40.3-11.4 64.1z" fill="#f4c534" />
								<path d="M357 189.5c25.8 0 47-7.1 63.7-18.7 10 14.6 17 32.1 18.7 51.6 4 49.6-26.1 89.7-67.5 89.7-41.6 0-78.4-40.1-82.5-89.7A95 95 0 0 1 298 174c16 9.7 35.6 15.5 59 15.5z" fill="#fff" />
								<path d="M396.2 246.1a38.5 38.5 0 0 1-38.7 38.6 38.5 38.5 0 0 1-38.6-38.6 38.6 38.6 0 1 1 77.3 0z" fill="#3e4347" />
								<path d="M380.4 241.1c-3.2 3.2-9.9 1.7-14.9-3.2-4.8-4.8-6.2-11.5-3-14.7 3.3-3.4 10-2 14.9 2.9 4.9 5 6.4 11.7 3 15z" fill="#fff" />
								<path d="M242.8 222.3c-5.3 62.8-52 113.9-104.8 113.9-52.3 0-90.8-51.1-85.6-113.9 2-25 10.8-47.9 23.7-66.7 4.1-6.1 12.2-8 18.5-4.2 16.2 10.1 36.2 16.2 60.1 16.2 22.8 0 42.1-5.6 57.8-14.8 6.8-4 15.4-1.5 18.9 5.4 9 18.2 13.2 40.3 11.4 64.1z" fill="#f4c534" />
								<path d="M155 189.5c-25.8 0-47-7.1-63.7-18.7-10 14.6-17 32.1-18.7 51.6-4 49.6 26.1 89.7 67.5 89.7 41.6 0 78.4-40.1 82.5-89.7A95 95 0 0 0 214 174c-16 9.7-35.6 15.5-59 15.5z" fill="#fff" />
								<path d="M115.8 246.1a38.5 38.5 0 0 0 38.7 38.6 38.5 38.5 0 0 0 38.6-38.6 38.6 38.6 0 1 0-77.3 0z" fill="#3e4347" />
								<path d="M131.6 241.1c3.2 3.2 9.9 1.7 14.9-3.2 4.8-4.8 6.2-11.5 3-14.7-3.3-3.4-10-2-14.9 2.9-4.9 5-6.4 11.7-3 15z" fill="#fff" />
							</svg>
							<svg class="rating-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
								<circle cx="256" cy="256" r="256" fill="#ffd93b" />
								<path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534" />
								<path d="M336.6 403.2c-6.5 8-16 10-25.5 5.2a117.6 117.6 0 0 0-110.2 0c-9.4 4.9-19 3.3-25.6-4.6-6.5-7.7-4.7-21.1 8.4-28 45.1-24 99.5-24 144.6 0 13 7 14.8 19.7 8.3 27.4z" fill="#3e4347" />
								<path d="M276.6 244.3a79.3 79.3 0 1 1 158.8 0 79.5 79.5 0 1 1-158.8 0z" fill="#fff" />
								<circle cx="340" cy="260.4" r="36.2" fill="#3e4347" />
								<g fill="#fff">
									<ellipse transform="rotate(-135 326.4 246.6)" cx="326.4" cy="246.6" rx="6.5" ry="10" />
									<path d="M231.9 244.3a79.3 79.3 0 1 0-158.8 0 79.5 79.5 0 1 0 158.8 0z" />
								</g>
								<circle cx="168.5" cy="260.4" r="36.2" fill="#3e4347" />
								<ellipse transform="rotate(-135 182.1 246.7)" cx="182.1" cy="246.7" rx="10" ry="6.5" fill="#fff" />
							</svg>
							<svg class="rating-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
								<circle cx="256" cy="256" r="256" fill="#ffd93b" />
								<path d="M407.7 352.8a163.9 163.9 0 0 1-303.5 0c-2.3-5.5 1.5-12 7.5-13.2a780.8 780.8 0 0 1 288.4 0c6 1.2 9.9 7.7 7.6 13.2z" fill="#3e4347" />
								<path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534" />
								<g fill="#fff">
									<path d="M115.3 339c18.2 29.6 75.1 32.8 143.1 32.8 67.1 0 124.2-3.2 143.2-31.6l-1.5-.6a780.6 780.6 0 0 0-284.8-.6z" />
									<ellipse cx="356.4" cy="205.3" rx="81.1" ry="81" />
								</g>
								<ellipse cx="356.4" cy="205.3" rx="44.2" ry="44.2" fill="#3e4347" />
								<g fill="#fff">
									<ellipse transform="scale(-1) rotate(45 454 -906)" cx="375.3" cy="188.1" rx="12" ry="8.1" />
									<ellipse cx="155.6" cy="205.3" rx="81.1" ry="81" />
								</g>
								<ellipse cx="155.6" cy="205.3" rx="44.2" ry="44.2" fill="#3e4347" />
								<ellipse transform="scale(-1) rotate(45 454 -421.3)" cx="174.5" cy="188" rx="12" ry="8.1" fill="#fff" />
							</svg>
							<svg class="rating-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
								<circle cx="256" cy="256" r="256" fill="#ffd93b" />
								<path d="M512 256A256 256 0 0 1 56.7 416.7a256 256 0 0 0 360-360c58.1 47 95.3 118.8 95.3 199.3z" fill="#f4c534" />
								<path d="M232.3 201.3c0 49.2-74.3 94.2-74.3 94.2s-74.4-45-74.4-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z" fill="#e24b4b" />
								<path d="M96.1 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2C80.2 229.8 95.6 175.2 96 173.3z" fill="#d03f3f" />
								<path d="M215.2 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z" fill="#fff" />
								<path d="M428.4 201.3c0 49.2-74.4 94.2-74.4 94.2s-74.3-45-74.3-94.2a38 38 0 0 1 74.4-11.1 38 38 0 0 1 74.3 11.1z" fill="#e24b4b" />
								<path d="M292.2 173.3a37.7 37.7 0 0 0-12.4 28c0 49.2 74.3 94.2 74.3 94.2-77.8-65.7-62.4-120.3-61.9-122.2z" fill="#d03f3f" />
								<path d="M411.3 200c-3.6 3-9.8 1-13.8-4.1-4.2-5.2-4.6-11.5-1.2-14.1 3.6-2.8 9.7-.7 13.9 4.4 4 5.2 4.6 11.4 1.1 13.8z" fill="#fff" />
								<path d="M381.7 374.1c-30.2 35.9-75.3 64.4-125.7 64.4s-95.4-28.5-125.8-64.2a17.6 17.6 0 0 1 16.5-28.7 627.7 627.7 0 0 0 218.7-.1c16.2-2.7 27 16.1 16.3 28.6z" fill="#3e4347" />
								<path d="M256 438.5c25.7 0 50-7.5 71.7-19.5-9-33.7-40.7-43.3-62.6-31.7-29.7 15.8-62.8-4.7-75.6 34.3 20.3 10.4 42.8 17 66.5 17z" fill="#e24b4b" />
							</svg>
							<svg class="rating-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
								<g fill="#ffd93b">
									<circle cx="256" cy="256" r="256" />
									<path d="M512 256A256 256 0 0 1 56.8 416.7a256 256 0 0 0 360-360c58 47 95.2 118.8 95.2 199.3z" />
								</g>
								<path d="M512 99.4v165.1c0 11-8.9 19.9-19.7 19.9h-187c-13 0-23.5-10.5-23.5-23.5v-21.3c0-12.9-8.9-24.8-21.6-26.7-16.2-2.5-30 10-30 25.5V261c0 13-10.5 23.5-23.5 23.5h-187A19.7 19.7 0 0 1 0 264.7V99.4c0-10.9 8.8-19.7 19.7-19.7h472.6c10.8 0 19.7 8.7 19.7 19.7z" fill="#e9eff4" />
								<path d="M204.6 138v88.2a23 23 0 0 1-23 23H58.2a23 23 0 0 1-23-23v-88.3a23 23 0 0 1 23-23h123.4a23 23 0 0 1 23 23z" fill="#45cbea" />
								<path d="M476.9 138v88.2a23 23 0 0 1-23 23H330.3a23 23 0 0 1-23-23v-88.3a23 23 0 0 1 23-23h123.4a23 23 0 0 1 23 23z" fill="#e84d88" />
								<g fill="#38c0dc">
									<path d="M95.2 114.9l-60 60v15.2l75.2-75.2zM123.3 114.9L35.1 203v23.2c0 1.8.3 3.7.7 5.4l116.8-116.7h-29.3z" />
								</g>
								<g fill="#d23f77">
									<path d="M373.3 114.9l-66 66V196l81.3-81.2zM401.5 114.9l-94.1 94v17.3c0 3.5.8 6.8 2.2 9.8l121.1-121.1h-29.2z" />
								</g>
								<path d="M329.5 395.2c0 44.7-33 81-73.4 81-40.7 0-73.5-36.3-73.5-81s32.8-81 73.5-81c40.5 0 73.4 36.3 73.4 81z" fill="#3e4347" />
								<path d="M256 476.2a70 70 0 0 0 53.3-25.5 34.6 34.6 0 0 0-58-25 34.4 34.4 0 0 0-47.8 26 69.9 69.9 0 0 0 52.6 24.5z" fill="#e24b4b" />
								<path d="M290.3 434.8c-1 3.4-5.8 5.2-11 3.9s-8.4-5.1-7.4-8.7c.8-3.3 5.7-5 10.7-3.8 5.1 1.4 8.5 5.3 7.7 8.6z" fill="#fff" opacity=".2" />
							</svg>
						</div>

					</div>
				</div>
				<form method="POST" action="#">
				
				<input type="submit" id = "btn1" class="btn" value="GO" name="go" value="Register" required />
				</form>
				
			</div>

		</div>
		<div class="popuptext" id="myPopup">A Simple Popup!</div>
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

		<! -- BACKEND -- !>
			<script src="js/tour-place.js"></script>

</body>

</html>