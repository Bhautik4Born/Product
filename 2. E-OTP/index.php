<?php

require_once "include/config.php";

session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
  echo "<script>" . "window.location.href='./signup.php';" . "</script>";
  exit;
}
?>



<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  
<!-- Mirrored from themewagon.github.io/productly/v1.0.0/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Jun 2023 15:05:23 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>4Born Email Verification Api</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.html">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.html">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.html">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.png">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.html">
    <meta name="theme-color" content="#ffffff">

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.min.css" rel="stylesheet" />
    
    <style>
/* ======================== */
/*   Syed Sahar Ali Raza    */
/* ======================== */
@import url(https://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700italic,700,900italic,900);
@import url(https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900);
@import url(https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900);
body{background-color:#eee;}

#generic_price_table{
  background-color: #f0eded;
}

/*PRICE COLOR CODE START*/
#generic_price_table .generic_content{
  background-color: #fff;
}

#generic_price_table .generic_content .generic_head_price{
  background-color: #f6f6f6;
}

#generic_price_table .generic_content .generic_head_price .generic_head_content .head_bg{
  border-color: #e4e4e4 rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) #e4e4e4;
}

#generic_price_table .generic_content .generic_head_price .generic_head_content .head span{
  color: #525252;
}

#generic_price_table .generic_content .generic_head_price .generic_price_tag .price .sign{
    color: #414141;
}

#generic_price_table .generic_content .generic_head_price .generic_price_tag .price .currency{
    color: #414141;
}

#generic_price_table .generic_content .generic_head_price .generic_price_tag .price .cent{
    color: #414141;
}

#generic_price_table .generic_content .generic_head_price .generic_price_tag .month{
    color: #414141;
}

#generic_price_table .generic_content .generic_feature_list ul li{  
  color: #a7a7a7;
}

#generic_price_table .generic_content .generic_feature_list ul li span{
  color: #414141;
}
#generic_price_table .generic_content .generic_feature_list ul li:hover{
  background-color: #E4E4E4;
  border-left: 5px solid #fd961a;
}

#generic_price_table .generic_content .generic_price_btn a{
  border: 1px solid #fd961a; 
    color: #fd961a;
} 

#generic_price_table .generic_content.active .generic_head_price .generic_head_content .head_bg,
#generic_price_table .generic_content:hover .generic_head_price .generic_head_content .head_bg{
  border-color: #fd961a rgba(0, 0, 0, 0) rgba(0, 0, 0, 0) #fd961a;
  color: #fff;
}

#generic_price_table .generic_content:hover .generic_head_price .generic_head_content .head span,
#generic_price_table .generic_content.active .generic_head_price .generic_head_content .head span{
  color: #fff;
}

#generic_price_table .generic_content:hover .generic_price_btn a,
#generic_price_table .generic_content.active .generic_price_btn a{
  background-color: #fd961a;
  color: #fff;
} 
#generic_price_table{
  /*margin: 50px 0 50px 0;*/
    /*font-family: 'Raleway', sans-serif;*/
}
.row .table{
    padding: 28px 0;
}

/*PRICE BODY CODE START*/

#generic_price_table .generic_content{
  overflow: hidden;
  position: relative;
  text-align: center;
}

#generic_price_table .generic_content .generic_head_price {
  margin: 0 0 20px 0;
}

#generic_price_table .generic_content .generic_head_price .generic_head_content{
  margin: 0 0 50px 0;
}

#generic_price_table .generic_content .generic_head_price .generic_head_content .head_bg{
    border-style: solid;
    border-width: 90px 1411px 23px 399px;
  position: absolute;
}

#generic_price_table .generic_content .generic_head_price .generic_head_content .head{
  padding-top: 40px;
  position: relative;
  z-index: 1;
}

#generic_price_table .generic_content .generic_head_price .generic_head_content .head span{
    /*font-family: "Raleway",sans-serif;*/
    font-size: 28px;
    font-weight: 400;
    letter-spacing: 2px;
    margin: 0;
    padding: 0;
    text-transform: uppercase;
}

#generic_price_table .generic_content .generic_head_price .generic_price_tag{
  padding: 0 0 20px;
}

#generic_price_table .generic_content .generic_head_price .generic_price_tag .price{
  display: block;
}

