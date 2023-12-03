<?php
$api_url = 'https://seamarineservice.in/4born%20Market/test/nifty_nifty50.php';  // API URL

$license_key = 'SYN0U6XCH4';  // Your License Keys
$domain = '4born.info';  // Your Domain Name

$data = array(
    'license_key' => $license_key,
    'domain' => $domain,
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
        } elseif ($api_response['status'] === 'expire'){
            echo json_encode(array(
                'response' => array(
                    'status' => 'Your Plan Expire OR invalid a License Keys',
                    'message' => 'Your license key is Invalid and expired. Please renew it. ANd Buy Again',
                ),
            ));
        }else {
            echo json_encode(array(
                'response' => array(
                    'status' => 'error',
                    'message' => 'Invalid license key or domain',
                ),
            ));
        }
    } else {
        echo json_encode(array(
            'response' => array(
                'status' => 'error',
                'message' => 'Invalid JSON response',
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