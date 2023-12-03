<?php

session_start();
include "include/config.php";



if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
  echo "<script>" . "window.location.href='./login.php';" . "</script>";
  exit;
}

$without_offer = $_POST['without_off_amount'];
$amount = $_POST['amount'];

if ($without_offer == 0) {
    $paybyuser = $amount;
} else {
    $paybyuser = $without_offer;
}


?>

<!DOCTYPE html>
<html lang="en">
  <head>

    <meta charset="utf-8" />
    <title>Payment - 4Born</title>
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <style>
      .outputWrapper{
        border: 1px solid #606c76;
        border-radius: 4px;
        padding: 2%;
      }
      .button-blue{
        background-color: #007bff;
        border-color: #007bff;
      }
      .button-green{
        background-color: #28a745;
        border-color: #28a745;
      }
      .row {
        flex-direction: row;
        margin-left: -1.0rem;
        width: calc(100% + 2.0rem);
      }
      .row .column {
        margin-bottom: inherit;
        padding: 0 1.0rem;
      }
    </style>
  </head>
  <body>
      
        <section class="banner-area">
            <div class="banner-overlay">
                <div class="banner-text text-center">
                    <div class="container">
                        <!-- Section Title Starts -->
                        <div class="row text-center">
                            <div class="col-xs-12">
                                <!-- Title Starts -->
                                <h2 class="title-head">Payment <span>Process</span></h2>
                                <!-- Title Ends -->
                                <hr>
                                <!-- Breadcrumb Starts -->
                                <ul class="breadcrumb">
                                    <li><a href="index.php" style="color:#fd961a"> home</a></li>
                                    <li>Payment Process</li>
                                </ul>
                                <!-- Breadcrumb Ends -->
                            </div>
                        </div>
                        <!-- Section Title Ends -->
                    </div>
                </div>
            </div>
        </section>
    <div class="container" style="padding-bottom:5rem;">
      <div class="row">
        <div class="column">
          <form onsubmit="return genQR(this)">
            <fieldset>
             <h3 style="color:#FFF;text-align:center;">Plz Do not a Refresh a the Page</h3>
              <label for="accNo" style="color:#fd961a">Amount in ₹ </label>
              <input type="text" placeholder="You Need to Pay a Amount" id="fixedAmount" value="<?php echo $paybyuser; ?>" Disabled>
               <label for="upiID" style="color:#fd961a">UPI ID:</label>
                <input type="text" id="upiID" placeholder="Enter UPI ID" value="im.201011749869@indus" disabled>
              
              <p style="color:#fd961a">First a Generate a QR Code a and a Then continues to Pay UPI And Scan QR Code</p>
              <button class="btn btn-primary btn-proceed" type="submit">Generate QR code</button>
              <!--<input class="button-primary" type="submit" value="Generate QR code">-->
            </fieldset>
          </form>
          <div class="outputWrapper shop-cart">
              <a href="#" type="submit" class="btn btn-primary btn-coupon" name="apply_coupon" id="appLink">Pay using UPI App</a>
            <!--<a href="#" class="button button-green" target="_blank" id="appLink"><strong>Pay using UPI App</strong></a>-->
            <a onclick="copyToClipboard()" class="button button-blue" target="_blank" id="copyLink"><strong>Copy Link</strong></a>
            <label for="sharelink" style="color:#fd961a">Sharable link</label>
            <input type="text" readonly id="sharelink">
            <img src="//:0" alt="" style="margin: 2rem;" id="outputImg">
            <div class="row" style="max-width: 375px;">
              <div class="column column-33">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 85.5 65.6" ><defs><clipPath id="a" clipPathUnits="userSpaceOnUse"><path d="M0 216h432V0H0z"/></clipPath></defs><g clip-path="url(#a)" transform="matrix(.35278 0 0 -.35278 -33.5 71)"><path d="M113.6 179.5c0 1.5-1.1 2.6-3 2.6h-7.9v-5.2h7.9c1.9 0 3 1 3 2.6m-.6 11.8c0 1.4-1.1 2.4-2.7 2.4h-7.6v-4.8h7.6c1.6 0 2.7.9 2.7 2.4M94.9 170v30.4H112c6 0 8.9-4 8.9-7.8 0-3.7-2.3-6.3-5.2-7 3.2-.4 5.8-3.5 5.8-7.4 0-4.4-3-8.2-9-8.2zM146.3 170v12.3h-12.6v-12.2h-7.9v30.4h7.9v-11.4h12.6v11.4h7.9v-30.4zM172.8 192.7l-3.9-11.4h7.7zm7.5-22.6l-1.5 4.4h-12l-1.5-4.4h-9l11.5 30.4h10l11.4-30.4zM209.2 190.4c0 2.1-1.7 3.3-3.8 3.3h-6.2V187h6.2c2.1 0 3.8 1.2 3.8 3.3m-.9-20.3l-5 10.2h-4v-10.2h-8v30.4h15.3c6.8 0 10.6-4.5 10.6-10.1 0-5.3-3.2-8.1-6-9.1l6.1-11.2zM234.7 192.7l-3.9-11.4h7.7zm7.5-22.6l-1.5 4.4h-12l-1.5-4.4h-9l11.5 30.4h10l11.4-30.4zM257.2 170v23.7h-8.5v6.8h24.9v-6.8H265V170z" fill="#f36817"/><path d="M292.8 176.7L290 180l5.4 4.4 3-3.5c.5 1.3.9 2.8.9 4.4 0 5-3.3 8.8-8.3 8.8-5 0-8.3-3.9-8.3-8.8 0-5 3.3-8.8 8.3-8.8.6 0 1.2 0 1.8.2m-18 8.6c0 9.2 7 15.7 16.2 15.7 9.3 0 16.2-6.5 16.2-15.7 0-4.2-1.4-7.9-3.8-10.6l2-2.3-5.5-4.4-2.3 2.8c-2-.8-4.2-1.3-6.6-1.3-9.3 0-16.3 6.5-16.3 15.8M329 190.4c0 2.1-1.7 3.3-3.7 3.3H319V187h6.3c2 0 3.7 1.2 3.7 3.3m-.8-20.3l-5.1 10.2h-4v-10.2h-7.9v30.4h15.2c6.8 0 10.6-4.5 10.6-10.1 0-5.3-3.2-8.1-6-9.1L337 170z" fill="#2faa49"/><path d="M111 43.2v90.3h90.3V57l-10.1 11.5h-19.6l22.2-25.3zM238 15l-21 23.9v110.4H95.3V27.4h112.4L218.4 15z" fill="#273470"/><path d="M133.5 122.2h-11.2v-11.4h11.2zM189.8 122.2h-11.2v-11.4h11.2zM144.8 99.5h-22.5V77h11.2v11.3h11.3z" fill="#273470"/><path d="M178.6 88.2h11.2v11.3h-22.5V122.2h-22.5v-11.3H156v-34h-11.2V54.3H156v11.3h11.3v22.6zM122.3 54.3h11.2v11.3h-11.2zM242.6 149.9v-15H273c13.2 0 23-6.7 26-17.8h-56.4v-14.9H299a25.2 25.2 0 00-23.8-18.8h-32.6V68.6h22.1L301.4 15H321l-38.7 55a36.7 36.7 0 0134.5 32.1h19.5v15h-19.9c-1.4 7-4.7 13.2-9.7 17.9h29.6v14.9z" fill="#273470"/></g></svg>
              </div>
              <div class="column">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.5 46.1"><defs><clipPath id="a" clipPathUnits="userSpaceOnUse"><path d="M0 216h432V0H0z"/></clipPath></defs><g clip-path="url(#a)" transform="matrix(.35278 0 0 -.35278 -11 61)"><path d="M34 61h3l-3-11v-3l3-1 4 1 2 3 2 11h3l-2-11-4-5c-1-2-3-2-5-2-3 0-4 0-5 2l-1 5zM48 43l4 19 9-11a19 19 0 001-2l3 12h2l-4-18-9 11a10 10 0 00-1 2l-3-13zM67 43l4 18h3l-4-18zM74 43l4 18h10l-1-2h-6l-2-5h7v-2h-7l-2-9zM87 43l4 18h3l-4-18zM94 43l4 18h9v-2h-7l-1-5h7l-1-2h-7l-1-6h7l-1-3zM110 46h5l2 1 2 2a10 10 0 012 6l-1 2-2 1h-5zm-4-3l5 18h9l2-2 1-3v-4l-2-4-3-3-2-1-5-1h-1zM137 54h4l1 2v2l-3 1h-1zm-1-3l-2-8h-2l4 18h7l1-1 1-2v-2l-1-2-2-2h-1l-3-1h-1zM148 50h5l-1 4a16 16 0 000 2 20 20 0 00-1-2zm7-7l-1 5h-7l-3-5h-3l13 19 3-19zM162 43l1 8-3 10h3l2-6a15 15 0 000-1 14 14 0 002 1l5 6h2l-8-10-2-8zM188 52v1l1 2a11 11 0 00-2-3l-7-9-2 9a11 11 0 000 3 13 13 0 00-1-3l-4-9h-3l9 19 2-11a21 21 0 001-3 26 26 0 001 3l8 11V43h-3zM193 43l4 18h10l-1-2h-7l-1-5h7v-2h-7l-2-6h7v-3zM206 43l4 19 9-11a19 19 0 001-2l3 12h2l-4-18-8 11a10 10 0 00-2 2l-3-13zM234 59l-3-16h-3l4 16h-5l1 2h12l-1-2zM237 47l3 1 1-2h4l1 2c0 1 0 2-2 3l-4 3v3l2 3 4 1h3l2-2-3-2-1 2h-1l-2-1-1-1 2-3h1l3-3v-3a7 7 0 00-7-5l-4 1-1 3M258 43l4 18h3l-4-18zM265 43l4 19 9-11a19 19 0 001-2l3 12h3l-5-18-8 11a10 10 0 00-2 2l-3-13zM294 59l-4-16h-3l4 16h-5l1 2h12l-1-2zM297 43l4 18h9v-2h-7l-1-5h7l-1-2h-7l-1-6h7l-1-3zM315 54h3l1 2v2l-3 1zm-1-3l-2-8h-3l5 18h6l2-1v-2-2l-1-3-4-2 4-8h-3l-4 8zM323 43l4 18h10l-1-2h-7l-1-5h7v-2h-7l-2-9zM340 50h5l-1 4a16 16 0 000 2 22 22 0 00-1-2zm6-7l-1 5h-7l-3-5h-3l13 19 4-19zM367 57a6 6 0 01-4 2l-5-2c-2-1-3-3-3-5v-5l4-1h3l3 2-1-3a11 11 0 00-5-2l-4 1-2 2-2 3 1 3a12 12 0 004 7l3 2h7l2-1zM368 43l4 18h9v-2h-7l-1-5h7l-1-2h-7l-1-6h7l-1-3z" fill="#696a6a"/><path d="M316 76h-19l27 97h19zM306 170c-1 2-3 3-6 3H194l-5-19h96l-5-20h-97l-16-58h20l10 39h87c3 0 5 1 8 3l5 6 10 39c1 3 1 5-1 7M156 83c-1-4-4-7-8-7H48c-3 0-5 1-6 3s-2 4-1 7l24 87h20L63 95h77l22 78h19z" fill="#66686c"/><path d="M377 173l24-48-51-49z" fill="#27803b"/><path d="M359 173l25-48-51-49z" fill="#e9661c"/></g></svg>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://unpkg.com/qrcode@1.4.4/build/qrcode.js" charset="utf-8"></script>
  <script charset="utf-8">
  function $(sel) {
    return document.getElementById(sel);
  }

  function copyToClipboard() {
    // change btn text
    var link = $("copyLink");
    link.innerText = "Copied!";
    setTimeout(() => {
      // restore btn text
      link.innerText = "Copy Link";
    }, 1000);
    var input = $("sharelink");
    input.focus();
    input.select();
    document.execCommand("copy");
  }

  function renderQR(upiID, amount) {
    var upiString = "upi://pay?pa=" + upiID + "&am=" + amount;

    var opts = {
      errorCorrectionLevel: "H",
      margin: 1,
      scale: 8,
      color: {
        dark: "#580000",
        light: "#fff",
      },
    };

    $("appLink").href = upiString;

    QRCode.toDataURL(upiString, opts, function (err, dataUrl) {
      if (err) {
        alert("Sorry, Something went wrong while generating QR code");
        return;
      }
      $("outputImg").src = dataUrl;
    });
  }

  function genQR() {
    var upiID = $("upiID").value;
    var amount = $("fixedAmount").value;
    // var amount = "1"; // Default payment amount is set to 1 Rs

    location.hash = upiID;
    $("sharelink").value = location;

    renderQR(upiID, amount); // Include the default amount
    return false;
  }

  (function () {
    if (location.search.length) {
      location.search = "";
    }
    if (location.hash.length > 1) {
      var upiID = decodeURIComponent(location.hash.slice(1));
      $("upiID").value = upiID;
      genQR();
    }
  })();

</script>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/github-fork-ribbon-css/0.2.3/gh-fork-ribbon.min.css" />

    <!--<a class="github-fork-ribbon" href="https://github.com/harish2704/UPI-QR-code-from-bank-details" data-ribbon="Fork me on GitHub" title="Fork me on GitHub">Fork me on GitHub</a>-->
  </body>
</html>