#generic_price_table .generic_content .generic_head_price .generic_price_tag .price .sign{
    display: inline-block;
    /*font-family: "Lato",sans-serif;*/
    font-size: 28px;
    font-weight: 400;
    vertical-align: middle;
}

#generic_price_table .generic_content .generic_head_price .generic_price_tag .price .currency{
    /*font-family: "Lato",sans-serif;*/
    font-size: 60px;
    font-weight: 300;
    letter-spacing: -2px;
    line-height: 60px;
    padding: 0;
    vertical-align: middle;
}

#generic_price_table .generic_content .generic_head_price .generic_price_tag .price .cent{
    display: inline-block;
    /*font-family: "Lato",sans-serif;*/
    font-size: 24px;
    font-weight: 400;
    vertical-align: bottom;
}

#generic_price_table .generic_content .generic_head_price .generic_price_tag .month{
    /*font-family: "Lato",sans-serif;*/
    font-size: 18px;
    font-weight: 400;
    letter-spacing: 3px;
    vertical-align: bottom;
}

#generic_price_table .generic_content .generic_feature_list ul{
  list-style: none;
  padding: 0;
  margin: 0;
}

#generic_price_table .generic_content .generic_feature_list ul li{
  /*font-family: "Lato",sans-serif;*/
  font-size: 18px;
  padding: 15px 0;
  transition: all 0.3s ease-in-out 0s;
}
#generic_price_table .generic_content .generic_feature_list ul li:hover{
  transition: all 0.3s ease-in-out 0s;
  -moz-transition: all 0.3s ease-in-out 0s;
  -ms-transition: all 0.3s ease-in-out 0s;
  -o-transition: all 0.3s ease-in-out 0s;
  -webkit-transition: all 0.3s ease-in-out 0s;

}
#generic_price_table .generic_content .generic_feature_list ul li .fa{
  padding: 0 10px;
}
#generic_price_table .generic_content .generic_price_btn{
  margin: 20px 0 32px;
}

#generic_price_table .generic_content .generic_price_btn a{
    border-radius: 50px;
  -moz-border-radius: 50px;
  -ms-border-radius: 50px;
  -o-border-radius: 50px;
  -webkit-border-radius: 50px;
    display: inline-block;
    /*font-family: "Lato",sans-serif;*/
    font-size: 18px;
    outline: medium none;
    padding: 12px 30px;
    text-decoration: none;
    text-transform: uppercase;
}

