<?php
function autoRefresh($seconds)
{
    header("Refresh:$seconds");
}

function validateLicense($con, $licenseKey, $domain)
{
    $query = "SELECT * FROM users WHERE license_key = '$licenseKey' AND domain = '$domain'";
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        $user = mysqli_fetch_assoc($result);
        $expireDate = strtotime($user['date']);
        $currentDate = strtotime(date('Y-m-d'));

        if ($expireDate > $currentDate) {
            return true; // License is valid and not expired
        } else {
            return false; // License is expired
        }
    } else {
        return false; // License not found
    }
}

function getNiftyData()
{
    $html = file_get_contents("https://www.google.com/finance/quote/NIFTY_50:INDEXNSE");

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
            'StockName' => 'NIFTY 50',
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
            'status' => 'expire',
            'message' => 'Your license key is Invalide AND expired. Please Buy Now', 
        )
    );
}

header('Content-Type: application/json');

echo json_encode($data);
?>

