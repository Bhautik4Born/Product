<?php

require_once "include/config.php";

session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
  echo "<script>" . "window.location.href='./signup.php';" . "</script>";
  exit;
}
?>



<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  
<!-- Mirrored from themewagon.github.io/productly/v1.0.0/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Jun 2023 15:05:23 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>4Born Email Verification Api</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.html">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.html">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.html">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.html">
    <meta name="theme-color" content="#ffffff">

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.min.css" rel="stylesheet" />
    
    <style>
    /*.btn-secondary-outline{*/
        /*margin-top: 2rem !;*/
    /*    height: 3rem;*/
    /*    margin-top: 1rem;*/
    /*    margin-left: 2rem;*/
    /*}*/
    </style>
  </head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light sticky-top" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="index.php">4Born Email Verification Api</a><button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item"><a class="nav-link" aria-current="page" href="index.php">Home</a></li>
              <li class="nav-item"><a class="nav-link" aria-current="page" href="bank_detail.php">Pay</a></li>
              <li class="nav-item"><a class="nav-link" aria-current="page" href="user_detail.php">Confirm Detail</a></li>
              <li class="nav-item"><a class="nav-link" aria-current="page" href="assets/API Documentation_ OTP API for Email Verification.pdf">Document</a></li>
            </ul>
            <div class="d-flex ms-lg-4"><a href="./logout.php" class="btn btn-secondary-outline">Log Out</a></div>
            <!--<div class="d-flex ms-lg-4"><a class="btn btn-secondary-outline" href="signin.php">Sign In</a><a class="btn btn-warning ms-3" href="signup.php">Sign Up</a></div>-->
          </div>
        </div>
      </nav>

<div class="container">
  <div class="row min-vh-100 justify-content-center align-items-center">
    <div class="col-lg-5">
      <?php
      if (!empty($login_err)) {
        echo "<div class='alert alert-danger'>" . $login_err . "</div>";
      }
      ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = array();
    $payment_id = $_POST['payment_id'];
    $user_login = $_POST['user_login'];
    $photo_err = "";

    if (empty($payment_id)) {
        $errors[] = "Payment ID is required.";
    }

    if (empty($user_login)) {
        $errors[] = "Email is required.";
    }

    if (empty($_FILES['photo']['name'])) {
        $errors[] = "Screenshot is required.";
    } else {
        $tmp_name = $_FILES["photo"]["tmp_name"];
        $file_name = $_FILES["photo"]["name"];
        $file_type = $_FILES["photo"]["type"];

        $allowed_types = array("image/jpeg", "image/png","image/jpg");
        if (!in_array($file_type, $allowed_types)) {
            $photo_err = "Only JPEG, JPG, and PNG images are allowed.";
            $errors[] = $photo_err;
        }

        if (strpos($file_name, ' ') !== false) {
            $errors[] = "Please enter an image name without spaces.";
        }
    }

    if (empty($errors)) {
        $upload_directory = "include/images/";
        $upload_path = $upload_directory . $file_name;

        if (move_uploaded_file($tmp_name, $upload_path)) {
            $to = '4bornsoluutions@gmail.com';
            $subject = "User Entered Details";

            // $message = "Screenshot URL: $upload_path\n\n";
            $message .= '<div style="font-family: Arial, sans-serif;">';
            $message .= '<div style="border: 1px solid #ddd; background-color: #fff; padding: 20px; color: #222; font-family: Arial, sans-serif; line-height: 1.5; text-align: center;">';
            $message .= '<h2 style="color:#fd961a;">Payment Confirmation in Email is ' . $user_login . '</h2>';
            $message .= '<p style="color:#777; margin-bottom: 30px;">User Screenshot is: </p>';
            $message .= '<img src="https://e-otp.4born.info/' . $upload_path . '" alt="4Born Solutions" style="max-width: 350px; margin-bottom: 10px;">';
            $message .= '<p style="color:#777; margin-bottom: 30px;">User Payment ID is: <h2 style="color:#fd961a;">' . $payment_id . '</h2></p>';
            $message .= '<h2 style="color:#222; margin-bottom: 10px;">Notice: This is a Payment Confirmation mail</h2>';
            $message .= "<a href='https://4born.info' style='text-decoration:none;'><button style='background-color: #fd961a; color: #fff; border: none; padding: 10px 20px; font-size: 18px; border-radius: 5px; box-shadow: 2px 2px 5px #ddd; transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;'>Contact</button></a>";
            $message .= '</div>';

            $headers = "From: 4born" . "\r\n" .
                "Reply-To: 4born" . "\r\n" .
                "Content-Type: text/html;charset=utf-8" . "\r\n" .
                "X-Mailer: PHP/" . phpversion();

            $success = mail($to, $subject, $message, $headers);

            if ($success) {
                echo "<div class='alert alert-success'>Thank you for your submission. We have received your details.</div>";
                echo "<div class='alert alert-success'>Our Team will contact you within 24 hours.</div>";
            } else {
                echo "<div class='alert alert-danger'>Oops! An error occurred while processing your submission.</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>Failed to move the uploaded file.</div>";
        }
    } else {
        foreach ($errors as $error) {
            echo "<div class='alert alert-danger'>" . $error . "</div>";
        }
    }
}


