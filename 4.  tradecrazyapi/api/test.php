<?php

$api_url = 'https://4admin.4born.info/Stock-Market/api/test.php';

$license_key = 'J981H4DYXE';
$domain = 'seamarineservice.in/4born';
$stock_id = '272602';

$data = array(
    'license_key' => $license_key,
    'domain' => $domain,
    'stock_id' => $stock_id,
);

$options = array(
    'http' => array(
        'method' => 'POST',
        'header' => 'Content-Type: application/x-www-form-urlencoded',
        'content' => http_build_query($data),
    ),
);

$context = stream_context_create($options);

$response = file_get_contents($api_url, false, $context);

if ($response !== false) {
    $decoded_response = json_decode($response, true);

    if ($decoded_response && isset($decoded_response['response'])) {
        $api_response = $decoded_response['response'];

        if ($api_response['status'] === 'success') {
            $data = $decoded_response['data'];
            echo json_encode(array(
                'response' => array(
                    'status' => 'success',
                    'message' => 'Successfully',
                ),
                'data' => $data,
            ));
        } else {
            echo json_encode(array(
                'response' => array(
                    'status' => 'error',
                    'message' => 'Invalid license_key and domain. Please enter a valid license_key and domain.',
                ),
            ));
        }
    } else {
        echo json_encode(array(
            'response' => array(
                'status' => 'error',
                'message' => 'Invalid license_key and domain. Please enter a valid license_key and domain.',
            ),
        ));
    }
} else {
    echo json_encode(array(
        'response' => array(
            'status' => 'error',
            'message' => 'Error in making the API request',
        ),
    ));
}
?>
