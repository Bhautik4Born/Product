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
                                <h2 class="title-head">APIs <span> Simple Demo</span></h2>
                                <!--<hr>-->
                                   <p>If you're interested in purchasing our API and learning how to make API calls, check out our <a href="demo_api.php">API Reference</a>.</p>
 <hr>
                                <ul class="breadcrumb">
                                    <li><a href="index.php"> home</a></li>
                                    <li>Stock</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pricing">
            <div class="container">
                <h3 class="text-center">India Stock Demo</h3>
                <p class="text-center">Buy bitcoins with your credit card or cash here! Register to Bayya and get your
                    bitcoins today.</p>
                <div class="row pricing-tables-content pricing-page">
                    <div class="pricing-container">
                        <ul class="pricing-list bounce-invert">
                            <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <ul class="pricing-wrapper">
                                    <li>
                                        <header class="pricing-header">
                                            <h2>NIFTY 50<span>price in </span></h2>
                                            <div class="price" style="display:flex;">
                                                <span class="currency"><i style="font-size:33px" class="fa">&#xf156;</i></span>&nbsp; 
                                                <!--<span class="value">100</span>-->
                                            <span class="value"><div id="nifty-price" data-bw-theme="light" data-bw-cur="usd"></div></span><br>
                                            </div>
                                        </header>
                                        <footer class="pricing-footer">
                                            <!--<a href="#" class="btn btn-primary">More Informations</a>-->
                                                  <?php if($showUsername): ?>
                                                    <a href="mailto:4bornsolutions@gmail.com" class="btn btn-primary">More Informations</a>
                                                <?php else: ?>
                                                    <a href="login.php" class="btn btn-primary">More Informations</a>
                                                <?php endif; ?>
                                        </footer>
                                    </li>
                                </ul>
                            </li>
                            <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <ul class="pricing-wrapper">
                                    <li>
                                        <header class="pricing-header">
                                            <h2>NIFTY Bank<span>price in </span></h2>
                                            <div class="price" style="display:flex;">
                                                <span class="currency"><i style="font-size:33px" class="fa">&#xf156;</i></span>&nbsp; 
                                                <!--<span class="value">100</span>-->
                                            <span class="value"><div id="banknifty-price" data-bw-theme="light" data-bw-cur="usd"></div></span><br>
                                            </div>
                                        </header>
                                        <footer class="pricing-footer">
                                            <!--<a href="#" class="btn btn-primary">More Informations</a>-->
                                                  <?php if($showUsername): ?>
                                                    <a href="mailto:4bornsolutions@gmail.com" class="btn btn-primary">More Informations</a>
                                                <?php else: ?>
                                                    <a href="login.php" class="btn btn-primary">More Informations</a>
                                                <?php endif; ?>
                                        </footer>
                                    </li>
                                </ul>
                            </li>
                            <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <ul class="pricing-wrapper">
                                    <li>
                                        <header class="pricing-header">
                                            <h2>NIFTY IT<span>price in </span></h2>
                                            <div class="price" style="display:flex;">
                                                <span class="currency"><i style="font-size:33px" class="fa">&#xf156;</i></span>&nbsp; 
                                                <!--<span class="value">100</span>-->
                                            <span class="value"><div id="nifty-it-price" data-bw-theme="light" data-bw-cur="usd"></div></span><br>
                                            </div>
                                        </header>
                                        <footer class="pricing-footer">
                                            <!--<a href="#" class="btn btn-primary">More Informations</a>-->
                                                  <?php if($showUsername): ?>
                                                    <a href="mailto:4bornsolutions@gmail.com" class="btn btn-primary">More Informations</a>
                                                <?php else: ?>
                                                    <a href="login.php" class="btn btn-primary">More Informations</a>
                                                <?php endif; ?>
                                        </footer>
                                    </li>
                                </ul>
                            </li>
                            <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <ul class="pricing-wrapper">
                                     <li>
                                        <header class="pricing-header">
                                            <h2>SENSEX<span>price in </span></h2>
                                            <div class="price" style="display:flex;">
                                                <span class="currency"><i style="font-size:33px" class="fa">&#xf156;</i></span>&nbsp; 
                                                <!--<span class="value">100</span>-->
                                            <span class="value"><div id="sensex-price" data-bw-theme="light" data-bw-cur="usd"></div></span><br>
                                            </div>
                                        </header>
                                        <footer class="pricing-footer">
                                            <!--<a href="#" class="btn btn-primary">More Informations</a>-->
                                                  <?php if($showUsername): ?>
                                                    <a href="mailto:4bornsolutions@gmail.com" class="btn btn-primary">More Informations</a>
                                                <?php else: ?>
                                                    <a href="login.php" class="btn btn-primary">More Informations</a>
                                                <?php endif; ?>
                                        </footer>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <h3 class="text-center sell-title">Cryptocurrency</h3>
                <p class="text-center">Sell easy, fast and secure Bitcoin. The money will be transferred to your PayPal
                    or bank account.</p>
                <div class="row pricing-tables-content pricing-page">
                    <div class="pricing-container">
                        <ul class="pricing-list bounce-invert">
                            <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <ul class="pricing-wrapper">
                                    <li>
                                        <header class="pricing-header">
                                            <h2>Bitcoin <span>BTC</span></h2>
                                            <div class="price" style="display:flex;">
                                                <span class="currency"><i style="font-size:33px" class="fa">&#xf155;</i></span>&nbsp; &nbsp; 
                                                <!--<span class="value">100</span>-->
                                            <span class="value"><div id="btc-price-two" data-bw-theme="light" data-bw-cur="usd"></div></span><br>
                                            </div>
                                        </header>
                                        <footer class="pricing-footer">
                                            <!--<a href="#" class="btn btn-primary">More Informations</a>-->
                                                  <?php if($showUsername): ?>
                                                    <a href="mailto:4bornsolutions@gmail.com" class="btn btn-primary">More Informations</a>
                                                <?php else: ?>
                                                    <a href="login.php" class="btn btn-primary">More Informations</a>
                                                <?php endif; ?>
                                        </footer>
                                    </li>
                                </ul>
                            </li>
                            <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <ul class="pricing-wrapper">
                                    <li>
                                        <header class="pricing-header">
                                            <h2>Ethereum <span>ETH</span></h2>
                                            <div class="price" style="display:flex;">
                                                <span class="currency"><i style="font-size:33px" class="fa">&#xf155;</i></span>&nbsp; &nbsp; 
                                                <!--<span class="value">100</span>-->
                                            <span class="value"><div id="eth-price" data-bw-theme="light" data-bw-cur="usd"></div></span><br>
                                            </div>
                                        </header>
                                        <footer class="pricing-footer">
                                            <!--<a href="#" class="btn btn-primary">More Informations</a>-->
                                                  <?php if($showUsername): ?>
                                                    <a href="mailto:4bornsolutions@gmail.com" class="btn btn-primary">More Informations</a>
                                                <?php else: ?>
                                                    <a href="login.php" class="btn btn-primary">More Informations</a>
                                                <?php endif; ?>
                                        </footer>
                                    </li>
                                </ul>
                            </li>
                            <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <ul class="pricing-wrapper">
                                     <li>
                                        <header class="pricing-header">
                                            <h2>Binance Coin<span>BNB</span></h2>
                                            <div class="price" style="display:flex;">
                                                <span class="currency"><i style="font-size:33px" class="fa">&#xf155;</i></span>&nbsp; &nbsp; 
                                                <!--<span class="value">100</span>-->
                                            <span class="value"><div id="bnb-price" data-bw-theme="light" data-bw-cur="usd"></div></span><br>
                                            </div>
                                        </header>
                                        <footer class="pricing-footer">
                                            <!--<a href="#" class="btn btn-primary">More Informations</a>-->
                                                  <?php if($showUsername): ?>
                                                    <a href="mailto:4bornsolutions@gmail.com" class="btn btn-primary">More Informations</a>
                                                <?php else: ?>
                                                    <a href="login.php" class="btn btn-primary">More Informations</a>
                                                <?php endif; ?>
                                        </footer>
                                    </li>
                                </ul>
                            </li>
                            <li class="col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <ul class="pricing-wrapper">
                                    <li>
                                        <header class="pricing-header">
                                            <h2>Litecoin Coin<span>LTC</span></h2>
                                            <div class="price" style="display:flex;">
                                                <span class="currency"><i style="font-size:33px" class="fa">&#xf155;</i></span>&nbsp; &nbsp; 
                                                <!--<span class="value">100</span>-->
                                            <span class="value"><div id="ltc-price" data-bw-theme="light" data-bw-cur="usd"></div></span><br>
                                            </div>
                                        </header>
                                        <footer class="pricing-footer">
                                            <!--<a href="#" class="btn btn-primary">More Informations</a>-->
                                                  <?php if($showUsername): ?>
                                                    <a href="mailto:4bornsolutions@gmail.com" class="btn btn-primary">More Informations</a>
                                                <?php else: ?>
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
    </div>  
</body>


</html>