if (empty($username_err) && empty($email_err) && empty($mobile_err) && empty($password_err)) {
    $sql = "INSERT INTO confirm_payment (payment_id, email, image) VALUES (?, ?, ?)";

    if ($stmt = mysqli_prepare($link, $sql)) {
      $user_login = $user_login;
      $payment_id = $payment_id;
      $file = $upload_path;

      mysqli_stmt_bind_param($stmt, "sss", $payment_id, $user_login, $file);

      if (mysqli_stmt_execute($stmt)) {
        // echo "<script>alert('Registration completed successfully. Login to continue.');</script>";
        echo "<script>window.location.href='./user_detail.php';</script>";
        exit;
      } else {
        // echo "<script>alert('Oops! Something went wrong. Please try again later.');</script>";
      }

      mysqli_stmt_close($stmt);
    }
  }
?>

<div class="form-wrap border rounded p-4">
    <h1 style="color:#fd961a;">Transaction details</h1>
    <p>Please enter your payment details</p>

    <!-- The HTML form -->
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data" novalidate>
        <div class="mb-3">
            <label for="payment_id" class="form-label">Payment ID</label>
            <input type="text" class="form-control" name="payment_id" id="payment_id" value="<?= isset($payment_id) ? htmlspecialchars($payment_id) : ''; ?>" required>
            <small class="text-danger"><?= isset($payment_id_err) ? $payment_id_err : ''; ?></small>
        </div>
        <div class="mb-3">
            <label for="user_login" class="form-label">Email</label>
            <input type="email" class="form-control" name="user_login" id="user_login" value="<?= isset($user_login) ? htmlspecialchars($user_login) : ''; ?>" required>
            <small class="text-danger"><?= isset($user_login_err) ? $user_login_err : ''; ?></small>
        </div>
        <div class="mb-2">
            <label for="photo" class="form-label">Screenshot to confirm Payment</label>
            <input type="file" class="form-control" name="photo" id="photo" required>
            <small class="text-danger"><?= isset($photo_err) ? $photo_err : ''; ?></small>
        </div>
        <div class="mb-3">
            <input type="submit" class="btn btn-warning form-control" name="submit" value="Submit">
        </div>
    </form>
</div>
</div>
</div>
</div>


      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="text-center py-0">
        <div class="container">
          <div class="container border-top py-3">
            <div class="row justify-content-between">
              <div class="col-12 col-md-auto mb-1 mb-md-0">
                <p class="mb-0">&copy; Copyright 4Born Solution. All Rights Reserved </p>
              </div>
              <div class="col-12 col-md-auto">
                <p class="mb-0"> Made with<span class="fas fa-heart mx-1 text-danger"> </span>by <a class="text-decoration-none ms-1" href="https://4born.info/" target="_blank">4Born Solution.</a></p>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->

    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <div class="modal fade" id="popupVideo" tabindex="-1" aria-labelledby="popupVideo" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content"> <iframe class="rounded" style="width:100%;height:500px;" src="https://youtu.be/Xj2uNzVXhWc" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
      </div>
    </div>

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/%40popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <link href="../../../fonts.googleapis.com/css2ca55.css?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap" rel="stylesheet">
  </body>


<!-- Mirrored from themewagon.github.io/productly/v1.0.0/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Jun 2023 15:05:33 GMT -->
</html>