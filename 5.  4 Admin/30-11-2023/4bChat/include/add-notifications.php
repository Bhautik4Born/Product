<?php
require_once "../../include/config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $licenseKey = $_POST["license"];
  $description = $_POST["description"];
  
  $current_date = date("M,d,Y h:i:s A");

  $licenseKey = mysqli_real_escape_string($con, $licenseKey);
  $description = mysqli_real_escape_string($con, $description);

  $sql = "INSERT INTO AI_notifications (tital, descriptions,date) VALUES ('$licenseKey', '$description', '$current_date')";

  if (mysqli_query($con, $sql)) {
    echo '<script>alert("Data stored successfully.");</script>';
    echo '<script>window.location.href = "../notification.php";</script>';
    exit;
  } else {
    echo "Error: " . mysqli_error($con);
  }
}
?>
