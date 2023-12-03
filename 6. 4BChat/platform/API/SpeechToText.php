<?php
// Your existing code for making the API request
$api_url = 'https://api.openai.com/v1/audio/transcriptions';
$headers = [
    'Content-Type: multipart/form-data',
    'Authorization: Bearer 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',
];
$file_path = 'Blo.mp3';

$ch = curl_init($api_url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$post_fields = [
    'file' => new CURLFile($file_path),
    'model' => 'whisper-1',
];
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_fields);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);

// Display the raw API response for debugging
// echo "Raw API Response:\n";
echo $response;

?>
