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
    <title>About API - 4Born</title>
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

    <!-- Wrapper Starts -->
    <div class="wrapper">
       
		<!-- Banner Area Starts -->
		<section class="banner-area">
			<div class="banner-overlay">
				<div class="banner-text text-center">
					<div class="container">
						<!-- Section Title Starts -->
						<div class="row text-center">
							<div class="col-xs-12">
								<!-- Title Starts -->
								<h2 class="title-head">About <span>Us</span></h2>
								<!-- Title Ends -->
								<hr>
								<!-- Breadcrumb Starts -->
								<ul class="breadcrumb">
									<li><a href="indedx.php"> home</a></li>
									<li>About</li>
								</ul>
								<!-- Breadcrumb Ends -->
							</div>
						</div>
						<!-- Section Title Ends -->
					</div>
				</div>
			</div>
		</section>
		<!-- Banner Area Starts -->
        <!-- About Section Starts -->
        <section class="about-page">
            <div class="container">
				<!-- Section Content Starts -->
                <div class="row about-content">
                    <!-- Image Starts -->
                    <div class="col-sm-12 col-md-5 col-lg-6 text-center">
                        <img id="about-us" class="img-responsive img-about-us" src="images/about-us.png" alt="about us">
                    </div>
                    <!-- Image Ends -->
                    <!-- Content Starts -->
                    <div class="col-sm-12 col-md-7 col-lg-6">
						<div class="feature-about">
							<h3 class="title-about">WE TURN YOUR VISION INTO REALITY.</h3>
    <p>Empower your financial projects with the precision and timeliness of our Stock Market Price API. Join us today and unlock a world of market insights!</p>
            <p><b>Simple Integration: </b>Incorporating our API into your server is a straightforward process, thanks to our well-documented integration methods.</p>

						</div>
						<div class="feature-about">
							<h3 class="title-about risk-title"><i class="fa fa-warning"></i> risk warning</h3>
							<p>Financial markets can experience periods of extreme volatility. Sudden market movements, influenced by economic, geopolitical, or other factors, can lead to rapid and substantial changes in asset prices. Such volatility can impact your investments in unforeseen ways.</p>
						</div>
						<a class="btn btn-primary btn-services" href="services.php">Our services</a>
                    </div>
                    <!-- Content Ends -->
					
                </div>
                <!-- Section Content Ends -->
			</div><!--/ Content row end -->
        </section>
        <!-- About Section Ends -->
		<!-- Facts Section Starts -->
        <section class="facts">
			<!-- Container Starts -->
			<div class="container">
				<!-- Fact Badges Starts -->
				<div class="row text-center facts-content">
					<div class="text-center heading-facts">
						<h2>4Born<span> numbers</span></h2>
						<p>leading cryptocurrency exchange since day one of Bitcoin distribution</p>
					</div>
					<!-- Fact Badge Item Starts -->
					<div class="col-xs-12 col-md-3 col-sm-6 fact">
						<h3>$77.45B</h3>
						<h4>market cap</h4>
					</div>
					<!-- Fact Badge Item Ends -->
					<!-- Fact Badge Item Starts -->
					<div class="col-xs-12 col-md-3 col-sm-6 fact fact-clear">
						<h3>165k</h3>
						<h4>daily transactions</h4>
					</div>
					<!-- Fact Badge Item Ends -->
					<!-- Fact Badge Item Starts -->
					<div class="col-xs-12 col-md-3 col-sm-6 fact">
						<h3>1726</h3>
						<h4>active accounts</h4>
					</div>
					<!-- Fact Badge Item Ends -->
					<!-- Fact Badge Item Starts -->
					<div class="col-xs-12 col-md-3 col-sm-6">
						<h3>17</h3>
						<h4>years on the market</h4>
					</div>
					<!-- Fact Badge Item Ends -->
					<div class="col-xs-12 buttons">
						<a class="btn btn-primary btn-pricing" href="pricing.php">See pricing</a>
						<span class="or"> or </span>
						<a class="btn btn-primary btn-register" href="register.php">Register Now</a>
					</div>
				</div>
				<!-- Fact Badges Ends -->
			</div>
			<!-- Container Ends -->
        </section>
        <!-- facts Section Ends -->
        <!-- Footer Starts -->
        <?php include "include/footer.php";?>
        <!-- Footer Ends -->
		<!-- Back To Top Starts  -->
        <a href="#" id="back-to-top" class="back-to-top fa fa-arrow-up"></a>
		<!-- Back To Top Ends  -->
		
        <!-- Template JS Files -->
        <script src="js/jquery-2.2.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/select2.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/custom.js"></script>
		
		<!-- Live Style Switcher JS File - only demo -->
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
    
<script>
        function fetchData(apiUrl, targetElementId) {
            $.ajax({
                url: apiUrl,
                method: "GET",
                dataType: "json",
                success: function(response) {
                    if (response.response.status === "success") {
                        const price = response.data.price;
                        const priceElement = document.getElementById(targetElementId);
                        priceElement.innerHTML = `${price}`;
                    } else {
                        console.error(`${targetElementId} API call failed`);
                    }
                },
                error: function() {
                    console.error(`${targetElementId} API call failed`);
                }
            });
        }

        function refreshData() {
            fetchData(basedURL_server + "api/btc_bitcoin.php", "btc-price");
            fetchData(basedURL_server + "api/btc_bitcoin.php", "btc-price-two");
            fetchData(basedURL_server + "api/eth_ethereum.php", "eth-price");
            fetchData(basedURL_server + "api/bnb_binance.php", "bnb-price");
            fetchData(basedURL_server + "api/ltc_litecoin.php", "ltc-price");
            fetchData(basedURL_server + "api/nifty_nifty50.php", "nifty-price");
            fetchData(basedURL_server + "api/nifty_banknifty.php", "banknifty-price");
            fetchData(basedURL_server + "api/nifty_nifty_it.php", "nifty-it-price");
            fetchData(basedURL_server + "api/sensex.php", "sensex-price");
        }

        // Initial data fetch
        refreshData();

        // Refresh every 10 seconds
        const refreshInterval = 10000; // 10 seconds
        setInterval(refreshData, refreshInterval);
    </script>
    </div>
    <!-- Wrapper Ends -->
</body>


</html>