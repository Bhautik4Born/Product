<?php
session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == TRUE) {
  echo "<script>" . "window.location.href='./'" . "</script>";
  exit;
}

include "include/config.php";

$user_login_err = $user_password_err = $login_err = "";
$user_login = $user_password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty(trim($_POST["user_login"]))) {
    $user_login_err = "Please enter your username or an email id.";
  } else {
    $user_login = trim($_POST["user_login"]);
  }

  if (empty(trim($_POST["user_password"]))) {
    $user_password_err = "Please enter your password.";
  } else {
    $user_password = trim($_POST["user_password"]);
  }

  if (empty($user_login_err) && empty($user_password_err)) {
    $sql = "SELECT id, username, password FROM users WHERE username = ? OR email = ?";

    if ($stmt = mysqli_prepare($con, $sql)) {
      mysqli_stmt_bind_param($stmt, "ss", $param_user_login, $param_user_login);

      $param_user_login = $user_login;
      if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) == 1) {
          mysqli_stmt_bind_result($stmt, $id, $username, $plain_password);

          if (mysqli_stmt_fetch($stmt)) {
            if ($user_password == $plain_password) {

              $_SESSION["id"] = $id;
              $_SESSION["username"] = $username;
              $_SESSION["loggedin"] = TRUE;

              echo "<script>" . "window.location.href='./'" . "</script>";
              exit;
            } else {
              $login_err = "The email or password you entered is incorrect.";
            }
          }
        } else {
          $login_err = "Invalid username or password.";
        }
      } else {
        echo "<script>" . "alert('Oops! Something went wrong. Please try again later.');" . "</script>";
        echo "<script>" . "window.location.href='./login.php'" . "</script>";
        exit;
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
	<title>Login - 4Born</title>
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
			            <img src="./images/login-img.svg" class="img-fluid">
			        </div>
			    </div>
			    <div class="col-md-6 col-12 mb-3 order-1 order-md-2">
				<div class="form-container">
					<div>
						<div class="row text-center">
							<h2 class="title-head m-0">member <span>login</span></h2>
							<p class="info-form">Open account for free and start trading Stock Market now!</p>
						</div>
						<div class="form-group fs-4">
					        <?php
                                if (!empty($login_err)) {
                                  echo "<div class='alert alert-danger'>" . $login_err . "</div>";
                                }
                            ?>
                    	</div>
			
						<form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" novalidate>
							<div class="form-group">
							 <label for="user_login" class="form-label fs-4" style="color:#fd961a">Email or username</label>
              <input type="text" class="form-control fs-4" name="user_login" id="user_login" value="<?= $user_login; ?>">
              <small class="text-danger fs-5"><?= $user_login_err; ?></small>
          </div>
							<div class="form-group">
							 <label for="password" class="form-label fs-4" style="color:#fd961a">Password</label>
              <input type="password" class="form-control fs-4" name="user_password" id="password">
              <small class="text-danger fs-5"><?= $user_password_err; ?></small>
          	</div>
							<div class="form-group">
              <input type="submit" class="btn btn-warning form-control fs-3 my-3" name="submit" value="Log In">
								<p class="text-center">don't have an account ? <a href="register.php" style="color:#fd961a">register now</a>
							</div>
						</form>
					</div>
				</div>
				<p class="text-center copyright-text"><a href="4orn.info" style="color:#fd961a">© Copyright 4Born Solution. All Rights
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