<?php

// Define the API endpoint
$apiUrl = "https://api.openai.com/v1/chat/completions";

// Define your OpenAI API key
$apiKey = "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	"; // Replace with your actual API key

// Define the request headers
$headers = [
    "Authorization: Bearer $apiKey",
    "Content-Type: application/json",
];

// Get user-provided content from a form or input
$userContent = $_POST['massage']; // Replace with the actual user input

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
        echo "Error: No assistant response found in the API response.";
    }
}

// Close cURL session
curl_close($ch);
?>
