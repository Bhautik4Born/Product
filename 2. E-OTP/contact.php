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
    <title>Productly | Design Agency Landing Page UI</title>

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
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    // $massage = $_POST['massage'];

    $to = 'sorathiyabhautikkumar@gmail.com'; 
    $subject = "User Entered Details";
    $message = "Name : $name\n";
    $message .= "Email : $email\n";
    // $message = "Massage : $massage\n";

    $headers = "From: Contact" . "\r\n" .
        "Reply-To: Contact" . "\r\n" .
        "Content-Type: text/plain;charset=utf-8" . "\r\n" .
        "X-Mailer: PHP/" . phpversion();

    // Check if a file was uploaded
    if (isset($_FILES['photo']) && $_FILES['photo']['error'] == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["photo"]["tmp_name"];
        $file_name = $_FILES["photo"]["name"];
        move_uploaded_file($tmp_name, "upload/" . $file_name);
        $attachment_path = "upload/" . $file_name;

        // Attach the uploaded file to the email
        $file_content = file_get_contents($attachment_path);
        $file_data = chunk_split(base64_encode($file_content));
        $boundary = md5(time());

        $headers .= "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-Type: multipart/mixed; boundary=" . $boundary . "\r\n";

        $message .= "\r\n--" . $boundary . "\r\n";
        $message .= "Content-Type: image/jpeg; name=\"" . $file_name . "\"\r\n";
        $message .= "Content-Transfer-Encoding: base64\r\n";
        $message .= "Content-Disposition: attachment\r\n";
        $message .= "\r\n" . $file_data . "\r\n";
        $message .= "--" . $boundary . "--\r\n";

        // Delete the uploaded file after attaching it to the email
        unlink($attachment_path);
    }

    // Send email
    $success = mail($to, $subject, $message, $headers);

    if ($success) {
        // Email sent successfully
        echo "<div class='alert alert-success'>Thank you for your submission. We have received your Query.</div>";
    } else {
        // Error sending email
        echo "<div class='alert alert-danger'>Oops! An error occurred while processing your submission.</div>";
    }
}
?>



      <div class="form-wrap border rounded p-4">
        <h1 style="color:#fd961a;">Transaction details</h1>
        <p>Please enter your payment details</p>

        <!-- The HTML form -->
        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data" novalidate>
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="<?= isset($name) ? htmlspecialchars($name) : ''; ?>">
            <small class="text-danger"><?= isset($name_err) ? $name_err : ''; ?></small>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" value="<?= isset($email) ? htmlspecialchars($email) : ''; ?>">
            <small class="text-danger"><?= isset($email_err) ? $email_err : ''; ?></small>
          </div>
           <div class="mb-3">
            <label for="massage" class="form-label">Massage</label>
            <textarea type="text" class="form-control" name="massage" id="massage" value="<?= isset($massage) ? htmlspecialchars($massage) : ''; ?>"></textarea>
            <small class="text-danger"><?= isset($email_err) ? $email_err : ''; ?></small>
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