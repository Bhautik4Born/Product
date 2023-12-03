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
                                <h2 class="title-head"><span> Pricing</span></h2>
                                <!--<hr>-->
                                   <p>If you're interested in purchasing our API and learning how to make API calls, check out our <a href="demo_api.php">API Reference</a>.</p>
                                <hr>
                                <ul class="breadcrumb">
                                    <li><a href="index.php"> home</a></li>
                                    <li>Pricing</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
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