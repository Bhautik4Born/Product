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
    <title>Market API - 4Born</title>
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
    
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-F59GWGVSLS"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-F59GWGVSLS');
</script>

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
        <div id="main-slide" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators visible-lg visible-md">
                <li data-target="#main-slide" data-slide-to="0" class="active"></li>
                <li data-target="#main-slide" data-slide-to="1"></li>
                <li data-target="#main-slide" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active bg-parallax item-1">
                    <div class="slider-content">
                        <div class="container">
                            <div class="slider-text text-center">
                                <h3 class="slide-title"><span>Stock Market </span> Trending<span> with Our API
                                    </span><br />
                                </h3>
                                <p>
                                    <a href="pricing.php" class="slider btn btn-primary">Check now</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item bg-parallax item-2">
                    <div class="slider-content">
                        <div class="col-md-12">
                            <div class="container">
                                <div class="slider-text text-center">
                                    <h3 class="slide-title"><span>Experience Seamless </span> Trading with Our API<br />
                                        <span></span>
                                    </h3>
                                    <p>
                                        <a href="pricing.php" class="slider btn btn-primary">Show Price</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="index.php#main-slide" data-slide="prev">
                <span><i class="fa fa-angle-left"></i></span>
            </a>
            <a class="right carousel-control" href="index.php#main-slide" data-slide="next">
                <span><i class="fa fa-angle-right"></i></span>
            </a>
        </div>
        <section class="features">
            <div class="container">
                <div class="row features-row">
                    <div class="feature-box col-md-4 col-sm-12">
                        <span class="feature-icon">
                            <img id="download-bitcoin" src="images/icons/orange/download-bitcoin.png"
                                alt="download bitcoin">
                        </span>
                        <div class="feature-box-content">
                            <h3>Extensive Product Range</h3>
                            <p>Gain access to a wide range of products available in the Stock Market.</p>
                        </div>
                    </div>
                    <div class="feature-box two col-md-4 col-sm-12">
                        <span class="feature-icon">
                            <img id="add-bitcoins" src="images/icons/orange/add-bitcoins.png" alt="add bitcoins">
                        </span>
                        <div class="feature-box-content">
                            <h3>Real-Time Market Data</h3>
                            <p>Stay updated with the latest market trends and make informed investment decisions. </p>
                        </div>
                    </div>
                    <div class="feature-box three col-md-4 col-sm-12">
                        <span class="feature-icon">
                            <img id="buy-sell-bitcoins" src="images/icons/orange/buy-sell-bitcoins.png"
                                alt="buy and sell bitcoins">
                        </span>
                        <div class="feature-box-content">
                            <h3>Security and Reliability</h3>
                            <p>Our Stock Market API Sell website implements robust security measures, processes. </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about-us">
            <div class="container">
                <div class="row text-center">
                    <h3 class="title-head">Real-Time Market <span> API</span></h3>
                    <div class="title-head-subtitle">
                        <p> Stay ahead of the curve with up-to-the-minute stock prices, volume, and market trends.</p>
                    </div>
                </div>
                <div class="row about-content">
                    <div class="col-sm-12 col-md-5 col-lg-6 text-center">
                        <img id="about-us" class="img-responsive img-about-us" src="images/about-us.png" alt="about us">
                        <!--<p>4Born Market API</p>-->
                    </div>
                    <div class="col-sm-12 col-md-7 col-lg-6">
                        <h3 class="title-about">We turn your vision into reality.</h3>
                        <p class="about-text">Real-time market data empowers you to stay informed about the market's
                            pulse. By monitoring live data streams, you can identify patterns, detect market sentiment
                            shifts, and adjust your trading strategies accordingly. </p>
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#menu1">Instant Access</a></li>
                            <li><a data-toggle="tab" href="#menu2">Trading</a></li>
                            <li><a data-toggle="tab" href="#menu3">Market Updates</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="menu1" class="tab-pane fade in active">
                                <p>Integrating our Stock Market API into your existing trading platforms is seamless and
                                    hassle-free. </p>
                            </div>
                            <div id="menu2" class="tab-pane fade">
                                <p>Real-time market data empowers you to stay informed about the market's pulse. By
                                    monitoring live data streams, you can identify patterns, detect market sentiment
                                    shifts, and adjust your trading strategies accordingly.</p>
                            </div>
                            <div id="menu3" class="tab-pane fade">
                                <p>Our Stock Market API delivers real-time data on stock prices, volume, and market
                                    trends directly to your fingertips.</p>
                            </div>
                        </div>
                        <a class="btn btn-primary" href="about.php">Read More</a>
                    </div>
                </div>
            </div>
        </section>
        <section class="image-block">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 ts-padding img-block-left">
                        <div class="gap-20"></div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="feature text-center">
                                    <span class="feature-icon">
                                        <img id="strong-security" src="images/icons/orange/strong-security.png"
                                            alt="strong security" />
                                    </span>
                                    <h3 class="feature-title">Real-Time Market Data</h3>
                                    <p>Stay ahead of the curve with up-to-the-minute stock prices volume, and market
                                        trends. </p>
                                </div>
                            </div>
                            <div class="gap-20-mobile"></div>
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="feature text-center">
                                    <span class="feature-icon">
                                        <img id="world-coverage" src="images/icons/orange/world-coverage.png"
                                            alt="world coverage" />
                                    </span>
                                    <h3 class="feature-title">Historical Data Analysis</h3>
                                    <p>Dive deep into historical trends and patterns to uncover valuable insights.</p>
                                </div>
                            </div>
                        </div>
                        <div class="gap-20"></div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="feature text-center">
                                    <span class="feature-icon">
                                        <img id="payment-options" src="images/icons/orange/payment-options.png"
                                            alt="payment options" />
                                    </span>
                                    <h3 class="feature-title">Financial Analysis Tools</h3>
                                    <p>Gain a comprehensive understanding of a company's financial health using our
                                        API's advanced financial analysis tools.</p>
                                </div>
                            </div>
                            <div class="gap-20-mobile"></div>
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="feature text-center">
                                    <span class="feature-icon">
                                        <img id="mobile-app" src="images/icons/orange/mobile-app.png"
                                            alt="mobile app" />
                                    </span>
                                    <h3 class="feature-title">Seamless Integration</h3>
                                    <p>Our Stock Market API seamlessly integrates with your existing trading platforms.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="gap-20"></div>
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="feature text-center">
                                    <span class="feature-icon">
                                        <img id="cost-efficiency" src="images/icons/orange/cost-efficiency.png"
                                            alt="cost efficiency" />
                                    </span>
                                    <h3 class="feature-title">Developer-Friendly</h3>
                                    <p>Built with developers in mind, our API offers robust documentation, sample code.
                                    </p>
                                </div>
                            </div>
                            <div class="gap-20-mobile"></div>
                            <div class="col-sm-6 col-md-6 col-xs-12">
                                <div class="feature text-center">
                                    <span class="feature-icon">
                                        <img id="high-liquidity" src="images/icons/orange/high-liquidity.png"
                                            alt="high liquidity" />
                                    </span>
                                    <h3 class="feature-title">High Liquidity</h3>
                                    <p>Fast access to high liquidity orderbook<br> for top currency pairs</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ts-padding bg-image-1">
                        <div>
                            <div class="text-center">
                                <a class="button-video mfp-youtube" href="https://www.youtube.com/watch"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing Starts -->
        <section class="pricing">
            <div class="container">
                <!-- Section Title Starts -->
                <div class="row text-center">
                    <h2 class="title-head">affordable <span>packages</span></h2>
                    <div class="title-head-subtitle">
                        <p>Purchase Bitcoin using a credit card or with your linked bank account</p>
                    </div>
                </div>
                <!-- Section Title Ends -->
                <!-- Section Content Starts -->
                <div class="row pricing-tables-content">
                    <div class="pricing-container">
                        <!-- Pricing Switcher Starts -->
                        <div class="pricing-switcher">
                            <p>
                                <input type="radio" name="switch" value="buy" id="buy-1" checked>
                                <label for="buy-1">Monthly Plan</label>
                                <input type="radio" name="switch" value="sell" id="sell-1">
                                <label for="sell-1">Yearly Plan</label>
                                <span class="switch"></span>
                            </p>
                        </div>
                        <!-- Pricing Switcher Ends -->
                        <!-- Pricing Tables Starts -->
                        <ul class="pricing-list bounce-invert">
                            <li class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                <ul class="pricing-wrapper">
                                    <!-- Buy Pricing Table #1 Starts -->
                                    <li data-type="buy" class="is-visible">
                                        <header class="pricing-header">
                                            <h2>Personal</h2>
                                            <div class="price"> 
                                                <p class="price-description">Access to Any 50 Stocks</p>
                                                <p class="price-description">$49 Per Month</p>
                                                <p class="price-description">Integrated Support</p>
                                                <p class="price-description">24 / 7 Support</p>
                                            </div>
                                        </header>
                                        <footer class="pricing-footer">
                                            	<form method="POST" action="pay.php" class="my-2">
                                            	    <?php
                                            	     $pay = 83.240 * 49;
                                            	    ?>
                            					    <input type="hidden" name="without_off_amount" value="<?php echo $pay;?>">
                                                    <button class="btn btn-primary">BUY NOW</button>
                            					</form>
                                        </footer>
                                    </li>
                                    <!-- Buy Pricing Table #1 Ends -->
                                    <!-- Sell Pricing Table #1 Starts -->
                                    <li data-type="sell" class="is-hidden">
                                        <header class="pricing-header">
                                            <h2>Personal</h2>
                                            <div class="price"> 
                                                <p class="price-description">Access to Any 50 Stocks</p>
                                                <p class="price-description">$99 Per Year</p>
                                                <p class="price-description">Integrated Support</p>
                                                <p class="price-description">24 / 7 Support</p>
                                            </div>
                                        </header>
                                        <footer class="pricing-footer">
                                            <form method="POST" action="pay.php" class="my-2">
                                            	    <?php
                                            	     $pay = 83.240 * 99;
                                            	    ?>
                            					    <input type="hidden" name="without_off_amount" value="<?php echo $pay;?>">
                                                    <button class="btn btn-primary">BUY NOW</button>
                            					</form>
                                        </footer>
                                    </li>
                                    <!-- Sell Pricing Table #1 Ends -->
                                </ul>
                            </li>
                            <li class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                <ul class="pricing-wrapper">
                                    <!-- Buy Pricing Table #2 Starts -->
                                    <li data-type="buy" class="is-visible">
                                        <header class="pricing-header">
                                            <h2>Premium</h2>
                                            <div class="price"> 
                                                <p class="price-description">Access to Any 100 Stocks</p>
                                                <p class="price-description">$99 Per Month</p>
                                                <p class="price-description">Integrated Support</p>
                                                <p class="price-description">24 / 7 Support</p>
                                            </div>
                                        </header>
                                        <footer class="pricing-footer">
                                            <form method="POST" action="pay.php" class="my-2">
                                            	    <?php
                                            	     $pay = 83.240 * 99;
                                            	    ?>
                            					    <input type="hidden" name="without_off_amount" value="<?php echo $pay;?>">
                                                    <button class="btn btn-primary">BUY NOW</button>
                            					</form>
                                        </footer>
                                    </li>
                                    <!-- Buy Pricing Table #2 Ends -->
                                    <!-- Sell Pricing Table #2 Starts -->
                                    <li data-type="sell" class="is-hidden">
                                        <header class="pricing-header">
                                            <h2>Premium</h2>
                                            <div class="price"> 
                                                <p class="price-description">Access to Any 100 Stocks</p>
                                                <p class="price-description">$999 Per Month</p>
                                                <p class="price-description">Integrated Support</p>
                                                <p class="price-description">24 / 7 Support</p>
                                            </div>
                                        </header>
                                        <footer class="pricing-footer">
                                            <form method="POST" action="pay.php" class="my-2">
                                            	    <?php
                                            	     $pay = 83.240 * 999;
                                            	    ?>
                            					    <input type="hidden" name="without_off_amount" value="<?php echo $pay;?>">
                                                    <button class="btn btn-primary">BUY NOW</button>
                            					</form>
                                        </footer>
                                    </li>
                                    <!-- Sell Pricing Table #2 Ends -->
                                </ul>
                            </li>
                            <li class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                                <ul class="pricing-wrapper">
                                    <!-- Buy Pricing Table #3 Starts -->
                                    <li data-type="buy" class="is-visible">
                                       <header class="pricing-header">
                                            <h2>Customized</h2>
                                            <div class="price"> 
                                                <p class="price-description">Access to All Stocks</p>
                                                <p class="price-description">Your Required</p>
                                                <p class="price-description">Billed Month</p>
                                                <p class="price-description">Integrated Support</p>
                                                <p class="price-description">24 / 7 Support</p>
                                            </div>
                                        </header>
                                        <footer class="pricing-footer">
                                            <a href="contact.php" class="btn btn-primary">Contact Now</a>
                                        </footer>
                                    </li>
                                    <!-- Buy Pricing Table #3 Ends -->
                                    <!-- Yearlt Pricing Table #3 Starts -->
                                    <li data-type="sell" class="is-hidden">
                                        <header class="pricing-header">
                                            <h2>Customized</h2>
                                            <div class="price"> 
                                                <p class="price-description">Access to All Stocks</p>
                                                <p class="price-description">Your Required</p>
                                                <p class="price-description">Billed Yearly</p>
                                                <p class="price-description">Integrated Support</p>
                                                <p class="price-description">24 / 7 Support</p>
                                            </div>
                                        </header>
                                        <footer class="pricing-footer">
                                            <a href="contact.php" class="btn btn-primary">Contact Now</a>
                                        </footer>
                                    </li>
                                    <!-- Sell Pricing Table #3 Ends -->
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing Ends -->
        <section class="image-block2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 img-block-quote bg-image-2">
                        <blockquote>
                        </blockquote>
                    </div>
                    <div class="col-md-8 bg-grey-chart">
                        <div class="chart-widget dark-chart chart-1">
                            <div>
                                <div class="btcwdgt-chart" data-bw-theme="dark"></div>
                            </div>
                        </div>
                        <div class="chart-widget light-chart chart-2">
                            <div>
                                <div class="btcwdgt-chart" bw-theme="light"></div>
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
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


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