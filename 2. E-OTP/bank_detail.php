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
    body {
    background-color: #eee;
}
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
      <div class="form-wrap border rounded p-4">
        <h1 style="color:#fd961a;">Our Bank Detail</h1>
        <p>Continue to payment</p>

        <!-- The HTML form -->
        <form action="user_detail.php" method="post">
          <?php
          if (!empty($login_err)) {
            echo "<div class='alert alert-danger'>" . $login_err . "</div>";
          }
          ?>
          <div class="mb-3">
            <label for="payment_id" class="form-label">Bank Name: </label>
            <input type="text" class="form-control" value="Equitas Small Finance Bank" disabled>
          </div>
          <div class="mb-3">
            <label for="payment_id" class="form-label">Account Holder Name: </label>
            <input type="text" class="form-control" value="Sorthiya Jagdish Kalubhai" disabled>
          </div>
          <div class="mb-3">
            <label for="payment_id" class="form-label">Account Number: </label>
            <input type="text" class="form-control" value="100013087484" disabled>
          </div>
          <div class="mb-3">
            <label for="payment_id" class="form-label">IFSC Code: </label>
            <input type="text" class="form-control" value="ESFB0007016" disabled>
          </div>
          <div class="mb-3">
            <label for="payment_id" class="form-label">UPI ID: </label>
            <input type="text" class="form-control" value="4born@ybl" disabled>
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="togglePassword" required>
            <label for="togglePassword" class="form-check-label"> I confirm that I have read and agreed to the terms and conditions documentation.</label>
          </div>
          <div class="mb-3">
            <input type="submit" class="btn btn-warning form-control" name="submit" value="Continue">
          </div>
        </form>

        <script>
          document.querySelector('form').addEventListener('submit', function(event) {
            var checkbox = document.getElementById('togglePassword');
            if (!checkbox.checked) {
              event.preventDefault();
              alert("Please check the checkbox to proceed.");
            }
          });
        </script>

        <h5>Note :-</h5>
        <p>When you Pay to Payment then not a payment ID and One screenshot. To Confirm Payment</p>
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