#generic_price_table .generic_content,
#generic_price_table .generic_content:hover,
#generic_price_table .generic_content .generic_head_price .generic_head_content .head_bg,
#generic_price_table .generic_content:hover .generic_head_price .generic_head_content .head_bg,
#generic_price_table .generic_content .generic_
    </style>
  </head>

  <body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
      <nav class="navbar navbar-expand-lg navbar-light sticky-top" data-navbar-on-scroll="data-navbar-on-scroll">
        <div class="container"><a class="navbar-brand" href="index.php">4Born Email Verification Api</a><button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>
          <div class="collapse navbar-collapse border-top border-lg-0 mt-4 mt-lg-0" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item"><a class="nav-link" aria-current="page" href="index.php">Home</a></li>
              <li class="nav-item"><a class="nav-link" aria-current="page" href="https://rzp.io/l/eotp4born">Pay</a></li>
              <li class="nav-item"><a class="nav-link" aria-current="page" href="user_detail.php">Confirm Detail</a></li>
              
              <li class="nav-item"><a class="nav-link" aria-current="page" href="assets/API Documentation_ OTP API for Email Verification.pdf">Document</a></li>
              
            </ul>
            <div class="d-flex ms-lg-4"><a href="./logout.php" class="btn btn-secondary-outline">Log Out</a></div>
            <!--<div class="d-flex ms-lg-4"><a class="btn btn-secondary-outline" href="signin.php">Sign In</a><a class="btn btn-warning ms-3" href="signup.php">Sign Up</a></div>-->
          </div>
        </div>
      </nav>
      <h5 class="my-4" style="text-align: end;">Hello, <?= htmlspecialchars($_SESSION["email"]); ?></h5>
      <section class="pt-7">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-md-6 text-md-start text-center py-6">
              <h1 class="mb-4 fs-9 fw-bold">Simplify email verification with our reliable API. </h1>
              <p class="mb-6 lead text-secondary">Ensure the accuracy of user email addresses effortlessly with 4born Solutions' Email Verification API. Seamlessly integrate it into your B2B technology, app, or web platform to verify email IDs through OTP.</p>
              <div class="text-center text-md-start"><a class="btn btn-warning me-3 btn-lg" href="https://rzp.io/l/eotp4born" role="button">Get started</a><a class="btn btn-link text-warning fw-medium" href="#!" role="button" data-bs-toggle="modal" data-bs-target="#popupVideo" style="text-decoration:none;"><span class="fas fa-play me-2"></span>Watch the video </a></div>
            </div>
            <div class="col-md-6 text-end"><img class="pt-7 pt-md-0 img-fluid" src="assets/img/hero/hero-img.png" alt="" /></div>
          </div>
        </div>

      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-5 pt-md-9 mb-6" id="feature">
        <div class="bg-holder z-index--1 bottom-0 d-none d-lg-block" style="background-image:url(assets/img/category/shape.png);opacity:.5;"></div>
        <!--/.bg-holder-->
        <div class="container">
          <h1 class="fs-9 fw-bold mb-4 text-center"> Four Steps to Start <br class="d-none d-xl-block" /></h1>
          <div class="row">
            <div class="col-lg-3 col-sm-6 mb-2"> <img class="mb-3 ms-n3" src="assets/img/category/icon1.png" width="75" alt="Feature" />
              <h4 class="mb-3">Check Demo Video and Features</h4>
              <p class="mb-0 fw-medium text-secondary">Explore our API's functionality and see how it can benefit your business.
</p>
            </div>
            <div class="col-lg-3 col-sm-6 mb-2"> <img class="mb-3 ms-n3" src="assets/img/category/icon2.png" width="75" alt="Feature" />
              <h4 class="mb-3">Purchase the API</h4>
              <p class="mb-0 fw-medium text-secondary">Choose the suitable plan for your requirements and make a secure payment.
</p>
            </div>
            <div class="col-lg-3 col-sm-6 mb-2"> <img class="mb-3 ms-n3" src="assets/img/category/icon3.png" width="75" alt="Feature" />
              <h4 class="mb-3">API Integration Assistance</h4>
              <p class="mb-0 fw-medium text-secondary">Our dedicated team will provide support and guidance to seamlessly integrate the API into your system.
.</p>
            </div>
            <div class="col-lg-3 col-sm-6 mb-2"> <img class="mb-3 ms-n3" src="assets/img/category/icon4.png" width="75" alt="Feature" />
              <h4 class="mb-3">Enjoy the Benefits</h4>
              <p class="mb-0 fw-medium text-secondary">Start verifying email addresses easily and enhance your user experience.
.</p>
            </div>
          </div>
          <!--<div class="text-center"><a class="btn btn-warning" href="#!" role="button">SIGN UP NOW</a></div>-->
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-5" id="validation">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <h2 class="mb-2 fs-7 fw-bold">Places Where Our API Can Be Used:</h2>
              <h4 class="fs-1 fw-bold">Registration Process</h4>
              <p class="mb-4 fw-medium text-secondary">Ensure the validity of email addresses during user sign-ups and registrations.</p>
              <h4 class="fs-1 fw-bold">User Onboarding</h4>
              <p class="mb-4 fw-medium text-secondary">Verify email IDs to ensure accurate user data and prevent fake or fraudulent accounts.
</p>
              <h4 class="fs-1 fw-bold">Email Marketing Campaigns</h4>
              <p class="mb-4 fw-medium text-secondary">Cleanse your mailing lists by validating email addresses before sending marketing emails.
</p>
<h4 class="fs-1 fw-bold">E-commerce Platforms</h4>
              <p class="mb-4 fw-medium text-secondary"> Verify customer email addresses for order confirmations, shipping notifications, and account management.
</p>
<h4 class="fs-1 fw-bold">Customer Support Systems</h4>
              <p class="mb-4 fw-medium text-secondary">Authenticate user email addresses for effective communication and account recovery.
