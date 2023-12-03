<?php
include_once('../include/config.php');

// Define the API endpoint
$apiUrl = "https://api.openai.com/v1/chat/completions";

// // Define your OpenAI API key
$apiKey = "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"; // Replace with your actual API key

// Define the request headers
$headers = [
    "Authorization: Bearer $apiKey",
    "Content-Type: application/json",
];

// Get the user-provided content from a form or input
$userContent = $_POST['message']; // Replace with the actual user input

// Check the license_key before proceeding
$licenseKey = $_POST['License_key']; // license_key provided by the user

// Include the configuration file to access the database connection

// Query the database to check the license_key
// $sql = "SELECT license_key FROM AI_register WHERE license_key = '$licenseKey'";
$sql = "SELECT license_key FROM AI_register WHERE license_key = '$licenseKey'
        UNION
        SELECT license_key FROM AI_login_google WHERE license_key = '$licenseKey'";

$result = $con->query($sql);

if ($result->num_rows > 0) {
    // The license_key is correct, proceed with the API call

    // Define the request data with user-provided content
    $data = [
        "model" => "gpt-3.5-turbo",
        "messages" => [
            [
                "role" => "system",
                "content" => "You are a helpful assistant."
            ],
            [
                "role" => "user",
                "content" => $userContent
            ]
        ]
    ];

    // Initialize cURL session
    $ch = curl_init($apiUrl);

    // Set cURL options
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    // Execute the cURL request
    $response = curl_exec($ch);

    // Check for cURL errors
    if (curl_errno($ch)) {
        echo "cURL Error: " . curl_error($ch);
    } else {
        // Decode the response
        $decodedResponse = json_decode($response, true);

        // Check if there is a message from the assistant and display it
        if (isset($decodedResponse['choices'][0]['message']['content'])) {
            $assistantMessage = $decodedResponse['choices'][0]['message']['content'];
            $assistantResponse = [
                "message" => [
                    "role" => "assistant",
                    "content" => $assistantMessage
                ]
            ];
            echo json_encode($assistantResponse, JSON_PRETTY_PRINT);
        } else {
                $assistantResponse2 = [
                "message" => [
                    "role" => "assistant",
                    "content" => "Plz Provide License Key And used Proper Method to Call API",
                    "BuyNow" => "https://4bchat.4born.info/",
                ]
            ];
            echo json_encode($assistantResponse2, JSON_PRETTY_PRINT);
        }
    }

    // Close cURL session
    curl_close($ch);
} else {
    // The license_key is incorrect
     $assistantResponse1 = [
                "message" => [
                    "role" => "assistant",
                    "content" => "Invalid license_key. Access denied.",
                    "BuyNow" => "https://4bchat.4born.info/",
                ]
            ];
            echo json_encode($assistantResponse1, JSON_PRETTY_PRINT);
    // echo "Invalid license_key. Access denied.";
}

// Close the database connection
$con->close();
?>
