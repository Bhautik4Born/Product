<?php
require_once "include/config.php";

$username_err = $email_err = $mobile_err = $password_err = "";
$username = $email = $mobile = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty(trim($_POST["username"]))) {
    $username_err = "Please enter a username.";
  } else {
    $username = trim($_POST["username"]);
    if (!ctype_alnum(str_replace(array("@", "-", "_"), "", $username))) {
      $username_err = "Username can only contain letters, numbers, and symbols like '@', '_', or '-'.";
    } else {
      $sql = "SELECT id FROM users WHERE username = ?";

      if ($stmt = mysqli_prepare($link, $sql)) {
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
  }

  if (empty(trim($_POST["email"]))) {
    $email_err = "Please enter an email address.";
  } else {
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $email_err = "Please enter a valid email address.";
    } else {
      $sql = "SELECT id FROM users WHERE email = ?";

      if ($stmt = mysqli_prepare($link, $sql)) {
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
  }

  if (empty(trim($_POST["mobile"]))) {
    $mobile_err = "Please enter a mobile number.";
  } else {
    $mobile = trim($_POST["mobile"]);
    if (!preg_match("/^[0-9]{10}$/", $mobile)) {
      $mobile_err = "Please enter a valid 10-digit mobile number.";
    }
  }

  if (empty(trim($_POST["password"]))) {
    $password_err = "Please enter a password.";
  } else {
    $password = trim($_POST["password"]);
    if (strlen($password) < 8) {
      $password_err = "Password must contain at least 8 or more characters.";
    }
  }

  if (empty($username_err) && empty($email_err) && empty($mobile_err) && empty($password_err)) {
    $sql = "INSERT INTO register (name, email, mobile, password) VALUES (?, ?, ?, ?)";

    if ($stmt = mysqli_prepare($link, $sql)) {
      mysqli_stmt_bind_param($stmt, "ssss", $param_username, $param_email, $param_mobile, $param_password);

      $param_username = $username;
      $param_email = $email;
      $param_mobile = $mobile;
      $param_password = $password;

      if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Registration completed successfully. Login to continue.');</script>";
        echo "<script>window.location.href='./signin.php';</script>";
        exit;
      } else {
        echo "<script>alert('Oops! Something went wrong. Please try again later.');</script>";
      }

      mysqli_stmt_close($stmt);
    }
  }

  mysqli_close($link);
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>4Born Email Verification Api</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/main.css">
  <link rel="shortcut icon" href="./img/favicon-16x16.png" type="image/x-icon">
  <script defer src="./js/script.js"></script>
    <style>
      /*body{*/
      /*    background-color: #101e1a;*/
      /*    color:white;*/
      /*}*/
  </style>
</head>

<body>
  <div class="container">
    <div class="row min-vh-100 justify-content-center align-items-center">
      <div class="col-lg-5">
          <h2 style="color:#fd961a; margin-top:4rem;">OTP Serives Register Page</h2>
        <div class="form-wrap border rounded p-4">
          <h1 style="color:#fd961a;">Sign up</h1>
          <p>Please fill this form to register</p>
          <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" novalidate>
          
            <div class="mb-3">
              <label for="username" class="form-label">Name</label>
              <input type="text" class="form-control" name="username" id="username" value="<?= $username; ?>">
              <small class="text-danger"><?= $username_err; ?></small>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" class="form-control" name="email" id="email" value="<?= $email; ?>">
              <small class="text-danger"><?= $email_err; ?></small>
            </div>
            <div class="mb-3">
              <label for="mobile" class="form-label">Mobile Number</label>
              <input type="number" class="form-control" name="mobile" id="mobile" value="<?= $mobile; ?>">
              <small class="text-danger"><?= $email_err; ?></small>
            </div>
            <div class="mb-2">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" name="password" id="password" value="<?= $password; ?>">
              <small class="text-danger"><?= $password_err; ?></small>
            </div>
            <!--<div class="mb-3 form-check">-->
            <!--  <input type="checkbox" class="form-check-input" id="togglePassword">-->
            <!--  <label for="togglePassword" class="form-check-label">Show Password</label>-->
            <!--</div>-->
            <div class="mb-3">
              <input type="submit" class="btn btn-warning form-control" name="submit" value="Sign Up">
            </div>
            <p class="mb-0">Already have an account ? <a href="./signin.php" style="color:#fd961a;">Log In</a></p>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>