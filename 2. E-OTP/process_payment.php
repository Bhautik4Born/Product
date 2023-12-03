<?php
// Replace these values with your UPI ID, email, and website URL
$upiId = "VYAPAR.167415668539@HDFCBANK";
$email = "gahangosai77@gmail.com";
$website = "https://e-otp.4born.info/";

// Retrieve the payment amount from the form submission
$amount = $_POST['amount'];

// Generate a unique transaction ID (you can modify this based on your requirements)
$transactionId = uniqid();

// Construct the payment URL for PhonePe
$phonePeUrl = "upi://pay?pa=" . urlencode($upiId) . "&pn=" . urlencode($website) . "&mc=&tid=" . urlencode($transactionId) . "&tn=&am=" . urlencode($amount);

// Construct the payment URL for Google Pay
$googlePayUrl = "upi://pay?pa=" . urlencode($upiId) . "&pn=" . urlencode($website) . "&mc=&tid=" . urlencode($transactionId) . "&tn=&am=" . urlencode($amount);

// Redirect the user to the payment platform (PhonePe or Google Pay)
// You can choose which platform to use or provide both options to the user
// For example, you can display buttons or links for each platform and let the user choose
header("Location: " . $phonePeUrl);
// header("Location: " . $googlePayUrl);
exit;
?>
