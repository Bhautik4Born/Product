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
    <title>API Buy - 4Born Solutions</title>
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
    <!-- SVG Preloader Starts -->
    <div id="preloader">
        <div id="preloader-content">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="150px" height="150px" viewBox="100 100 400 400" xml:space="preserve">
                <filter id="dropshadow" height="130%">
                <feGaussianBlur in="SourceAlpha" stdDeviation="5"/>
                <feOffset dx="0" dy="0" result="offsetblur"/>
                <feFlood flood-color="red"/>
                <feComposite in2="offsetblur" operator="in"/>
                <feMerge>
                <feMergeNode/>
                <feMergeNode in="SourceGraphic"/>
                </feMerge>
                </filter>          
                <path class="path" fill="#000000" d="M446.089,261.45c6.135-41.001-25.084-63.033-67.769-77.735l13.844-55.532l-33.801-8.424l-13.48,54.068
                    c-8.896-2.217-18.015-4.304-27.091-6.371l13.568-54.429l-33.776-8.424l-13.861,55.521c-7.354-1.676-14.575-3.328-21.587-5.073
                    l0.034-0.171l-46.617-11.64l-8.993,36.102c0,0,25.08,5.746,24.549,6.105c13.689,3.42,16.159,12.478,15.75,19.658L208.93,357.23
                    c-1.675,4.158-5.925,10.401-15.494,8.031c0.338,0.485-24.579-6.134-24.579-6.134l-9.631,40.468l36.843,9.188
                    c8.178,2.051,16.209,4.19,24.098,6.217l-13.978,56.17l33.764,8.424l13.852-55.571c9.235,2.499,18.186,4.813,26.948,6.995
                    l-13.802,55.309l33.801,8.424l13.994-56.061c57.648,10.902,100.998,6.502,119.237-45.627c14.705-41.979-0.731-66.193-31.06-81.984
                    C425.008,305.984,441.655,291.455,446.089,261.45z M368.859,369.754c-10.455,41.983-81.128,19.285-104.052,13.589l18.562-74.404
                    C306.28,314.65,379.774,325.975,368.859,369.754z M379.302,260.846c-9.527,38.187-68.358,18.781-87.442,14.023l16.828-67.489
                    C327.767,212.14,389.234,221.02,379.302,260.846z"/>       
            </svg>
        </div>
    </div>
    <!-- SVG Preloader Ends -->
    <!-- Live Style Switcher Starts - demo only -->
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
            <label><input class="dark_switch" type="radio" name="color_style" id="is_light" value="light" /> Light</label>

            <hr />

            <p>LAYOUT STYLE</p>
            <label><input class="boxed_switch" type="radio" name="layout_style" id="is_wide" value="wide" checked="checked" /> Wide</label>
            <label><input class="boxed_switch" type="radio" name="layout_style" id="is_boxed" value="boxed" /> Boxed</label>

            <hr />

            <a href="#" class="custom-button purchase">Purchase</a>
            <div id="hideSwitcher">&times;</div>

        </div>
    </div>
    <!--<div id="showSwitcher" class="styleSecondColor"><i class="fa fa-cog fa-spin"></i></div>-->
    <!-- Live Style Switcher Ends - demo only -->
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
                                <h2 class="title-head">API <span>Buy</span></h2>
                                <!-- Title Ends -->
                                <hr>
                                <!-- Breadcrumb Starts -->
                                <ul class="breadcrumb">
                                    <li><a href="index-2.html"> home</a></li>
                                    <li>Buy API</li>
                                </ul>
                                <!-- Breadcrumb Ends -->
                            </div>
                        </div>
                        <!-- Section Title Ends -->
                    </div>
                </div>
            </div>
        </section>
        <!-- Section Shopping Cart Starts -->
        <section class="shop-cart">
            <!--Start section-->
            <div class="container">
                <div class="row">
					<!-- Purchased Products Starts -->
                    <div class="col-xs-12 table-responsive">
                         <table class="table order text-center">
                        <!--<table id="example" class="table table-striped table-bordered order text-center" style="width:100%">-->
                            <colgroup>
                                <col class="col-xs-1">
                                <col class="col-xs-2 col-sm-5">
                                <col class="col-xs-2">
                                <col class="col-xs-1 col-sm-2">
                                <!--<col class="col-xs-2 col-sm-2">-->
                                <!--<col class="col-xs-2 col-sm-2">-->
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Stock Name</th>
                                    <th>Stock ID</th>
                                    <th>Quantity</th>
                                    <!--<th>Add</th>-->
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Check if a user is logged in and has an 'id' session variable
                                if (isset($_SESSION['id'])) {
                                    // User is logged in
                                    $user_id = $_SESSION['id'];
                                
                                    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_to_cart'])) {
                                        $product_id = $_POST['product_id'];
                                        $quantity = $_POST['quantity'];
                                
                                        // Query to check if the product is already in the cart for this user
                                        $check_query = "SELECT * FROM market_cart WHERE user_id = $user_id AND product_id = $product_id";
                                        $check_result = mysqli_query($con, $check_query);
                                
                                        if (mysqli_num_rows($check_result) > 0) {
                                            // Product is already in the cart, so update the quantity
                                            $row = mysqli_fetch_assoc($check_result);
                                            $new_quantity = $row['quantity'] + $quantity;
                                            $total = $row['price'] * $new_quantity;
                                
                                            // Update the existing cart record
                                            $update_query = "UPDATE market_cart 
                                                             SET quantity = $new_quantity, total = $total 
                                                             WHERE user_id = $user_id AND product_id = $product_id";
                                            
                                            if (mysqli_query($con, $update_query)) {
                                                // echo "<script>alert('Product added to cart successfully!');</script>";
                                            } else {
                                                // echo "Error updating product quantity in the cart: " . mysqli_error($con);
                                            }
                                        } else {
                                            // Product is not in the cart, so insert it as a new record
                                            $query = "SELECT * FROM market_product WHERE id = $product_id";
                                            $result = mysqli_query($con, $query);
                                
                                            if ($row = mysqli_fetch_assoc($result)) {
                                                $product_name = $row['name'];
                                                $product_price = $row['price'];
                                                $total = $product_price * $quantity;
                                
                                                // Insert the product into the market_cart table
                                                $insert_query = "INSERT INTO market_cart (user_id, product_id, name, price, quantity, total)
                                                                 VALUES ($user_id, $product_id, '$product_name', $product_price, $quantity, $total)";
                                                if (mysqli_query($con, $insert_query)) {
                                                    // echo "<script>alert('Product added to cart successfully!');</script>";
                                                } else {
                                                    // echo "Error adding product to cart: " . mysqli_error($con);
                                                }
                                            } else {
                                                echo "Product not found in the database.";
                                            }
                                        }
                                    }
                                }
                                
                                // Assuming you have a query to retrieve data from the database
                                $query = "SELECT * FROM market_product";
                                $result = mysqli_query($con, $query);
                                
                                if (mysqli_num_rows($result) > 0) {
                                    $counter = 1; // Initialize a counter
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                            <tr class="animals">
                                <td><?php echo $counter; ?></td>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['stock_id']; ?></td>
                                <td>
                                    <div class="quantity">
                                        <!--<input type="button" value="&#8249;" class="qtyminus" data-field="quantity" />-->
                                        <input type="text" name="quantity" value="<?php echo $row['quantity']; ?>" class="qty" />
                                        <!--<input type="button" value="&#8250;" class="qtyplus" data-field="quantity" />-->
                                    </div>
                                </td>
                            </tr>
                            <?php
                                    $counter++; // Increment the counter
                                }
                            } else {
                            ?>
                                <tr><td colspan="5">No products found in the database.</td></tr>
                            <?php
                            }
                            ?>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </section>
	
      
        <?php include "include/footer.php";?>
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

    </div>
    <!-- Wrapper Ends -->
</body>


</html>