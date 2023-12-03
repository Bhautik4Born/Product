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
    <title>Contact Us - 4Born Solutions</title>
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
                                <h2 class="title-head">Get in <span>touch</span></h2>
                                <hr>
                                <ul class="breadcrumb">
                                    <li><a href="index.php"> home</a></li>
                                    <li>contact</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-8 contact-form">
                        <h3 class="col-xs-12">feel free to drop us a message</h3>
                        <p class="col-xs-12">Need to speak to us? Do you have any queries or suggestions? Please contact
                            us about all enquiries including membership and volunteer work using the form below.</p>
                         <form class="row g-3 contact-form-padding" action="include/contact_detail.php" method="POST">
                            <div class="form-group col-md-6">
                                <input class="form-control" name="firstname" id="firstname" placeholder="FIRST NAME"
                                    type="text" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input class="form-control" name="lastname" id="lastname" placeholder="LAST NAME"
                                    type="text" required>
                            </div>
                            <div class="form-group col-md-6">
                                <input class="form-control" name="email" id="email" placeholder="EMAIL" type="email"
                                    required>
                            </div>
                            <div class="form-group col-md-6">
                                <input class="form-control" name="text" id="subject" placeholder="SUBJECT" type="text"
                                    required>
                            </div>
                            <div class="form-group col-xs-12">
                                <textarea class="form-control" id="message" name="message" placeholder="MESSAGE"
                                    required></textarea>
                            </div>
                             <div class="form-group col-xs-12">


                            <button type="submit" class="btn btn-primary">SEND</button>


                        </div>
                        </form>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <div class="widget">
                            <div class="contact-page-info">
                                <div class="contact-info-box">
                                    <div class="contact-info-box-content">
                                        <p></p>
                                    </div>
                                </div>
                                <div class="contact-info-box">
                                    <i class="fa fa-envelope big-icon"></i>
                                    <div class="contact-info-box-content">
                                        <h4>Email Addresses</h4>

                                        <p>tradecrazyapi@4born.info</p>
                                    </div>
                                </div>
                                <div class="contact-info-box">
                                    <i class="fa fa-share-alt big-icon"></i>
                                    <div class="contact-info-box-content">
                                        <h4>Social Profiles</h4>
                                        <div class="social-contact">
                                            <div class="payment-logo">
                								<a href="https://www.linkedin.com/company/4born-solutions" target="_blank" class="text-center"><i class="fa fa-linkedin"></i></a>
                							</div>
                                        </div>
                                    </div>
                                </div>
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