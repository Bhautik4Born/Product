<?php
require_once "../../include/config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $stockName = $_POST["Stock_name"];
  $googleLink = $_POST["google_link"];

  // Generate a random 6-digit numeric ID
  $stockID = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);

  $stockName = mysqli_real_escape_string($con, $stockName);
  $googleLink = mysqli_real_escape_string($con, $googleLink);

  $sql = "INSERT INTO market_Stock (stock_id, Stock_name, google_link) VALUES ('$stockID', '$stockName', '$googleLink')";

  if (mysqli_query($con, $sql)) {
    echo '<script>alert("Data stored successfully.");</script>';
    echo '<script>window.location.href = "../Add-Stock.php";</script>';
    exit;
  } else {
    echo "Error: " . mysqli_error($con);
  }
}
?>
