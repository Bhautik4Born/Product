<?php
session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] == TRUE) {
  echo "<script>" . "window.location.href='../platform'" . "</script>";
  exit;
}

include "../platform/include/config.php";

$user_login_err = $user_password_err = $login_err = "";
$user_login = $user_password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty(trim($_POST["user_login"]))) {
    $user_login_err = "Please enter your username or an email id.";
    echo "<script>alert('Please enter your username or an email id.');</script>";
    echo "<script>window.location.href='../login.php';</script>";
  } else {
    $user_login = trim($_POST["user_login"]);
  }

  if (empty(trim($_POST["user_password"]))) {
    $user_password_err = "Please enter your password.";
    echo "<script>alert('Please enter your password.');</script>";
    echo "<script>window.location.href='../login.php';</script>";
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

              echo "<script>alert('Login successfully.');</script>";
              echo "<script>window.location.href='../platform/index.php';</script>";
              exit;
            } else {
              $login_err = "The email or password you entered is incorrect.";
              echo "<script>alert('The email or password you entered is incorrect.');</script>";
              echo "<script>window.location.href='../login.php';</script>";
            }
          }
        } else {
          $login_err = "Invalid username or password.";
          echo "<script>alert('Invalid username or password.');</script>";
          echo "<script>window.location.href='../login.php';</script>";
        }
      } else {
        echo "<script>" . "alert('Oops! Something went wrong. Please try again later.');" . "</script>";
        echo "<script>window.location.href='../login.php';</script>";
        exit;
      }

      mysqli_stmt_close($stmt);
    }
  }

  mysqli_close($con);
}
?>