</p>
            </div>
            <div class="col-lg-6"><img class="img-fluid" src="assets/img/validation/validation.png" alt="" /></div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-5" id="manager">
        <div class="container">
          <div class="row">
            <div class="col-lg-6"><img class="img-fluid" src="assets/img/manager/manager.png" alt="" /></div>
            <div class="col-lg-6">
              <p class="fs-7 fw-bold mb-2">Key Features of Our API</p>
              <div class="d-flex align-items-center mb-3"> <img class="me-sm-4 me-2" src="assets/img/manager/tick.png" width="35" alt="tick" />
                <p class="fw-medium mb-0 text-secondary">Email Verification with OTP: Allow users to verify their email addresses through a secure one-time password (OTP).
.</p>
              </div>
              <div class="d-flex align-items-center mb-3"> <img class="me-sm-4 me-2" src="assets/img/manager/tick.png" width="35" alt="tick" />
                <p class="fw-medium mb-0 text-secondary">Real-time Validation: Instantly check the validity and deliverability of email addresses.
</p>
              </div>
              <div class="d-flex align-items-center mb-3"><img class="me-sm-4 me-2" src="assets/img/manager/tick.png" width="35" alt="tick" />
                <p class="fw-medium mb-0 text-secondary"> Syntax and Formatting Checks: Detect and reject email addresses with incorrect syntax or formatting.
.</p>
              </div>
              <div class="d-flex align-items-center mb-3"><img class="me-sm-4 me-2" src="assets/img/manager/tick.png" width="35" alt="tick" />
                <p class="fw-medium mb-0 text-secondary"> Domain Validation: Verify if the domain of the email address exists and is active.
.</p>
              </div>
              <div class="d-flex align-items-center mb-3"><img class="me-sm-4 me-2" src="assets/img/manager/tick.png" width="35" alt="tick" />
                <p class="fw-medium mb-0 text-secondary">Disposable Email Detection: Identify disposable or temporary email addresses that are often associated with spam or fraud.
.</p>
              </div>
              <div class="d-flex align-items-center mb-3"><img class="me-sm-4 me-2" src="assets/img/manager/tick.png" width="35" alt="tick" />
                <p class="fw-medium mb-0 text-secondary"> Bulk Verification: Validate email addresses in bulk to save time and resources.
.</p>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->



      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <section class="pt-5" id="marketer">
        <div class="container">
          <div class="row">
            <div class="col-lg-6">
              <p class="mb-2 fs-8 fw-bold">Markets where our Email Verification API is highly effective</p>
              <h4 class="fw-bold fs-1">E-commerce Industry</h4>
              <p class="mb-4 fw-medium text-secondary">Ensure reliable customer data in the e-commerce sector by verifying email addresses during registration, order processing, and account management. Increase the efficiency of your communication and reduce the risk of bounced emails or failed deliveries.</p>
              <h4 class="fw-bold fs-1">Digital Marketing Agencies</h4>
              <p class="mb-4 fw-medium text-secondary">Enhance the success of email marketing campaigns by validating email addresses before sending out promotional materials. Improve campaign metrics such as open rates, click-through rates, and conversions by reaching genuine and engaged recipients.
</p>
              <h4 class="fw-bold fs-1">Human Resources and Recruitment</h4>
              <p class="mb-4 fw-medium text-secondary">Streamline the hiring process and maintain accurate candidate databases by verifying email addresses during job applications. Avoid the hassle of incorrect or inactive email contacts and facilitate seamless communication with potential candidates.
</p>
            </div>
            <div class="col-lg-6"><img class="img-fluid" src="assets/img/marketer/marketer.png" alt="" /></div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->

