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
    $sql = "SELECT id, email, password FROM register WHERE email = ?";

    if ($stmt = mysqli_prepare($link, $sql)) {
      mysqli_stmt_bind_param($stmt, "s", $param_user_login);

      $param_user_login = $user_login;

      if (mysqli_stmt_execute($stmt)) {
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) == 1) {
          mysqli_stmt_bind_result($stmt, $id, $email, $plain_password);

          if (mysqli_stmt_fetch($stmt)) {
            if ($user_password == $plain_password) {
              $_SESSION["id"] = $id;
              $_SESSION["email"] = $email;
              $_SESSION["loggedin"] = TRUE;

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
        <?php
        if (!empty($login_err)) {
          echo "<div class='alert alert-danger'>" . $login_err . "</div>";
        }
        ?>
        <div class="form-wrap border rounded p-4">
          <h1 style="color:#fd961a;">Log In</h1>
          <p>Please login to continue</p>
          <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" novalidate>
            <div class="mb-3">
              <label for="user_login" class="form-label">Email</label>
              <input type="text" class="form-control" name="user_login" id="user_login" value="<?= $user_login; ?>">
              <small class="text-danger"><?= $user_login_err; ?></small>
            </div>
            <div class="mb-2">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" name="user_password" id="password">
              <small class="text-danger"><?= $user_password_err; ?></small>
            </div>
            <!--<div class="mb-3 form-check">-->
            <!--  <input type="checkbox" class="form-check-input" id="togglePassword">-->
            <!--  <label for="togglePassword" class="form-check-label">Show Password</label>-->
            <!--</div>-->
            <div class="mb-3">
              <input type="submit" class="btn btn-warning form-control" name="sub mit" value="Log In">
            </div>
            <!--<p><a href="./reset.php">Forgat Password</a></p>-->
            <p class="mb-0">Don't have an account ? <a href="signup.php" style=color:#fd961a;>Sign Up</a></p>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>