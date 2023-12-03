<?php
session_start();
include "include/config.php";
include "include/header.php";

if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {
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
    <title>Our Services - 4Born</title>
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

    <!-- Template JS Files -->
    <script src="js/modernizr.js"></script>

</head>

<body>
    <div id="switcher" class="">
        <div class="content-switcher">
            <h4>STYLE SWITCHER</h4>
            <ul>
                <li>
                    <a id="orange-css" href="#" title="orange" class="color"><img
                            src="images/styleswitcher/colors/orange.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a id="green-css" href="#" title="green" class="color"><img
                            src="images/styleswitcher/colors/green.png" alt="" width="30" height="30" /></a>
                </li>
                <li>
                    <a id="blue-css" href="#" title="blue" class="color"><img src="images/styleswitcher/colors/blue.png"
                            alt="" width="30" height="30" /></a>
                </li>
            </ul>

            <p>BODY SKIN</p>

            <label><input class="dark_switch" type="radio" name="color_style" id="is_dark" value="dark"
                    checked="checked" /> Dark</label>
            <label><input class="dark_switch" type="radio" name="color_style" id="is_light" value="light" />
                Light</label>

            <hr />

            <p>LAYOUT STYLE</p>
            <label><input class="boxed_switch" type="radio" name="layout_style" id="is_wide" value="wide"
                    checked="checked" /> Wide</label>
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
                                <h2 class="title-head">our <span>services</span></h2>

                                <hr>
                                <ul class="breadcrumb">
                                    <li><a href="index.php"> home</a></li>
                                    <li>services</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="services">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 service-box">
                        <div>
                            <img id="download-bitcoin" src="images/icons/orange/download-bitcoin.png"
                                alt="download bitcoin">
                            <div class="service-box-content">
                                <h3>Dedicated Support</h3>
                                <p>As a premium service subscriber, you receive priority access to our dedicated support
                                    team.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 service-box">
                        <div>
                            <img id="add-bitcoins" src="images/icons/orange/add-bitcoins.png" alt="add bitcoins">
                            <div class="service-box-content">
                                <h3>Extended Data Coverage</h3>
                                <p>Our premium service expands the breadth and depth of market data available to you.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 service-box">
                        <div>
                            <img id="buy-sell-bitcoins" src="images/icons/orange/buy-sell-bitcoins.png"
                                alt="buy and sell bitcoins">
                            <div class="service-box-content">
                                <h3>Customizable Alerts and Notifications</h3>
                                <p>Tailor your trading experience to your specific needs with customizable alerts and
                                    notifications.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 service-box">
                        <div>
                            <img id="strong-security" src="images/icons/orange/strong-security.png"
                                alt="strong security" />
                            <div class="service-box-content">
                                <h3>Advanced Analytics and Reports</h3>
                                <p>Gain deeper insights into your trading performance and portfolio with our advanced
                                    analytics and reporting tools. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 service-box">
                        <div>
                            <img id="world-coverage" src="images/icons/orange/world-coverage.png"
                                alt="world coverage" />
                            <div class="service-box-content">
                                <h3>Exclusive Market Research</h3>
                                <p>Access our exclusive market research reports and analysis, prepared by our team of
                                    experts. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 service-box">
                        <div>
                            <img id="payment-options" src="images/icons/orange/payment-options.png"
                                alt="payment options" />
                            <div class="service-box-content">
                                <h3>Priority API Access</h3>
                                <p>Enjoy faster response times, higher data delivery rates, and enhanced reliability,
                                    ensuring you never miss a critical market update or opportunity.</p>
                            </div>
                        </div>
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
            // Make API call
            $.ajax({
                const basedURL_server = "<?php echo $basedURL; ?>";
                url: basedURL_server + "api/btc_bitcoin.php",
                method: "GET",
                dataType: "json",
                success: function(response) {
                    if (response.response.status === "success") {
                        const bitcoinPrice = response.data.price;
                        const btcPriceElement = document.getElementById("btc-price");
                        btcPriceElement.innerHTML = bitcoinPrice;
                    } else {
                        console.error("API call failed");
                    }
                },
                error: function() {
                    console.error("API call failed");
                }
            });
        });
    </script>
    </div>
</body>

</html>