<div id="generic_price_table">   
<section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="price-heading clearfix justify-content-center">
                        <h1 style="text-align:center;">Our Pricing</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="generic_content clearfix">
                        <div class="generic_head_price clearfix">
                            <div class="generic_head_content clearfix">
                                <div class="head_bg"></div>
                                <div class="head">
                                    <span>Free</span>
                                </div>
                            </div>
                            <div class="generic_price_tag clearfix">  
                                 <span class="price">
                                    <span class="sign">₹</span>
                                    <span class="currency">0</span>
                                    <!--<span class="cent">/</span>-->
                                    <!--<span class="month">1 MON</span>-->
                                </span>
                            </div>
                        </div>                            
                        <div class="generic_feature_list">
                          <ul>
                              <li><span>30 Days </span> Free Trail</li>
                                <li><span>24/7 </span> Free support</li>
                                <li><span>With </span> Our Wattermark</li>
                                <!--<li><span></span>All Feature</li>-->
                                <!--<li><span></span>Accounts</li>-->
                                <!--<li><span>7</span> Host Domain</li>-->
                            </ul>
                        </div>
                        <div class="generic_price_btn clearfix">
                          <a class="" href="">Trail</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="generic_content active clearfix">
                        <div class="generic_head_price clearfix">
                            <div class="generic_head_content clearfix">
                                <div class="head_bg"></div>
                                <div class="head">
                                    <span>Life Time</span>
                                </div>
                            </div>
                            <div class="generic_price_tag clearfix">  
                                <span class="price">
                                    <span class="sign">₹</span>
                                    <span class="currency">6000</span>
                                    <!--<span class="cent">0</span>-->
                                    <!--<span class="month">/MON</span>-->
                                </span>
                            </div>
                        </div>
                        <div class="generic_feature_list">
                          <ul>
                              <li><span>Unlimited </span> Life Time</li>
                                <li><span>24/7 </span> support</li>
                                <li><span>your ownership </span> </li>
                          </ul>
                        </div>
                        <div class="generic_price_btn clearfix">
                          <a class="" href="https://rzp.io/l/eotp4born">Buy Now</a>
                        </div>
                    </div>
                </div>
        </div> 
</section>
      <!-- ============================================-->
      <!-- <section> begin ============================-->
      <!--<section class="py-md-11 py-8" id="superhero">-->
      <!--  <div class="bg-holder z-index--1 bottom-0 d-none d-lg-block background-position-top" style="background-image:url(assets/img/superhero/oval.png);opacity:.5; background-position: top !important ;"></div>-->
        <!--/.bg-holder-->
      <!--  <div class="container">-->
      <!--    <div class="row justify-content-center">-->
      <!--      <div class="col-lg-6 text-center">-->
      <!--        <h1 class="fw-bold mb-4 fs-7">Need a super hero?</h1>-->
      <!--        <p class="mb-5 text-info fw-medium">Do you require some help for your project: Conception workshop,<br />prototyping, marketing strategy, landing page, Ux/UI?</p><a href="contact.php"><button class="btn btn-warning btn-md">Contact our expert</button></a>-->
      <!--      </div>-->
      <!--    </div>-->
      <!--  </div><!-- end of .container-->
      <!--</section><!-- <section> close ============================-->
      <!-- ============================================-->

           <!-- <section> begin ============================-->
      <section class="text-center py-0">
        <div class="container">
          <div class="container border-top py-3">
            <div class="row justify-content-between">
              <div class="col-12 col-md-auto mb-1 mb-md-0">
                <p class="mb-0">&copy; Copyright 4Born Solution. All Rights Reserved </p>
              </div>
              <div class="col-12 col-md-auto">
                <p class="mb-0"> Made with<span class="fas fa-heart mx-1 text-danger"> </span>by <a class="text-decoration-none ms-1" href="https://4born.info/" target="_blank">4Born Solution.</a></p>
              </div>
            </div>
          </div>
        </div><!-- end of .container-->
      </section><!-- <section> close ============================-->
      <!-- ============================================-->

    </main><!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <div class="modal fade" id="popupVideo" tabindex="-1" aria-labelledby="popupVideo" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content"> <iframe class="rounded" style="width:100%;height:500px;" src="assets/TEST.mp4" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
      </div>
    </div>

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src="vendors/%40popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="../../../polyfill.io/v3/polyfill.min58be.js?features=window.scroll"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="assets/js/theme.js"></script>
    <link href="../../../fonts.googleapis.com/css2ca55.css?family=Poppins:wght@400;500;600;700&amp;family=Volkhov:wght@700&amp;display=swap" rel="stylesheet">
  </body>


<!-- Mirrored from themewagon.github.io/productly/v1.0.0/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Jun 2023 15:05:33 GMT -->
</html>