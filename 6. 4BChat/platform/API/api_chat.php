<?php
// API endpoint URL
$apiUrl = "https://4bchat.4born.info/platform/api/chat.php";

// Define the request data with user-provided content
$userContent = "Hello"; // Replace with the actual user input
$licenseKey = "4BCBORNNov235089BH"; // Replace with the actual license key

// Request data
$data = [
    "message" => $userContent,
    "License_key" => $licenseKey,
];

// Initialize cURL session
$ch = curl_init($apiUrl);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

// Execute the cURL request
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo "cURL Error: " . curl_error($ch);
} else {
    // Display the API response
    echo $response;
}

// Close cURL session
curl_close($ch);
?>
