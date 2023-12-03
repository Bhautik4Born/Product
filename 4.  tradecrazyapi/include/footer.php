<?php
// session_start();

include "config.php";
    
if(isset($_SESSION['username']) && !empty($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $showUsername = true;
} else {
    $showUsername = false;
?>
<section class="call-action-all">
    <div class="call-action-all-overlay">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="action-text">
                        <h2>Get Started Today With Our API</h2>
                        <p class="lead">Open an account for free and Buy Stock API!</p>
                    </div>
                    <p class="action-btn"><a class="btn btn-primary" href="register.php">Register Now</a></p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
}
?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<footer class="footer">
            <!-- Footer Top Area Starts -->
            <div class="top-footer">
                <div class="container">
                    <div class="row">
                        <!-- Footer Widget Starts -->
                        <div class="col-sm-4 col-md-2">
                            <h4>Our Company</h4>
                            <div class="menu">
                                <ul>
                                    <li><a href="indedx.php">Home</a></li>
                                    <li><a href="about.php">About</a></li>
                                    <li><a href="services.php">Services</a></li>
                                    <li><a href="pricing.php">Pricing</a></li>
                                    <!--<li><a href="blog-right-sidebar.php">Blog</a></li>-->
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer Widget Ends -->
                        <!-- Footer Widget Starts -->
                        <div class="col-sm-4 col-md-2">
                            <h4>Help & Support</h4>
                            <div class="menu">
                                <ul>
                                    <!--<li><a href="faq.php">FAQ</a></li>-->
                                    <li><a href="terms-of-services.php">Terms of Services</a></li>
                                    <li><a href="404.php">404</a></li>
                                    <li><a href="register.php">Register</a></li>
                                    <li><a href="login.php">Login</a></li>
                                    <li><a href="coming-soon.php">Coming Soon</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer Widget Ends -->
                        <!-- Footer Widget Starts -->
                        <div class="col-sm-4 col-md-3">
                            <h4>Contact Us </h4>
                            <div class="contacts">
                                <div>
                                    <span>tradecrazyapi@4born.info</span>
                                </div>
                                <div>
                                    <!--<span>+91 #</span>-->
                                </div>
                                <!--<div>-->
                                <!--    <span>London, England</span>-->
                                <!--</div>-->
                                <div>
                                    <span>mon-sat 08am &#x21FE; 05pm</span>
                                </div>
                            </div>
							<!-- Social Media Profiles Starts -->
                            <!--<div class="social-footer">-->
                            <!--    <ul>-->
                            <!--        <li><a href="https://www.linkedin.com/company/4born-solutions" target="_blank"><i class="fa fa-linkedin"></i></a></li>-->
                            <!--    </ul>-->
                            <!--</div>-->
							<!-- Social Media Profiles Ends -->
                        </div>
                        <!-- Footer Widget Ends -->
						<!-- Footer Widget Starts -->
                        <div class="col-sm-12 col-md-5">
							<!-- Facts Starts -->
							<div class="facts-footer">
								<div>
								    <div style="display:flex;">
    									<h5>$</h5>&nbsp; 
    									<h5 id="btc-price-two"></h5>
									</div>
									<span>Bitcoin</span>
								</div>
								<div>
								    <div style="display:flex;">
								        <h5>$</h5>&nbsp; 
    									<h5 id="eth-price"></h5>
    								</div>
    									<span>Ethereum</span>
								</div>
								<div>
								    <div style="display:flex;">
								        <h5>₹</h5>&nbsp; 
    									<h5 id="nifty-price"></h5>
    								</div>
    									<span>Nifty 50</span>
								</div>
								<div>
								    <div style="display:flex;">
								        <h5>₹</h5>&nbsp; 
    									<h5 id="banknifty-price"></h5>
    								</div>
    									<span>Nifty Bank</span>
								</div>
							</div>
							<!-- Facts Ends -->
							<hr>
							<!-- Supported Payment Cards Logo Starts -->
							<div class="payment-logos">
								<h4 class="payment-title">Connect on</h4>
								<a href="https://www.linkedin.com/company/4born-solutions" target="_blank"><i class="fa fa-linkedin"></i></a>
                                
								<!--<img src="images/icons/payment/american-express.png" alt="american-express">-->
								<!--<img src="images/icons/payment/mastercard.png" alt="mastercard">-->
								<!--<img src="images/icons/payment/visa.png" alt="visa">-->
								<!--<img src="images/icons/payment/paypal.png" alt="paypal">-->
								<!--<img class="last" src="images/icons/payment/maestro.png" alt="maestro">-->
							</div>
							<!-- Supported Payment Cards Logo Ends -->
                        </div>
                        <!-- Footer Widget Ends -->
                    </div>
                </div>
            </div>
            <!-- Footer Top Area Ends -->
            <!-- Footer Bottom Area Starts -->
            <div class="bottom-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <!-- Copyright Text Starts -->
                                                        <p class="text-center">© Copyright <a href="https://4born.info/" target="_blank" style="color:#fd961a;">4Born Solution</a>.
                                All Rights Reserved</p>
                            <!-- Copyright Text Ends -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Bottom Area Ends -->
        </footer>
        
        
        
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
            const basedURL_server = "<?php echo $based; ?>";

            fetchData(basedURL_server + "/api/btc_bitcoin.php", "btc-price");
            fetchData(basedURL_server + "/api/btc_bitcoin.php", "btc-price-two");
            fetchData(basedURL_server + "/api/eth_ethereum.php", "eth-price");
            fetchData(basedURL_server + "/api/bnb_binance.php", "bnb-price");
            fetchData(basedURL_server + "/api/ltc_litecoin.php", "ltc-price");
            fetchData(basedURL_server + "/api/nifty_nifty50.php", "nifty-price");
            fetchData(basedURL_server + "/api/nifty_banknifty.php", "banknifty-price");
            fetchData(basedURL_server + "/api/nifty_nifty_it.php", "nifty-it-price");
            fetchData(basedURL_server + "/api/sensex.php", "sensex-price");
        }

        // Initial data fetch
        refreshData();

        // Refresh every 10 seconds
        const refreshInterval = 10000; // 10 seconds
        setInterval(refreshData, refreshInterval);
    </script>
    
    