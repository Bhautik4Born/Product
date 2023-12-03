<?php

include_once('../include/config.php');

// API endpoint URL
$api_url = 'https://api.openai.com/v1/images/generations';

// Request headers
$headers = [
    'Content-Type: application/json',
    'Authorization: Bearer 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',
];

$user_prompt = $_POST['prompt'];

// Retrieve the user-provided license key from the form input
$license_key = $_POST['License_key'];

// Include the configuration file to access the database connection

// Query the database to check the License_key
$sql = "SELECT * FROM AI_License WHERE License_key = '$license_key'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // The License_key is correct, proceed with the API call

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
} else {
    // The License_key is incorrect
    echo 'Invalid License_key. Access denied.';
}

// Close the database connection
$con->close();
?>
