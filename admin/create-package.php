<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
	header('location:index.php');
} else {
	if (isset($_POST['submit'])) {
		$pname = $_POST['packagename'];
		$ptype = $_POST['packagetype'];
		$pdaycount = $_POST['daycount'];
		$plocation = $_POST['packagelocation'];
		$pprice = $_POST['packageprice'];
		$pfeatures = $_POST['packagefeatures'];
		$pdetails = $_POST['packagedetails'];
		$pimage = $_FILES["packageimage"]["name"];

		$pday1heading = $_POST['day1heading'];
		$pday1details = $_POST['day1details'];
		$pday1image = $_FILES["day1image"]["name"];

		$pday2heading = $_POST['day2heading'];
		$pday2details = $_POST['day2details'];
		$pday2image = $_FILES["day2image"]["name"];

		$pday3heading = $_POST['day3heading'];
		$pday3details = $_POST['day3details'];
		$pday3image = $_FILES["day3image"]["name"];

		move_uploaded_file($_FILES["day1image"]["tmp_name"], "day1images/" . $_FILES["day1image"]["name"]);
		move_uploaded_file($_FILES["day2image"]["tmp_name"], "day2images/" . $_FILES["day2image"]["name"]);
		move_uploaded_file($_FILES["day3image"]["tmp_name"], "day3images/" . $_FILES["day3image"]["name"]);

		move_uploaded_file($_FILES["packageimage"]["tmp_name"], "pacakgeimages/" . $_FILES["packageimage"]["name"]);


		/*$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "tms";

		$conn = mysqli_connect($servername, $username, $password, $dbname);
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		$sql = "INSERT INTO MyGuests (PackageName, PackageType, PackageLocation, PackagePrice,PackageFetures, PackageDetails, PackageImage, day1image, day1heading, day1details, day2image, day2heading, day2details, day3image, day3heading, day3details, daycount)
				VALUES ('$pname', '$ptype', '$plocation','$pprice','$pfeatures','$pdetails','$pimage','$pday1image','$pday1heading','$pday1details','$pday2image','$pday2heading','$pday2details','$pday3image','$pday3heading','$pday3details','$pdaycount')";

		if (mysqli_query($conn, $sql)) {
			$msg = "Package Created Successfully";
		} else {
			$error = "Something went wrong. Please try again";
		}
		*/

		$sql = "INSERT INTO TblTourPackages(PackageName,PackageType,PackageLocation,PackagePrice,PackageFetures,PackageDetails,PackageImage,day1image, day1heading, day1details, day2image, day2heading, day2details, day3image, day3heading, day3details,daycount) 
		VALUES(:pname,:ptype,:plocation,:pprice,:pfeatures,:pdetails,:pimage,:pday1image,:pday1heading,:pday1details,:pday2image,:pday2heading,:pday2details,:pday3image,:pday3heading,:pday3details,:pdaycount)";
		$query = $dbh->prepare($sql);
		$query->bindParam(':pname', $pname, PDO::PARAM_STR);
		$query->bindParam(':ptype', $ptype, PDO::PARAM_STR);
		$query->bindParam(':plocation', $plocation, PDO::PARAM_STR);
		$query->bindParam(':pprice', $pprice, PDO::PARAM_STR);
		$query->bindParam(':pfeatures', $pfeatures, PDO::PARAM_STR);
		$query->bindParam(':pdetails', $pdetails, PDO::PARAM_STR);
		$query->bindParam(':pimage', $pimage, PDO::PARAM_STR);

		$query->bindParam(':pday1image', $pday1image, PDO::PARAM_STR);
		$query->bindParam(':pday2image', $pday2image, PDO::PARAM_STR);
		$query->bindParam(':pday3image', $pday3image, PDO::PARAM_STR);
		$query->bindParam(':pday1heading', $pday1heading, PDO::PARAM_STR);
		$query->bindParam(':pday2heading', $pday2heading, PDO::PARAM_STR);
		$query->bindParam(':pday3heading', $pday3heading, PDO::PARAM_STR);
		$query->bindParam(':pday1details', $pday1details, PDO::PARAM_STR);
		$query->bindParam(':pday2details', $pday2details, PDO::PARAM_STR);
		$query->bindParam(':pday3details', $pday3details, PDO::PARAM_STR);
		$query->bindParam(':pdaycount', $pdaycount, PDO::PARAM_STR);

		$query->execute();
		$lastInsertId = $dbh->lastInsertId();
		if ($lastInsertId) {
			$msg = "Package Created Successfully";
		} else {
			$error = "Something went wrong. Please try again";
		}
	}

?>
	<!DOCTYPE HTML>
	<html>

	<head>
		<title>TRAVELICIOUS | Admin Package Creation</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
		<script type="application/x-javascript">
			addEventListener("load", function() {
				setTimeout(hideURLbar, 0);
			}, false);

			function hideURLbar() {
				window.scrollTo(0, 1);
			}
		</script>
		<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
		<link href="css/style.css" rel='stylesheet' type='text/css' />
		<link rel="stylesheet" href="css/morris.css" type="text/css" />
		<link href="css/font-awesome.css" rel="stylesheet">
		<script src="js/jquery-2.1.4.min.js"></script>
		<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css' />
		<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
		<style>
			.errorWrap {
				padding: 10px;
				margin: 0 0 20px 0;
				background: #fff;
				border-left: 4px solid #dd3d36;
				-webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
				box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
			}

			.succWrap {
				padding: 10px;
				margin: 0 0 20px 0;
				background: #fff;
				border-left: 4px solid #5cb85c;
				-webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
				box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
			}
		</style>

	</head>

	<body>
		<div class="page-container">
			<!--/content-inner-->
			<div class="left-content">
				<div class="mother-grid-inner">
					<!--header start here-->
					<?php include('includes/header.php'); ?>

					<div class="clearfix"> </div>
				</div>
				<!--heder end here-->
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="index.html">Home</a><i class="fa fa-angle-right"></i>Update Package </li>
				</ol>
				<!--grid-->
				<div class="grid-form">

					<!---->
					<div class="grid-form1">
						<h3>Create Package</h3>
						<?php if ($error) { ?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } else if ($msg) { ?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php } ?>
						<div class="tab-content">
							<div class="tab-pane active" id="horizontal-form">
								<form class="form-horizontal" name="package" method="post" enctype="multipart/form-data">
									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">Package Name</label>
										<div class="col-sm-8">
											<input type="text" class="form-control1" name="packagename" id="packagename" placeholder="Create Package" required>
										</div>
									</div>
									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">Package Type</label>
										<div class="col-sm-8">
											<input type="text" class="form-control1" name="packagetype" id="packagetype" placeholder=" Package Type eg- Family  / Solo / Day / Foreign" required>
										</div>
									</div>
									<!-- <label for="cars">Choose a car:</label>
									<select name="cars" id="cars">
										<option value="volvo">Volvo</option>
										<option value="saab">Saab</option>
										<option value="opel">Opel</option>
										<option value="audi">Audi</option>
									</select> -->

									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">How Many Days</label>
										<div class="col-sm-8">
											<input type="text" class="form-control1" name="daycount" id="daycount" placeholder=" How Many Days In the Package  eg- 1 / 2 / 3">

										</div>
									</div>

									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">Package Location</label>
										<div class="col-sm-8">
											<input type="text" class="form-control1" name="packagelocation" id="packagelocation" placeholder=" Package Location" required>
										</div>
									</div>

									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">Package Price in USD</label>
										<div class="col-sm-8">
											<input type="text" class="form-control1" name="packageprice" id="packageprice" placeholder=" Package Price is BDT" required>
										</div>
									</div>

									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">Package Features</label>
										<div class="col-sm-8">
											<input type="text" class="form-control1" name="packagefeatures" id="packagefeatures" placeholder="Package Features Eg-free Pickup-drop facility" required>
										</div>
									</div>


									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">Package Details</label>
										<div class="col-sm-8">
											<textarea class="form-control" rows="5" cols="50" name="packagedetails" id="packagedetails" placeholder="Package Details" required></textarea>
										</div>
									</div>
									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">Package Image</label>
										<div class="col-sm-8">
											<input type="file" name="packageimage" id="packageimage" required>
										</div>
									</div>

									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">Day 1 Heading</label>
										<div class="col-sm-8">
											<input type="text" class="form-control1" name="day1heading" id="day1heading" placeholder="Day 1 Heading">
										</div>
									</div>
									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">Day 1 Details</label>
										<div class="col-sm-8">
											<textarea class="form-control" rows="5" cols="50" name="day1details" id="day1details" placeholder="Day 1 Details"></textarea>
										</div>
									</div>
									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">Day 1 Image</label>
										<div class="col-sm-8">
											<input type="file" name="day1image" id="day1image">
										</div>
									</div>

									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">Day 2 Heading</label>
										<div class="col-sm-8">
											<input type="text" class="form-control1" name="day2heading" id="day2heading" placeholder="Day 2 Heading">
										</div>
									</div>
									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">Day 2 Details</label>
										<div class="col-sm-8">
											<textarea class="form-control" rows="5" cols="50" name="day2details" id="day2details" placeholder="Day 2 Details"></textarea>
										</div>
									</div>
									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">Day 2 Image</label>
										<div class="col-sm-8">
											<input type="file" name="day2image" id="day2image">
										</div>
									</div>
									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">Day 3 Heading</label>
										<div class="col-sm-8">
											<input type="text" class="form-control1" name="day3heading" id="day3heading" placeholder="Day 3 Heading">
										</div>
									</div>
									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">Day 3 Details</label>
										<div class="col-sm-8">
											<textarea class="form-control" rows="5" cols="50" name="day3details" id="day3details" placeholder="Day 3 Details"></textarea>
										</div>
									</div>
									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">Day 3 Image</label>
										<div class="col-sm-8">
											<input type="file" name="day3image" id="day3image">
										</div>
									</div>

									<div class="row">
										<div class="col-sm-8 col-sm-offset-2">
											<button type="submit" name="submit" class="btn-primary btn">Create</button>

											<button type="reset" class="btn-inverse btn">Reset</button>
										</div>
									</div>





								</form>
							</div>






							<div class="panel-footer">

							</div>
							</form>
						</div>
					</div>
					<!--//grid-->

					<!-- script-for sticky-nav -->
					<script>
						$(document).ready(function() {
							var navoffeset = $(".header-main").offset().top;
							$(window).scroll(function() {
								var scrollpos = $(window).scrollTop();
								if (scrollpos >= navoffeset) {
									$(".header-main").addClass("fixed");
								} else {
									$(".header-main").removeClass("fixed");
								}
							});

						});
					</script>
					<!-- /script-for sticky-nav -->
					<!--inner block start here-->
					<div class="inner-block">

					</div>
					<!--inner block end here-->
					<!--copy rights start here-->
					<?php include('includes/footer.php'); ?>
					<!--COPY rights end here-->
				</div>
			</div>
			<!--//content-inner-->
			<!--/sidebar-menu-->
			<?php include('includes/sidebarmenu.php'); ?>
			<div class="clearfix"></div>
		</div>
		<script>
			var toggle = true;

			$(".sidebar-icon").click(function() {
				if (toggle) {
					$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
					$("#menu span").css({
						"position": "absolute"
					});
				} else {
					$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
					setTimeout(function() {
						$("#menu span").css({
							"position": "relative"
						});
					}, 400);
				}

				toggle = !toggle;
			});
		</script>
		<!--js -->
		<script src="js/jquery.nicescroll.js"></script>
		<script src="js/scripts.js"></script>
		<!-- Bootstrap Core JavaScript -->
		<script src="js/bootstrap.min.js"></script>
		<!-- /Bootstrap Core JavaScript -->

	</body>

	</html>
<?php } ?>