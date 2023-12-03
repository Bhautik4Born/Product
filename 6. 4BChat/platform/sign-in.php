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
    $sql = "SELECT id, username, password FROM AI_register WHERE username = ? OR email = ?";

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
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
  

<!-- Mirrored from frenify.com/work/envato/frenify/html/techwave/1/sign-in.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Oct 2023 08:45:01 GMT -->
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="description" content="4Bchat AI">
<meta name="author" content="Frenify">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Sign In - 4Bchat AI</title>


<script>
	if (!localStorage.frenify_skin) {
		localStorage.frenify_skin = 'dark';
	}
	if (!localStorage.frenify_panel) {
		localStorage.frenify_panel = '';
	}
	document.documentElement.setAttribute("data-techwave-skin", localStorage.frenify_skin);
	if(localStorage.frenify_panel !== ''){
		document.documentElement.classList.add(localStorage.frenify_panel);
	}
  	
</script>

<!-- Google Fonts -->
<link rel="preconnect" href="../../../../../../../fonts.googleapis.com/index.php">
<link rel="preconnect" href="../../../../../../../fonts.gstatic.com/index.php" crossorigin>
<link href="../../../../../../../fonts.googleapis.com/css25188.css?family=Heebo:wght@100;200;300;400;500;600;700;800;900&amp;family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
<!-- !Google Fonts -->

<!-- Styles -->
<link type="text/css" rel="stylesheet" href="css/plugins8a54.css?ver=1.0.0" />
<link type="text/css" rel="stylesheet" href="css/style8a54.css?ver=1.0.0" />
<!--[if lt IE 9]> <script type="text/javascript" src="js/modernizr.custom.js"></script> <![endif]-->
<!-- !Styles -->
  
</head>

<body>


<!-- Sign In -->
<div class="techwave_fn_sign">
	
	<div class="sign__content">
	    <div class="form-group fs-4">
	        <?php
                if (!empty($login_err)) {
                  echo "<div class='alert alert-danger'>" . $login_err . "</div>";
                }
            ?>
    	</div>
		<h1 class=""> </h1>
		
		<form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
							<div class="form-group">
							    <label for="user_login" class="form-label fs-4" style="color:#fd961a">Email or username</label>
                                <input type="text" class="form-control fs-4" name="user_login" id="user_login" value="<?= $user_login; ?>" placeholder="Enter User Name Or Email Id">
                                <small class="text-danger fs-5"><?= $user_login_err; ?></small>
                              </div>
							<div class="form-group">
							    <label for="password" class="form-label fs-4" style="color:#fd961a">Password</label>
                                <input type="password" class="form-control fs-4" name="user_password" id="password" placeholder="Enter Your Password">
                                <small class="text-danger fs-5"><?= $user_password_err; ?></small>
                          	</div>
          	
                <br><br>	
							<div class="form-group">
							    <div class="form__submit">
                					<label class="fn__submit">
                                        <input type="submit" class="btn btn-warning form-control fs-3 my-3" name="submit" value="Log In">
                					</label>
                				</div>					
                            </div>
						</form>
		
		<div class="sign__desc">
			<p>Not a member? <a href="sign-up.php">Sign Up</a></p>
		</div>
	</div>
	
</div>
<!-- !Sign In -->



<!-- Scripts -->
<script type="text/javascript" src="js/jquery8a54.js?ver=1.0.0"></script>
<script type="text/javascript" src="js/plugins8a54.js?ver=1.0.0"></script>
<!--[if lt IE 10]> <script type="text/javascript" src="js/ie8.js"></script> <![endif]-->
<script type="text/javascript" src="js/init8a54.js?ver=1.0.0"></script>
<!-- !Scripts -->

</body>

<!-- Mirrored from frenify.com/work/envato/frenify/html/techwave/1/sign-in.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Oct 2023 08:45:04 GMT -->
</html>