<?php
session_start();
include "include/config.php";
include "include/header.php";


if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
  echo "<script>" . "window.location.href='./login.php';" . "</script>";
  exit;
}

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
        <h3 class="text-center">Your a API History</h3>
        <p class="text-center">Your a API Detail to Which is Active or Deactive and API Detail</p>
        <div class="row pricing-tables-content pricing-page">
          <div class="pricing-container">
            <ul class="pricing-list bounce-invert">
              <li class="col-xs-6 col-sm-6 col-md-3 col-lg-7">
                <ul class="pricing-wrapper">
                  <li>
                    <header class="pricing-header">
                      <h2>Active a API list</h2><br>
                       
                    </header>
                    <footer class="pricing-footer">
                      <a href="active-api.php" class="btn btn-primary">Read More</a>
                    </footer>
                  </li>
                </ul>
              </li>
              <li class="col-xs-6 col-sm-6 col-md-3 col-lg-5">
                <ul class="pricing-wrapper">
                  <li>
                    <header class="pricing-header">
                      <h2>Deactive a API List</h2>
                      <div class="price" style="display:flex;">
                         
                      </div>
                    </header>
                    <footer class="pricing-footer">
                      <!--<a href="#" class="btn btn-primary">More Informations</a>-->
                        <a href="deactive-api.php" class="btn btn-primary">Read More</a>
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