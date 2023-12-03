<?php
require_once "../../include/config.php";

function getStockData($googleLink, $stockName)
{
    $html = file_get_contents($googleLink);

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
            'StockName' => $stockName, // Use the provided StockName
            'price' => $price,
            'previos_close' => $change
            // 'dayRange' => $range
        )
    );

    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $licenseKey = $_POST["license_key"];
    $domain = $_POST["domain"];
    $stockID = $_POST["stock_id"];

    $licenseKey = mysqli_real_escape_string($con, $licenseKey);
    $domain = mysqli_real_escape_string($con, $domain);
    $stockID = mysqli_real_escape_string($con, $stockID);

    // Check if the user's license_key and domain exist in the "users" table
    $userQuery = "SELECT * FROM users WHERE license_key = '$licenseKey' AND domain = '$domain'";
    $userResult = mysqli_query($con, $userQuery);

    if (mysqli_num_rows($userResult) == 1) {
        // User's license_key and domain are valid

        // Check if the provided stock_id exists in the "market_Stock" table
        $stockQuery = "SELECT * FROM market_Stock WHERE stock_id = '$stockID'";
        $stockResult = mysqli_query($con, $stockQuery);

        if (mysqli_num_rows($stockResult) == 1) {
            // Stock with the provided stock_id exists

            // Retrieve the Stock_name and google_link from the market_Stock table
            $stockData = mysqli_fetch_assoc($stockResult);
            $stockName = $stockData['Stock_name'];
            $googleLink = $stockData['google_link'];

            // Use the getStockData function to fetch data and generate the response
            $stockData = getStockData($googleLink, $stockName);

            // Example response:
            echo json_encode($stockData);
        } else {
             // Invalid stock_id response
            echo json_encode(array(
                'status' => 'error',
                'message' => 'Invalid stock_id. Please enter a valid stock_id.'
            ));
        }
    } else {
              // Invalid license_key and domain response
        echo json_encode(array(
            'status' => 'error',
            'message' => 'Invalid license_key and domain. Please enter a valid license_key and domain.'
        ));
    }
}
?>
