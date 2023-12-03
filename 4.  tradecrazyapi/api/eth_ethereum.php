<?php
function autoRefresh($seconds)
{
    header("Refresh:$seconds");
}

function validateLicense($con, $licenseKey, $domain)
{
    $query = "SELECT * FROM market_license WHERE license_key = '$licenseKey' AND domain = '$domain'";
    $result = mysqli_query($con, $query);

    return mysqli_num_rows($result) > 0;
}

function getNiftyData()
{
    $html = file_get_contents("https://www.google.com/finance/quote/ETH-USD");

    $dom = new DOMDocument();

    libxml_use_internal_errors(true);
    $dom->loadHTML($html);
    libxml_use_internal_errors(false);

    $xpath = new DOMXPath($dom);

    $priceElement = $xpath->query('//div[@class="YMlKec fxKbKc"]')->item(0);
    $changeElement = $xpath->query('//div[@class="P6K39c"]')->item(0);
    $rangeElement = $xpath->query('//div[@class="gyFHrc/P6K39c"]')->item(0);

    $price = $priceElement->nodeValue;
    $change = $changeElement->nodeValue;
    $range = $rangeElement->nodeValue;

    $data = array(
        'response' => array(
            'status' => 'success',
            'message' => 'Successfully'
        ),
        'data' => array(
            'StockName' => 'Ethereum',
            'price' => $price,
            'previos_close' => $change,
            'dayRange' => $range
        )
    );

    return $data;
}


$refreshInterval = 1;

autoRefresh($refreshInterval);

include '../include/config.php';

$licenseKey = $_POST['license_key'] ?? '';
$domain = $_POST['domain'] ?? '';

if (validateLicense($con, $licenseKey, $domain)) {
    $data = getNiftyData();
} else {
    $data = array(
        'response' => array(
            'status' => 'error',
            'message' => 'Invalid license key or domain'
        )
    );
}

header('Content-Type: application/json');

echo json_encode($data);
?>
