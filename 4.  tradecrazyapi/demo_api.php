<?php
session_start();
include "include/config.php";
include "include/header.php";


// if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
//   echo "<script>" . "window.location.href='./login.php';" . "</script>";
//   exit;
// }

if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
  $username = $_SESSION['username'];
  $showUsername = true;
} else {
  $showUsername = false;
}
?>


<!DOCTYPE html>
<html lang="en">


<head>

  <meta charset="utf-8" />
  <title>Pricing - 4Born</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Favicon -->
  <link rel="shortcut icon" href="images/favicon.png">

  <!-- Template CSS Files -->
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/select2.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/skins/orange.css">

  <!-- Live Style Switcher - demo only -->
  <link rel="alternate stylesheet" type="text/css" title="orange" href="css/skins/orange.css" />
  <link rel="alternate stylesheet" type="text/css" title="green" href="css/skins/green.css" />
  <link rel="alternate stylesheet" type="text/css" title="blue" href="css/skins/blue.css" />
  <link rel="stylesheet" type="text/css" href="css/styleswitcher.css" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.27.0/themes/prism.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.27.0/prism.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.27.0/components/prism-python.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.27.0/components/prism-java.min.js"></script>

  <!-- Template JS Files -->
  <script src="js/modernizr.js"></script>
  <style>
    .code-type-selector {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-bottom: 20px;
    }

    .code-type {
      padding: 10px 20px;
      background-color: transparent;
      color: #fd961a;
      border: 1px solid #ccc;
      border-radius: 5px;
      cursor: pointer;
      margin: 0 10px;
      transition: background-color 0.3s, color 0.3s;
    }

    .code-type:hover {
      background-color: #007bff;
      color: white;
    }
  </style>
</head>

