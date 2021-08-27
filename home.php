<?php
session_start();


if (isset($_POST['submit'])) {
	//get form data
	$name = $_POST['name'];
	$address = $_POST['address'];
	$review = $_POST['review'];
	if(!empty($_POST['gender1'])) {
        $gender = $_POST['gender1'];
    }
	else
    $gender = "male";

    $mysqli = new MySQLI('localhost', 'root', '', 'tms');
	$insert = $mysqli->query("INSERT INTO websitereview(name, address, review,gender) 
			VALUES('$name','$address','$review','$gender')");
			if ($insert) {
				echo '<script>alert("Thank you for your valuable review");window.location="home.php"</script>';
			} else {
				echo '<script>alert("Review Error")</script>';
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

	
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="review2.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<script>(function(w, d) { w.CollectId = "606b42edcc6de004cacdb481"; var h = d.head || d.getElementsByTagName("head")[0]; var s = d.createElement("script"); s.setAttribute("type", "text/javascript"); s.async=true; s.setAttribute("src", "https://collectcdn.com/launcher.js"); h.appendChild(s); })(window, document);</script>
	</head>
	<body>
		
	

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
								<li class="active"><a href="home.php">Home</a></li>
								
								<li class="has-dropdown">
									<a href="tours.php">Tours</a>
									<ul class="dropdown">
										<li><a href="tours.html">Destination</a></li>
										
										<li><a href="hotels.html">Hotels</a></li>
										<li><a href="services.html">Booking</a></li>
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
			   	<li style="background-image: url(images/img_bg_1.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Most Thrilling Place of Bangladesh</h2>
				   					<h1> Nafakhum Tour</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Relaxing Luxurious Tour</h2>
				   					<h1>From Cox's Bazar to Saint Martin Island</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_5.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluids">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Explore The Beauty Of Bangladesh</h2>
				   					<h1>Sajek Valley</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/img_bg_4.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Experience the Best Trip Ever</h2>
				   					<h1>Sunamganj Niladri Lake</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>	   	
			  	</ul>
		  	</div>
		</aside>

		

		<div id="colorlib-services">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-3 animate-box text-center aside-stretch">
						<div class="services">
							<span class="icon">
								<i class="flaticon-around"></i>
							</span>
							<h3>Amazing Travel</h3>
							<p>Explore the beautiful Bangladesh with us within your budget. Your comfort is our first priority. </p>
						</div>
					</div>
					<div class="col-md-3 animate-box text-center">
						<div class="services">
							<span class="icon">
								<i class="flaticon-boat"></i>
							</span>
							<h3>Our Cruises</h3>
							<p>Travelicious reserves whole cruise for Saint Martin tour. So it is totally comfortable and safe for you!</p>
						</div>
					</div>
					<div class="col-md-3 animate-box text-center">
						<div class="services">
							<span class="icon">
								<i class="flaticon-car"></i>
							</span>
							<h3>Book Your Trip</h3>
							<p>Your tour plan and managament is our work. All you need to do is enjoy and relax. </p>
						</div>
					</div>
					<div class="col-md-3 animate-box text-center aside-strech">
						<div class="services">
							<span class="icon">
								<i class="flaticon-postcard"></i>
							</span>
							<h3>Share Review</h3>
							<p>There are reviews available from people who loved our services. If you enjoyed our service too , please share your precious feedback with us. </p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-tour colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>MOST POPULAR TOUR PLANS</h2>
						<p>We love to suggest you the best places to visit. From mountains to sea beach, day tour to long tour or solo trip to family trip Travelicious is your one step solution.</p>
					</div>
				</div>
			</div>
			<div class="tour-wrap">
            <?php

								
								$conn = new mysqli("localhost", "root", "", "tms");
								if ($conn->connect_error) {
									die("Connection failed: " . $conn->connect_error);
								}
								$sql = "select * from tbltourpackages order by reviewsCount DESC";
								$x = 0;
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
									while ($row=$result->fetch_assoc()) {
										$x++;
										if($x == 9)
										break;
								?>
				<a href="tour-place.php?pkgid=<?php echo $row["PackageId"] ?>" class="tour-entry animate-box">
					<div class="tour-img" style="background-image: url(admin/pacakgeimages/<?php echo $row["PackageImage"] ?>);">
					</div>
					<span class="desc">
						<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span><?php echo $row["reviewsCount"] ?> Reviews</p>
						<h2><?php echo $row["PackageName"] ?></h2>
						<span class="city"><?php echo $row["PackageLocation"] ?></span>
						<span class="price"><?php echo $row["PackagePrice"] ?></span>
					</span>
				</a>
				<?php
									}
								}
								?>
				
			</div>
		</div>


		<div id="colorlib-blog">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Recent Blog</h2>
						<p>We love to tell our successful Tour gossips to you, behind the mountains, far from the busy life, some moments worth to share.</p>
					</div>
				</div>
				<div class="blog-flex">
					<div class="f-entry-img" style="background-image: url(images/blog-3.jpg);">
					</div>
					<div class="blog-entry aside-stretch-right">
						<div class="row">
							<div class="col-md-12 animate-box">
								<a href="blog.html" class="blog-post">
									<span class="img" style="background-image: url(images/blog-1.jpg);"></span>
									<div class="desc">
										<span class="date">Feb 22, 2018</span>
										<h3>THE BEST PLACE TO RELAX IN BANGLADESH</h3>
										<span class="cat">Activities</span>
									</div>
								</a>
							</div>
							<div class="col-md-12 animate-box">
								<a href="blog.html" class="blog-post">
									<span class="img" style="background-image: url(images/blog-2.jpg);"></span>
									<div class="desc">
										<span class="date">Feb 22, 2018</span>
										<h3>YOU SHOULD VISIT NAFAKHUM ATLEAST ONCE IN YOUR LIFE</h3>
										<span class="cat">Activities</span>
									</div>
								</a>
							</div>
							<div class="col-md-12 animate-box">
								<a href="blog.html" class="blog-post">
									<span class="img" style="background-image: url(images/blog-4.jpg);"></span>
									<div class="desc">
										<span class="date">Feb 22, 2018</span>
										<h3>FOR THE FIRST TIME I HAVE SEEN ROYAL BENGAL TIGER SO CLOSELY</h3>
										<span class="cat">Activities</span>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-intro" class="intro-img" style="background-image: url(images/cover-img-1.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 animate-box">
						<div class="intro-desc">
							<div class="text-salebox">
								<div class="text-lefts">
									<div class="sale-box">
										<div class="sale-box-top">
											<h2 class="number">45</h2>
											<span class="sup-1">%</span>
											<span class="sup-2">Off</span>
										</div>
										<h2 class="text-sale">Sale</h2>
									</div>
								</div>
								<div class="text-rights">
									<h3 class="title">Just hurry up limited offer!</h3>
									<p>VISIT THE BLUE OCEAN NOW! LIMITED SEATS AVAILABLE ONLY</p>
									<p><a href="#" class="btn btn-primary">Book Now</a> <a href="#" class="btn btn-primary btn-outline">Read more</a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6 animate-box">
						<div class="video-wrap">
							<div class="video colorlib-video" style="background-image: url(images/img_bg_2.jpg);">
								<a href="https://vimeo.com/channels/staffpicks/93951774" class="popup-vimeo"><i class="icon-video"></i></a>
								<div class="video-overlay"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-hotel">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>Recommended Packages according to your preference</h2>
						<p>We love to tell our successful far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 animate-box">
						<div class="owl-carousel">
						<?php
						
						$p = $_COOKIE["user"];
								
						$conn = new mysqli("localhost", "root", "", "tms");
						if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
							}
						$sql = "select prefer from signinsignup where username = '$p' ";
							$x = 0;
						$result = $conn->query($sql);
						while ($row=$result->fetch_assoc()) {
						$x = $row["prefer"];
						}
						$sql = "select * from tbltourpackages where PackageType = '$x' ";
						$result = $conn->query($sql);
							if ($result->num_rows > 0) {
							while ($row=$result->fetch_assoc()) {
							$x++;
							
						
						
						
								?>
							<div class="item">
								<div class="hotel-entry">

									<a href="tour-place.php?pkgid=<?php echo $row["PackageId"] ?>"  class="hotel-img" style="background-image: url(admin/pacakgeimages/<?php echo $row["PackageImage"] ?>">
										<p class="price"><span>BDT <?php echo $row["PackagePrice"] ?></span><small> /night</small></p>
									</a>
									<div class="desc">
										<p class="star"><span><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i><i class="icon-star-full"></i></span><?php $row["reviewsCount"] ?> Reviews</p>
										<h3>				
										<a href="tour-place.php?pkgid=<?php echo $row["PackageId"] ?>"></a> <?php echo $row["PackageName"] ?> </h3>
										<span class="place"><?php echo $row["PackageLocation"] ?></span>
										<p><? echo $row["PackageDetails"] ?> </p>
									</div>
								</div>
							</div>
							<?php } } ?>
							
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="colorlib-testimony" class="colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2 >Our Satisfied Guests says</h2>
						<p>We are honoured to have all the loves from our satisfied valuable guests. We love to share our happiness with you too. </p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8 col-md-offset-2 animate-box">						
						<div class="owl-carousel2">
							
								<?php
									


									$conn = new mysqli("localhost", "root", "", "tms");
									//if ($conn->connect_error) {
									//die("Connection failed: " . $conn->connect_error);
									//}
									$sql = "select * from websitereview";
									$result = $conn->query($sql);


									
										while ($row = $result->fetch_assoc()) {
											
		
											?>
								<div class="item">
								<div class="testimony text-center">
									<?php
										if($row["gender"] == "female")	{
									?>
									<span class="img-user" style="background-image: url(images/person2.jpg);"></span>
									<?php } else { ?> 
									<span class="img-user" style="background-image: url(images/person1.jpg);"></span>
									<?php } ?>
									<span class="user" > <?php echo $row["name"] ?></span>
									
									<small > <?php echo $row["address"] ?> </small>
									<blockquote>
										<p> <?php echo $row["review"] ?> </p>
									</blockquote>
									</div>
									</div>
									<?php } ?>
								
							
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>

		<div id="colorlib-subscribe" style="background-image: url(images/img_bg_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center colorlib-heading animate-box">
						<h2>SHARE YOUR REVIEW ABOUT OUR SERVICE</h2>
						<p>Please help us to grow by sharing your valuable review </p>
						
									
										<button id = "myBtn" type="submit" class="btn btn-primary"> SHARE YOUR REVIEW</button>
									
								
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
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  <i class="icon-heart2" aria-hidden="true"></i> by <a href="#" target="_blank">Travelicious</a>
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

	<div class = "modal" id = "myModal">

    <article class="card">
	<span class="close">&times; </span>
	<p class = "card_gender"> SHARE YOUR EXPERIENCE WITH TRAVELICIOUS </p>
    
        <div class="container1">
            <figure class="avatar">
            
                <div class="avatar_hair"></div>
                <div class="avatar_head">
                    <div class="avatar_curras"></div>
                    <div class="avatar_face">
                        <div class="avatar_eyes">
                        <div class="avatar_eye">   
                        <div class="avatar_pupil avatar_pupil--left"></div>  
                         </div>   
                         <div class="avatar_eye">   
                        <div class="avatar_pupil avatar_pupil--right"></div>  
                         </div>        
                          </div> 
                        
                        <div class="avatar_mouth">
                        </div>
                    </div>
                    <div class="avatar_curras"></div>
                    
                </div>
                <div class="avatar_body"></div>
            </figure>
        </div>
		
	
		
		
        <form method="POST" action="#">
        <div class="card_group">
            <label class="card_label" for="name" > NAME </label>
            <input class="card_input" name = "name" id="name" required></input>
            <i title="ok!" class="card_check"></i>
        </div>
        <div class="card_group">
            <label class="card_label" for="address"> ADDRESS </label>
            <input class="card_input" name = "address" id="address" required></input>
            <i title="ok!" class="card_check"></i>
        </div>
        <div class = "card_group">
        <div class="card_gender">
            <input hidden type="radio" id="female" value = "female" name="gender1" >
            <label class="card_gender-label" tabindex=0 for="female">FEMALE</label>
        </div>

        <div class="card_gender">
            <input hidden type="radio" id="male" value = "male" name="gender2" >
            <label class="card_gender-label" tabindex=0 for="male">MALE</label>
        </div>
         </div>
    <div class="card_group">
        <label class="card_label" >REVIEW</label>
        <input class="card_input" id="review" name="review" required></input>
        <i title="ok!" class="card_check"></i>
    </div>
	<div class = "card_group">
        <div class="card_gender">
            <input hidden type="submit" class="btn" value="SUBMIT" name="submit" value="Review" required />
				
        </div>
        </div>


</form> 
</article>
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
	<!-- BACKEND REVIEW -->
	include "reviewShow.php"

	<!-- SITE REVIEW -->
	<script src="js/review2.js" type ="text/javascript"></script>
	
	</body>

</html>

