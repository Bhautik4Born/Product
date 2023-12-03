<?php
include "include/config.php";

$username_err = $email_err = $password_err = "";
$username = $email = $password = $mobile_number = $domain = "";

function generateUniqueId() {
    // Generate a random unique ID (You can use any method you prefer)
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $uniqueId = '';
    for ($i = 0; $i < 10; $i++) {
        $uniqueId .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $uniqueId;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = trim($_POST["username"]);
  $email = trim($_POST["email"]);
  $password = trim($_POST["password"]);
  $mobile_number = trim($_POST["mobile_number"]);
  $domain = trim($_POST["domain"]);
  $profile = './images/add-product.svg';
  $current_date = date('d-m-Y');
  $two_days_later = date('d-m-Y', strtotime('+15 days', strtotime($current_date)));

  $uniqueId = generateUniqueId();
      
  if (empty($username)) {
    $username_err = "Please enter a username.";
  } elseif (!ctype_alnum(str_replace(array("@", "-", "_"), "", $username))) {
    $username_err = "Username can only contain letters, numbers and symbols like '@', '_', or '-'. Not used Blank Space";
  } else {
    $sql = "SELECT id FROM users WHERE username = ?";

    if ($stmt = mysqli_prepare($con, $sql)) {
      mysqli_stmt_bind_param($stmt, "s", $param_username);

      $param_username = $username;

      if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) == 1) {
          $username_err = "This username is already registered.";
        }
      } else {
        echo "<script>alert('Oops! Something went wrong. Please try again later.');</script>";
      }

      mysqli_stmt_close($stmt);
    }
  }

  if (empty($email)) {
    $email_err = "Please enter an email address";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $email_err = "Please enter a valid email address.";
  } else {
    $sql = "SELECT id FROM users WHERE email = ?";

    if ($stmt = mysqli_prepare($con, $sql)) {
      mysqli_stmt_bind_param($stmt, "s", $param_email);

      $param_email = $email;

      if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) == 1) {
          $email_err = "This email is already registered.";
        }
      } else {
        echo "<script>alert('Oops! Something went wrong. Please try again later.');</script>";
      }

      mysqli_stmt_close($stmt);
    }
  }

  if (empty($password)) {
    $password_err = "Please enter a password.";
  } elseif (strlen($password) < 8) {
    $password_err = "Password must contain at least 8 or more characters.";
  }

  if (empty($username_err) && empty($email_err) && empty($password_err)) {
    $sql = "INSERT INTO users(username, email, password, mobile_number,domain, date, license_key,profile_image) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    if ($stmt = mysqli_prepare($con, $sql)) {
      mysqli_stmt_bind_param($stmt, "ssssssss", $param_username, $param_email, $param_password, $param_mobile, $param_domain, $two_days_later,$uniqueId,$profile);

      $param_username = $username;
      $param_email = $email;
      $param_password = $password; // Hash the password
      $param_mobile = $mobile_number;
      $param_domain = $domain;
    //   $param_profile = $profile;

      if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Registration completed successfully. Login to continue.');</script>";
        echo "<script>window.location.href='./login.php';</script>";
        exit;
      } else {
        echo "<script>alert('Oops! Something went wrong. Please try again later.');</script>";
      }

      mysqli_stmt_close($stmt);
    }
  }

  mysqli_close($con);
}
?>


<!DOCTYPE html>
<html lang="en">


<head>

	<meta charset="utf-8" />
	<title>Register - 4Born</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- Favicon -->
	<link rel="shortcut icon" href="images/favicon.png">

	<!-- Template CSS Files -->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">
	<link rel="stylesheet" href="css/select2.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/skins/orange.css">

	<!-- Live Style Switcher - demo only -->
	<link rel="alternate stylesheet" type="text/css" title="orange" href="css/skins/orange.css" />
	<link rel="alternate stylesheet" type="text/css" title="green" href="css/skins/green.css" />
	<link rel="alternate stylesheet" type="text/css" title="blue" href="css/skins/blue.css" />
	<link rel="stylesheet" type="text/css" href="css/styleswitcher.css" />
	
	<!--bootstrap-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


	<!-- Template JS Files -->
	<script src="js/modernizr.js"></script>

</head>

