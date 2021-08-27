<?php
session_start();
$error = NULL;

if (isset($_POST['submit_signup'])) {
	//get form data
	$username = $_POST['username_signup'];
	$pass1 = $_POST['password1_signup'];
	$pass2 = $_POST['password2_signup'];
	$email = $_POST['email_signup'];
	$prefer = $_POST['prefer'];
	//echo '<script>alert("hello")</script>';

	if (strlen($username) < 5) {
		echo '<script>alert("Username must be atleast of 5 characters")</script>';
	} else if ($pass2 != $pass1) {
		echo '<script>alert("Your password do not match")</script>';
	} else {
		// Form is valid
		// Connect to the database
		$mysqli = new MySQLI('localhost', 'root', '', 'tms');

		//Sanitize form data
		$username = $mysqli->real_escape_string($username);
		$pass1 = $mysqli->real_escape_string($pass1);
		$pass2 = $mysqli->real_escape_string($pass2);
		$email = $mysqli->real_escape_string($email);
		$pass1 = md5($pass1);
	
		$con = mysqli_connect('localhost', 'root', '');
		mysqli_select_db($con, 'tms');
		$s = "select * from signinsignup where username = '$username'";
		$result = mysqli_query($con, $s);
		$num = mysqli_num_rows($result);

		$s1 = "select * from signinsignup where email = '$email'";
		$result1 = mysqli_query($con, $s1);
		$num1 = mysqli_num_rows($result1);

		if ($num == 1) {
			echo '<script>alert("username already taken")</script>';
		} else if ($num1 == 1) {
			echo '<script>alert("this email is already registered")</script>';
		} else {
			$insert = $mysqli->query("INSERT INTO signinsignup(username,password,email,prefer) 
			VALUES('$username','$pass1','$email','$prefer')");
			if ($insert) {
				
				echo '<script>alert("REGISTRATION COMPLETE");window.location="home.php"</script>';
			} else {
				echo '<script>alert("REGISTRATION ERROR")</script>';
			}
		}

		//Insert account into the database

	}
}
if (isset($_POST['submit_signin'])) {
	//get form data
	$username = $_POST['username_signin'];
	$pass = $_POST['password_signin'];

	//echo '<script>alert("sign in button pressed")</script>';
	$mysqli = new MySQLI('localhost', 'root', '', 'tms');

	$username = $mysqli->real_escape_string($username);
	$pass = $mysqli->real_escape_string($pass);
	$pass = md5($pass);
	
	$con = mysqli_connect('localhost','root','');
	mysqli_select_db($con,'tms');
	$s = "select * from signinsignup where username = '$username' and password = '$pass'";
	$result = mysqli_query($con,$s);
	$num = mysqli_num_rows($result);
	if($num==1)
	{
		

		setcookie("user", $username, time()+2*24*60*60);


		echo '<script>alert("SUCCESSFULLY LOGED IN");window.location="home.php"</script>';
	}
	else
	{
		echo '<script>alert("INCORRECT USERNAME OR PASSWORD")</script>';
	}
	
	
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="style.css" />
	<link rel="stylesheet" href="check.css" />
	<title>TRAVELICIOUS</title>
</head>

<body>

	<div class="container">
		<div class="forms-container">
			<div class="signin-signup">
				<form method="POST" action="#" class="sign-in-form">
				<h1 class="title" style = "color : #99bbff">TRAVELICIOUS</h1>
					<label class="title">Sign in</label>
					<div class="input-field">
						<i class="fas fa-user"></i>
						<input type="text" placeholder="Username" name="username_signin" required />
					</div>
					<div class="input-field">
						<i class="fas fa-lock"></i>
						<input type="password" placeholder="Password" name="password_signin" required />
					</div>
					<input type="submit" value="Login" class="btn" name="submit_signin" value="login" required />
					<p><a href="admin/index.php">Admin Login</a></p>
					
				</form>
				<form method="POST" action="#" class="sign-up-form">
				<h1 class="title" style = "color : #99bbff">TRAVELICIOUS</h1>
					<label class="title">Sign up</label>
					<div class="input-field">
						<i class="fas fa-user"></i>
						<input type="text" placeholder="Username" name="username_signup" required />
					</div>
					<div class="input-field">
						<i class="fas fa-envelope"></i>
						<input type="email" placeholder="Email" name="email_signup" required />
					</div>
					<div class="input-field">
						<i class="fas fa-lock"></i>
						<input type="password" placeholder="Password" name="password1_signup" required />
					</div>
					<div class="input-field">
						<i class="fas fa-lock"></i>
						<input type="password" placeholder="Repeat Password" name="password2_signup" required />
					</div>
					
					<div class="input-field" >
					<i class="fas fa-lock"></i>
  					<select name = "prefer" required>
    				<option value="0">Select Preference:</option>
   					 <option value="1">SOLO </option>
    				<option value="2">FAMILY</option>
  					  <option value="3">DAY</option>
						<option value="4">FOREIGN</option>
  					  
  						</select>
						</div>

					<input type="submit" class="btn" value="Sign up" name="submit_signup" value="Register" required />
					
				</form>
			</div>
		</div>

		<div class="panels-container">

			<div class="panel left-panel">
				<div class="content">
					<h3>New here ?</h3>
					<p>
						Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
						ex ratione. Aliquid!
					</p>
					<button class="btn transparent" id="sign-up-btn">
						Sign up
					</button>
				</div>
				<img src="img/log.svg" class="image" alt="" />
			</div>
			<div class="panel right-panel">
				<div class="content">
					<h3>One of us ?</h3>
					<p>
						Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
						laboriosam ad deleniti.
					</p>
					<button class="btn transparent" id="sign-in-btn">
						Sign in
					</button>
				</div>
				<img src="img/register.svg" class="image" alt="" />
			</div>
		</div>
	</div>

	<script src="app.js"></script>
	<?php
	echo $error;
	?>
</body>

</html>