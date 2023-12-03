<?php

include "include/config.php";

$username_err = $email_err = $password_err = "";
$username = $email = $password = $mobile_number = $profile = $current_date = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize user input
    $username = htmlspecialchars($_POST["username"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $password = $_POST["password"];
    $mobile_number = $_POST["mobile_number"];
    $profile = 'img/user/user.jpg';
    $current_date = date('d-m-Y');

    // Validate username
    if (empty($username)) {
        $username_err = "Please enter a username.";
    } elseif (!preg_match("/^[a-zA-Z0-9@_\-]+$/", $username)) {
        $username_err = "Username can only contain letters, numbers, and symbols like '@', '_', or '-'. No spaces allowed.";
    } else {
        $sql = "SELECT id FROM AI_register WHERE username = ?";

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

    // Validate email
    if (empty($email)) {
        $email_err = "Please enter an email address.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_err = "Please enter a valid email address.";
    } else {
        $sql = "SELECT id FROM AI_register WHERE email = ?";

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

    // Validate password
    if (empty($password)) {
        $password_err = "Please enter a password.";
    } elseif (strlen($password) < 8) {
        $password_err = "Password must contain at least 8 or more characters.";
    }

    // If there are no errors, insert the data into the database
    if (empty($username_err) && empty($email_err) && empty($password_err)) {
       

        $sql = "INSERT INTO AI_register (username, email, password, mobile_number, profile_image, created)
        VALUES (?, ?, ?, ?, ?, ?)";

        if ($stmt = mysqli_prepare($con, $sql)) {

            $param_username = $username;
            $param_email = $email;
            $param_mobile = $mobile_number;
            $param_profile = $profile;
            $param_current_date = $current_date;
             $hashed_password = $password;

            mysqli_stmt_bind_param($stmt, "ssssss", $param_username, $param_email, $hashed_password, $param_mobile, $param_profile, $param_current_date);
            if (mysqli_stmt_execute($stmt)) {
                echo "<script>alert('Registration completed successfully. Login to continue.');</script>";
                echo "<script>window.location.href='./sign-in.php';</script>";
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
            		<h1 class=""> </h1>
		
		
	                    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
							<div class="form-group">
							  <label for="username" class="form-label fs-4" style="color:#fd961a;">Username</label>
                              <input type="text" class="form-control fs-4" name="username" id="username" value="<?= $username; ?>"  placeholder="Enter Your Name" > 
                              <small class="text-danger fs-5"><?= $username_err; ?></small>
                           
							</div>
							<div class="form-group">
							    <label for="text" class="form-label fs-4" style="color:#fd961a;">Your Email</label>
                                 <input type="text" class="form-control fs-4" name="email" id="email" value="<?= $email; ?>"  placeholder="Enter Your Number" >
                                  <small class="text-danger fs-5"><?= $email_err; ?></small>
							</div>
							<div class="form-group">
							    <label for="mobile_number" class="form-label fs-4" style="color:#fd961a;">Your Mobile number Number</label>
                                 <input type="text" class="form-control fs-4" name="mobile_number" id="mobile_number" value="<?= $mobile_number; ?>"  placeholder="Enter Your Number" >
							</div>
							<div class="form-group">
							        <label for="password" class="form-label fs-4" style="color:#fd961a;">Password</label>
                                    <input type="password" class="form-control fs-4" name="password" id="password" value="<?= $password; ?>"  placeholder="Enter Your Password" >
                                    <small class="text-danger fs-5"><?= $password_err; ?></small>
                        	</div>
							<div class="form__pass">
            				</div>
            				
            				<div class="form__submit">
            					<label class="fn__submit">
            						<input type="submit" name="submit" value="Sign In">
            					</label>
            				</div>
					</form>
            		<div class="sign__desc">
            			<p>Not a member? <a href="sign-in.php">Sign In</a></p>
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