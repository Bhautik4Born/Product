<?php
require_once "../../include/config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $code = $_POST["code"];
  $status = $_POST["status"];
  $discount = $_POST["discount"];

  $name = mysqli_real_escape_string($con, $name);
  $code = mysqli_real_escape_string($con, $code);
  $status = mysqli_real_escape_string($con, $status);
  $discount = mysqli_real_escape_string($con, $discount);

  $sql = "INSERT INTO market_coupon (name, code,status,discount) VALUES ('$name', '$code', '$status', '$discount')";

  if (mysqli_query($con, $sql)) {
    echo '<script>alert("Data stored successfully.");</script>';
    echo '<script>window.location.href = "../offer-coupon.php";</script>';
    exit;
  } else {
    echo "Error: " . mysqli_error($con);
  }
}
?>
