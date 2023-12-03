<?php
require_once "../../include/config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $licenseKey = $_POST["license"];
  $domain = $_POST["domain"];

  $licenseKey = mysqli_real_escape_string($con, $licenseKey);
  $domain = mysqli_real_escape_string($con, $domain);

  $sql = "INSERT INTO E_OTP_license (license_key, domain) VALUES ('$licenseKey', '$domain')";

  if (mysqli_query($con, $sql)) {
    echo '<script>alert("Data stored successfully.");</script>';
    echo '<script>window.location.href = "../license.php";</script>';
    exit;
  } else {
    echo "Error: " . mysqli_error($con);
  }
}
?>
