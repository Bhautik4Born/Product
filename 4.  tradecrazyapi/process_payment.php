<?php
$upiId = "im.201011749869@indus";
$email = "sorathiyamer3@gmail.com";
$website = "https://tradecrazyapi.4born.info/";
$amount = 1;
$transactionId = uniqid();
$callbackUrl = "https://tradecrazyapi.4born.info/";

$phonePeUrl = "upi://pay?pa=" . urlencode($upiId) . "&pn=" . urlencode($website) . "&mc=&tid=" . urlencode($transactionId) . "&tn=&am=" . urlencode($amount). "&url=" . urlencode($callbackUrl);

$googlePayUrl = "upi://pay?pa=" . urlencode($upiId) . "&pn=" . urlencode($website) . "&mc=&tid=" . urlencode($transactionId) . "&tn=&am=" . urlencode($amount) . urlencode($callbackUrl);

// Check if both payment options are empty
if (empty($phonePeUrl) && empty($googlePayUrl)) {
    // Redirect to a page that displays an image
    header("Location: no_payment_image.php");
    exit;
}

// If at least one payment option is available, redirect to the first available option
if (!empty($phonePeUrl)) {
    header("Location: " . $phonePeUrl);
} elseif (!empty($googlePayUrl)) {
    header("Location: " . $googlePayUrl);
}
?>
