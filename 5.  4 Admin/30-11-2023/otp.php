<?php
session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == TRUE) {
  echo "<script>window.location.href='./';</script>";
  exit;
}

require_once "include/config.php";

// if (isset($_POST['login'])) {
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $otp = $_POST['otp'];
    // $_SESSION['otp'] = 

        $otp1 = $_SESSION['otp'];

        if ($otp == $otp1) {
            
              $_SESSION["id"] = $id;
              $_SESSION["username"] = $email;
              $_SESSION["loggedin"] = TRUE;
              
            echo '<script>';
            echo 'alert("OTP verification succeeded. You can now log in.");';
            echo 'window.location.href = "index.php";';
            echo '</script>';
            exit;
        } else {
            echo '<script>';
            echo 'alert("OTP verification Failed.");';
             echo 'window.location.href = "otp.php";';
            echo '</script>';
        }
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

  <title>4Born Admin</title>
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
                    <h5 class="card-title text-center">Confirm OTP</h5>
                    <form class="form-body" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" novalidate>
                      <div class="login-separater text-center mb-4">
                        <hr>
                      </div>
                        <div class="row g-3">
                          <div class="col-12">
                            <label for="inputEmailAddress" class="form-label">OTP</label>
                            <div class="ms-auto position-relative">
                              <div class="position-absolute top-50 translate-middle-y search-icon px-3"><i class="bi bi-envelope-fill"></i></div>
                              <input type="number" class="form-control radius-30 ps-5" id="inputEmailAddress" name="otp" placeholder="Enter a Your OTP">
                            </div>
                          </div>
                          
                          <div class="col-12">
                            <div class="d-grid">
                              <input href="index.php" type="submit" class="btn btn-primary radius-30" value="Confirm">
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