<body>
  <div id="switcher" class="">
    <div class="content-switcher">
      <h4>STYLE SWITCHER</h4>
      <ul>
        <li>
          <a id="orange-css" href="#" title="orange" class="color"><img src="images/styleswitcher/colors/orange.png" alt="" width="30" height="30" /></a>
        </li>
        <li>
          <a id="green-css" href="#" title="green" class="color"><img src="images/styleswitcher/colors/green.png" alt="" width="30" height="30" /></a>
        </li>
        <li>
          <a id="blue-css" href="#" title="blue" class="color"><img src="images/styleswitcher/colors/blue.png" alt="" width="30" height="30" /></a>
        </li>
      </ul>

      <p>BODY SKIN</p>

      <label><input class="dark_switch" type="radio" name="color_style" id="is_dark" value="dark" checked="checked" /> Dark</label>
      <label><input class="dark_switch" type="radio" name="color_style" id="is_light" value="light" />
        Light</label>

      <hr />

      <p>LAYOUT STYLE</p>
      <label><input class="boxed_switch" type="radio" name="layout_style" id="is_wide" value="wide" checked="checked" /> Wide</label>
      <label><input class="boxed_switch" type="radio" name="layout_style" id="is_boxed" value="boxed" />
        Boxed</label>

      <hr />

      <a href="#" class="custom-button purchase">Purchase</a>
      <div id="hideSwitcher">&times;</div>

    </div>
  </div>
  <div class="wrapper">
    <section class="banner-area">
      <div class="banner-overlay">
        <div class="banner-text text-center">
          <div class="container">
            <div class="row text-center">
              <div class="col-xs-12">
                <h2 class="title-head">API <span>Demo</span></h2>
                <hr>
                <ul class="breadcrumb">
                  <li><a href="index.php"> home</a></li>
                  <li>API Demo</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="pricing">
      <div class="container">
        <h3 class="text-center">Choose Your Preferred Language</h3>
        <p class="text-center">Discover a variety of programming languages that you can use to interact with APIs</p>
        <div class="row pricing-tables-content pricing-page">
          <div class="pricing-container">
            <ul class="pricing-list bounce-invert">
              <li class="col-xs-6 col-sm-6 col-md-3 col-lg-7">
                <ul class="pricing-wrapper">
                  <li>
                    <header class="pricing-header">
                      <h2>Select Your Language</h2><br>
                      <div class="show-code">
                        <div class="code-type-selector">
                          <span class="btn btn-primary" onclick="setCodeLanguage('curl')">Curl</span>&nbsp; &nbsp;
                          <span class="btn btn-primary" onclick="setCodeLanguage('python')">Python</span>&nbsp; &nbsp;
                          <span class="btn btn-primary" onclick="setCodeLanguage('java')">Java</span>&nbsp; &nbsp;
                          <span class="btn btn-primary" onclick="setCodeLanguage('php')">PHP</span>&nbsp; &nbsp;
                          <span class="btn btn-primary" onclick="setCodeLanguage('node')">Node.JS</span>&nbsp; &nbsp;
                          <span class="btn btn-primary" onclick="setCodeLanguage('more')">Another</span>
                        </div>
                        <pre><code id="code-display" class="">
                            <p>Select a You Prefer Language</p>
                        </code></pre>
                      </div>
                    </header>
                    <footer class="pricing-footer">
                      <a href="login.php" class="btn btn-primary">Buy Now API</a>
                    </footer>
                  </li>
                </ul>
              </li>
              <li class="col-xs-6 col-sm-6 col-md-3 col-lg-5">
                <ul class="pricing-wrapper">
                  <li>
                    <header class="pricing-header">
                      <h2>Introducing Our Stock <span>Market Price API</span></h2>
                      <div class="price" style="display:flex;">
                        <p>Welcome to our Stock Market Price API, a powerful tool designed to provide you with real-time access to stock market prices. Whether you're a financial analyst, trader, or developer, our API offers seamless integration into your server, enabling you to retrieve and display accurate market data with ease.</p>
    
                      </div>
                    </header>
                    <footer class="pricing-footer">
                      <!--<a href="#" class="btn btn-primary">More Informations</a>-->
                      <?php if ($showUsername) : ?>
                        <a href="mailto:4bornsolutions@gmail.com" class="btn btn-primary">Read a Docuumentations</a>
                      <?php else : ?>
                        <a href="login.php" class="btn btn-primary">More Informations</a>
                      <?php endif; ?>
                    </footer>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
   
        <?php include "include/footer.php";?>
    <a href="#" id="back-to-top" class="back-to-top fa fa-arrow-up"></a>

    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/select2.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/custom.js"></script>

    <script src="js/styleswitcher.js"></script>
    <script>
      $(document).ready(function() {
        // Bitcoin API call
        $.ajax({
            const basedURL_server = "<?php echo $basedURL; ?>";
          url: basedURL_server + "api/btc_bitcoin.php",
          method: "GET",
          dataType: "json",
          success: function(response) {
            if (response.response.status === "success") {
              const bitcoinPrice = response.data.price;
              const btcPriceElement = document.getElementById("btc-price");
              btcPriceElement.innerHTML = `${bitcoinPrice}`;
            } else {
              console.error("Bitcoin API call failed");
            }
          },
          error: function() {
            console.error("Bitcoin API call failed");
          }
        });
      });
    </script>

    <script>
      function setCodeLanguage(language) {
        const codeDisplay = document.getElementById('code-display');
        let code = 'Select a You Prefer Language';

        if (language === 'python') {
          code = `import requests
import json  # Import the json module

api_url = 'https://4admin.4born.info/Stock-Market/api/test.php'

license_key = 'YOUR_LICENSE_KEYS'
domain = 'YOUR_Domain'
stock_id = 'STOCK ID'

data = {
    'license_key': license_key,
    'domain': domain,
    'stock_id': stock_id,
}

headers = {
    'Content-Type': 'application/x-www-form-urlencoded'
}

response = requests.post(api_url, data=data, headers=headers)

if response.status_code == 200:
    decoded_response = response.json()

    if 'response' in decoded_response:
        api_response = decoded_response['response']

        if api_response['status'] == 'success':
            data = decoded_response['data']
            response_data = {
                'response': {
                    'status': 'success',
                    'message': 'Successfully'
                },
                'data': data
            }
            print(json.dumps(response_data))
        else:
            response_data = {
                'response': {
                    'status': 'error',
                    'message': 'Invalid license_key and domain. Please enter a valid license_key and domain.'
                }
            }
            print(json.dumps(response_data))
    else:
        response_data = {
            'response': {
                'status': 'error',
                'message': 'Invalid license_key and domain. Please enter a valid license_key and domain.'
            }
        }
        print(json.dumps(response_data))
else:
    response_data = {
        'response': {
            'status': 'error',
            'message': 'Error in making the API request'
        }
    }
    print(json.dumps(response_data))
`;
        } else if (language === 'java') {
          code = `
import java.io.BufferedReader;
import java.io.DataOutputStream;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.URL;

public class Main {
    public static void main(String[] args) {
        String apiURL = "https://4admin.4born.info/Stock-Market/api/test.php";
        String licenseKey = "YOUR_LICENSE_KEYS";
        String domain = "YOUR_Domain";
        String stockID = "STOCK ID";

        try {
            URL url = new URL(apiURL);
            HttpURLConnection connection = (HttpURLConnection) url.openConnection();

            connection.setRequestMethod("POST");
            connection.setRequestProperty("Content-Type", "application/x-www-form-urlencoded");
            connection.setDoOutput(true);

            String postData = "license_key=" + licenseKey + "&domain=" + domain + "&stock_id=" + stockID;
            DataOutputStream outputStream = new DataOutputStream(connection.getOutputStream());
            outputStream.writeBytes(postData);
            outputStream.flush();
            outputStream.close();

            int responseCode = connection.getResponseCode();

            if (responseCode == 200) {
                BufferedReader reader = new BufferedReader(new InputStreamReader(connection.getInputStream()));
                String inputLine;
                StringBuilder response = new StringBuilder();

                while ((inputLine = reader.readLine()) != null) {
                    response.append(inputLine);
                }

                reader.close();

                System.out.println(response.toString());
            } else {
                System.out.println("Error in making the API request");
            }
        } catch (Exception e) {
            e.printStackTrace();
        }
    }
}

`;
        } else if (language === 'curl') {
          code = `
curl 
  -X POST "https://4admin.4born.info/Stock-Market/api/test.php" \
  
  -d "license_key=YOUR_LICENSE_KEYS" \
  
  -d "domain=YOUR_Domain" \
  
  -d "stock_id=STOCK ID" \
  
  -H "Content-Type: application/x-www-form-urlencoded"

`;
        } else if (language === 'php') {
          code = `
$api_url = 'https://4admin.4born.info/Stock-Market/api/test.php';

$license_key = 'YOUR_LICENSE_KEYS';
$domain = 'YOUR_Domain';
$stock_id = 'STOCK ID';

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

`;
        } else if (language === 'node') {
          code = `
const axios = require('axios');

const apiURL = 'https://4admin.4born.info/Stock-Market/api/test.php';
const licenseKey = 'YOUR_LICENSE_KEYS';
const domain = 'YOUR_Domain';
const stockID = 'STOCK ID';

const data = {
    license_key: licenseKey,
    domain: domain,
    stock_id: stockID,
};

axios.post(apiURL, data, {
    headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
    }
})
.then(response => {
    console.log(response.data);
})
.catch(error => {
    console.error('Error in making the API request', error);
});

`;
        } else if (language === 'more') {
          window.location.href = 'contact.php';
          return;
        }

        codeDisplay.textContent = code;
        codeDisplay.className = `language-${language}`;
        Prism.highlightAll();
      }
    </script>
  </div>
</body>


</html>