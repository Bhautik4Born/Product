<?php
// API endpoint URL
$api_url = 'https://api.openai.com/v1/images/generations';

// Request headers
$headers = [
    'Content-Type: application/json',
    'Authorization: Bearer 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',
];

$user_prompt = $_POST['prompt'];

// Request body
$data = [
    "prompt" => $user_prompt,
    "n" => 2,
    "size" => "1024x1024",
];

// Initialize cURL session
$ch = curl_init($api_url);

// Set cURL options
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute cURL session and get the response
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
}

// Close cURL session
curl_close($ch);

// Set response headers for JSON
header('Content-Type: application/json');

// Output the JSON response
echo $response;
?>