<body class="auth-page">
	<div id="switcher" class="">
		<div class="content-switcher">
			<h4>STYLE SWITCHER</h4>
			<ul>
				<li>
					<a id="orange-css" href="#" title="orange" class="color"><img
							src="images/styleswitcher/colors/orange.png" alt="" width="30" height="30" /></a>
				</li>
				<li>
					<a id="green-css" href="#" title="green" class="color"><img
							src="images/styleswitcher/colors/green.png" alt="" width="30" height="30" /></a>
				</li>
				<li>
					<a id="blue-css" href="#" title="blue" class="color"><img src="images/styleswitcher/colors/blue.png"
							alt="" width="30" height="30" /></a>
				</li>
			</ul>

			<p>BODY SKIN</p>

			<label><input class="dark_switch" type="radio" name="color_style" id="is_dark" value="dark"
					checked="checked" /> Dark</label>
			<label><input class="dark_switch" type="radio" name="color_style" id="is_light" value="light" />
				Light</label>

			<hr />

			<p>LAYOUT STYLE</p>
			<label><input class="boxed_switch" type="radio" name="layout_style" id="is_wide" value="wide"
					checked="checked" /> Wide</label>
			<label><input class="boxed_switch" type="radio" name="layout_style" id="is_boxed" value="boxed" />
				Boxed</label>

			<hr />

			<a href="#" class="custom-button purchase">Purchase</a>
			<div id="hideSwitcher">&times;</div>

		</div>
	</div>
	<div class="wrapper">
		<div class="container">
		    <header class="bg-transparent">
                <div class="container">
                    <div class="row">
                        <!-- Logo Starts -->
                        <div class="main-logo col-xs-12 col-md-3 col-md-2 col-lg-2">
                            <a href="index.php">
    							<!--<img id="logo" class="img-responsive" src="images/logo-dark.png" alt="logo">-->
    							 <p id="about-us" class="img-responsive" style="color:#fd961a;">TradeCrazyAPI</p>
    						</a>
                        </div>
                        <!-- Logo Ends -->
                    </div>
                </div>
            </header>
			<div class="row align-items-center">
			    <div class="col-md-6 col-12 mb-3 order-2 order-md-1">
			        <div class="login-img">
			            <img src="./images/register-img.svg" class="img-fluid">
			        </div>
			    </div>
			    <div class="col-md-6 col-12 mb-3 order-1 order-md-2">
				<div class="form-container">
					<div>
						<div class="row text-center">
							<h2 class="title-head m-0">get <span>started</span></h2>
							<p class="info-form">Open account for free and start trading Stock Market now!</p>
						</div>
						<?php
                            if (!empty($message)) {
                              echo "<div class='alert alert-danger'>" . $message . "</div>";
                            }
                            ?>
						<form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" novalidate>
							<div class="form-group">
							  <label for="username" class="form-label fs-4" style="color:#fd961a;">Username</label>
              <input type="text" class="form-control fs-4" name="username" id="username" value="<?= $username; ?>"  placeholder="Enter Your Name" > 
              <small class="text-danger fs-5"><?= $username_err; ?></small>
           
							</div>
							<div class="form-group">
								<label for="email" class="form-label fs-4" style="color:#fd961a;">Email Address</label>
                              <input type="email" class="form-control fs-4" name="email" id="email" value="<?= $email; ?>"  placeholder="Enter Your Email" >
                              <small class="text-danger fs-5"><?= $email_err; ?></small>
                            </div>
							<div class="form-group">
							    <label for="password" class="form-label fs-4" style="color:#fd961a;">Mobile Number</label>
             
								<input class="form-control fs-4" name="mobile_number" id="mobile_number" placeholder="Enter Your Number" type="number"
									 value="<?= $mobile_number; ?>" required>
									<small class="text-danger fs-5"><?= $email_err; ?></small>
							</div>
							<div class="form-group">
							    <label for="password" class="form-label fs-4" style="color:#fd961a;">Your Domain</label>
             
								<input class="form-control fs-4" name="domain" id="domain" placeholder="Enter Your domain" type="text"
									 value="<?= $domain; ?>" required>
									<small class="text-danger fs-5"><?= $email_err; ?></small>
							</div>
							<div class="form-group">
							 <label for="password" class="form-label fs-4" style="color:#fd961a;">Password</label>
              <input type="password" class="form-control fs-4" name="password" id="password" value="<?= $password; ?>"  placeholder="Enter Your Password" >
              <small class="text-danger fs-5"><?= $password_err; ?></small>
            	</div>
							<div class="form-group">
								<button class="btn btn-warning form-control fs-3 my-3" type="submit" name="submit">Create Account</button>
								<p class="text-center">already have an account ? <a href="login.php" style="color:#fd961a;">Login</a>
							</div>
						</form>
					</div>
				</div>
				<p class="text-center copyright-text"><a href="4orn.info" style="color:#fd961a;">© Copyright 4Born Solution. All Rights
						Reserved</a></p>
			    </div>
			</div>
			<!--<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">-->
			<!--	<a class="visible-xs" href="index.php">-->
			<!--		<img id="logo" class="img-responsive mobile-logo" src="images/logo-dark.png" alt="logo">-->
			<!--	</a>-->
			<!--</div>-->
		</div>
		<script src="js/jquery-2.2.4.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/select2.min.js"></script>
		<script src="js/jquery.magnific-popup.min.js"></script>
		<script src="js/custom.js"></script>

		<script src="js/styleswitcher.js"></script>

	</div>
</body>


</html>