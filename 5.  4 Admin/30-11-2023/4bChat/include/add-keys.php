<?php
require_once "../../include/config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $licenseKey = $_POST["license"];
  $description = $_POST["description"];

  $licenseKey = mysqli_real_escape_string($con, $licenseKey);
  $description = mysqli_real_escape_string($con, $description);

  $sql = "INSERT INTO AI_Keys (license_key, description) VALUES ('$licenseKey', '$description')";

  if (mysqli_query($con, $sql)) {
    echo '<script>alert("Data stored successfully.");</script>';
    echo '<script>window.location.href = "../keys.php";</script>';
    exit;
  } else {
    echo "Error: " . mysqli_error($con);
  }
}
?>