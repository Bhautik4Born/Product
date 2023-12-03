<?php
session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == TRUE) {
  echo "<script>window.location.href='./';</script>";
  exit;
}

require_once "include/config.php";

$user_login_err = $user_password_err = $login_err = "";
$user_login = $user_password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty(trim($_POST["user_login"]))) {
    $user_login_err = "Please enter your email address.";
  } else {
    $user_login = trim($_POST["user_login"]);
  }

  if (empty(trim($_POST["user_password"]))) {
    $user_password_err = "Please enter your password.";
  } else {
    $user_password = trim($_POST["user_password"]);
  }

  if (empty($user_login_err) && empty($user_password_err)) {
    $sql = "SELECT id, username, password FROM admin WHERE username = ?";

    if ($stmt = mysqli_prepare($con, $sql)) {
      mysqli_stmt_bind_param($stmt, "s", $param_user_login);

      $param_user_login = $user_login;

      if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) == 1) {
          mysqli_stmt_bind_result($stmt, $id, $email, $plain_password);

          if (mysqli_stmt_fetch($stmt)) {
            if ($user_password == $plain_password) {
              
              
      

           if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $otp = mt_rand(100000, 999999);
                
                    $to = '4bornsolutions@gmail.com';
                    $subject = 'OTP Verification';
                    $message = '<html><body>';
                    $message = '<html><body>';
                    $message .= '<div style="border: 1px solid #666; padding: 10px; color: #fffff; text-align: center;">';
                    $message .= '<h2 style="color:#fffff;">Dear 4Born</h2>';
                    $message .= '<div style="border: 1px solid #ddd; background-color: #fff; padding: 20px; color: #222; font-family: Arial, sans-serif; line-height: 1.5; text-align: center;">';
                    $message .= '<img src="https://4born.info/assets/img/images/4Born_Solution.png" alt="4Born" style="max-width: 200px; margin-bottom: 10px;">';
                    $message .= '<h1 style="color: black; margin-bottom: 5px;">4Born<span style="color: black;">Login</span></h1>';
                    $message .= '<h2 style="color:#222; margin-bottom: 10px;">Notice: Please do not share this OTP with anyone</h2>';
                    $message .= '<p style="color:#777; margin-bottom: 30px;">Thank you for registering with us! As a part of our security measures, we require you to verify your email address using the OTP below:'. '<h2 style="color: black;">'.$otp . '</h2>'.'</p>';
                    $message .= '<p style="color:#777; margin-bottom: 30px;">If you have any questions or concerns, please do not hesitate to contact our customer support team.'. '<h2 style="color:#67c4a7;"></p>';
                    $message .= "<a href='https://4born.info' style='text-decoration:none;'><button style='background-color: #fd961a; color: #fff; border: none; padding: 10px 20px; font-size: 18px; border-radius: 5px; box-shadow: 2px 2px 5px #ddd; transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;'>Contact</button></a>";
                    // $message .= '<a href="https://mechodal.com/" style="text-decoration:none;"><p style="color:#222; margin-bottom: 10px;">Mechodal Support</p></a>';
                    $message .= '</div>';
                    $message .= '</body></html>';
                    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
                    $headers .= "X-Priority: 1\r\n";
                
                    $headers .= "From: 4bornAdminLogin\r\n";
                    $headers .= "Reply-To: 4bornAdminLoin\r\n";
                    $headers .= "MIME-Version: 1.0\r\n";
                    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
                   $mailSent = mail($to, $subject, $message, $headers);
                   
                   
                $insert = mysqli_query($conn, "UPDATE admin SET otp ='$otp' WHERE id=1");
              

            if ($mailSent) {
                $_SESSION["otp"] = $otp;
                $msg = "OTP SENT SUCCESSFULLY.";
                echo "<script type='text/javascript'>alert('$msg');
                 window.location.href='otp.php';
                </script>";
                
                die();
    
            }else  {
                $errormsg = "Failed to send OTP email.";
                echo "<script type='text/javascript'>alert('$errormsg');</script>";
                die();
            } 
               
                
            }   

              echo "<script>window.location.href='./';</script>";
              exit;
            } else {
              $login_err = "The email or password you entered is incorrect.";
            }
          }
        } else {
          $login_err = "Invalid email or password.";
        }
      } else {
        echo "<script>alert('Oops! Something went wrong. Please try again later.');</script>";
        echo "<script>window.location.href='./login.php';</script>";
        exit;
      }
      

      mysqli_stmt_close($stmt);
    }
  }

  mysqli_close($con);
}
   

?>

<!doctype html>
<html lang="en" class="semi-dark">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
  <!-- Bootstrap CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/bootstrap-extended.css" rel="stylesheet" />
  <link href="assets/css/style.css" rel="stylesheet" />
  <link href="assets/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <!-- loader-->
	<link href="assets/css/pace.min.css" rel="stylesheet" />

  <title>StoryEmbrace</title>
</head>

<body class="bg-login">

  <!--start wrapper-->
  <div class="wrapper">
    
       <!--start content-->
       <main class="authentication-content vh-100 d-flex justify-content-center align-items-center">
        <div class="container-fluid">
         <div class="row">
          <div class="col-12 col-lg-4 mx-auto">
            <div class="card shadow rounded-5 overflow-hidden mb-0">
                  <div class="card-body p-4 p-sm-5">
                      <?php
                        if (!empty($login_err)) {
                          echo "<div class='alert alert-danger'>" . $login_err . "</div>";
                        }
                        ?>
                    <h5 class="card-title text-center">LOG IN</h5>
                    <form class="form-body" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" novalidate>
                      <div class="login-separater text-center mb-4">
                        <hr>
                      </div>
                        <div class="row g-3">
                          <div class="col-12">
                            <label for="inputEmailAddress" class="form-label">Email Address</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div>
                              <input type="email" class="form-control radius-30 ps-5" id="inputEmailAddress" name="user_login" placeholder="Email Address">
                            </div>
                          </div>
                          <div class="col-12">
                            <label for="inputChoosePassword" class="form-label">Enter Password</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-lock-fill"></i></div>
                              <input type="password" class="form-control radius-30 ps-5" id="inputChoosePassword" name="user_password" placeholder="Enter Password">
                            </div>
                          </div>
                          <div class="col-12">
                            <div class="d-grid">
                              <input href="index.php" type="submit" class="btn btn-primary radius-30" value="Log In">
                            </div>
                          </div>
                        </div>
                    </form>
                 </div>
            </div>
          </div>
        </div>
        </div>
       </main>
        
       <!--end page main-->

  </div>
  <!--end wrapper-->


  <!--plugins-->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/pace.min.js"></script>


</body>

</html>