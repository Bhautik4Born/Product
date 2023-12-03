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
    <title>Shopping Cart - 4Born</title>
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
                                <h2 class="title-head">Shopping <span>Cart</span></h2>
                                <!-- Title Ends -->
                                <hr>
                                <!-- Breadcrumb Starts -->
                                <ul class="breadcrumb">
                                    <li><a href="index-2.html"> home</a></li>
                                    <li>Shopping Cart</li>
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
                            <colgroup>
                                <col class="col-xs-1">
                                <col class="col-xs-2 col-sm-5">
                                <col class="col-xs-2">
                                <col class="col-xs-1 col-sm-2">
                                <col class="col-xs-2 col-sm-2">
                            </colgroup>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (isset($_SESSION['id'])) {
                                    $user_id = $_SESSION['id'];
                            
                                    $cart_query = "SELECT id, name, price, quantity, total FROM market_cart WHERE user_id = $user_id";
                                    $cart_result = mysqli_query($con, $cart_query);
                            
                                    if (mysqli_num_rows($cart_result) > 0) {
                                        while ($cart_row = mysqli_fetch_assoc($cart_result)) {
                                            $cart_item_id = $cart_row['id']; // Get the cart item ID
                                ?>
                                            <tr>
                                                <td class="text-center">
                                                    <a href="#" class="fa fa-trash icon-delete-product" data-item-id="<?php echo $cart_item_id; ?>"></a>
                                                </td>
                                                <td class="text-left"><h6 class="product"><?php echo $cart_row['name']; ?></h6></td>
                                                <td class="text-left"><span class="price">₹<?php echo $cart_row['price']; ?></span></td>
                                                <td class="text-left">
                                                    <div class="quantity">
                                                        <!--<input type="button" value="&#8249;" class="qtyminus" data-field="quantity" />-->
                                                        <input type="text" name="quantity" value="1" class="qty" />
                                                        <!--<input type="button" value="&#8250;" class="qtyplus" data-field="quantity" />-->
                                                    </div>
                                                </td>
                                                <td class="text-left"><span class="price">₹<?php echo $cart_row['price']; ?></span></td>
                                            </tr>
                                <?php
                                        }
                                    } else {
                                        echo "<tr><td colspan='5'>No items in the cart.</td></tr>";
                                    }
                                } else {
                                    echo "<tr><td colspan='5'>Please log in to view your cart.</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
					<!-- Purchased Products Ends -->
					<!-- Update Cart Starts -->
                    <div class="col-xs-12 col-sm-5"><a href="api_list.php" class="btn btn-primary btn-update-cart">Add More</a></div>
					<!-- Update Cart Ends -->
					<!-- Cart Totals Starts -->
                    <div class="col-xs-12 offset-5">
                        <h4 class="title-totals">Cart Totals</h4>
                        <table class="table cart-total">
                            <colgroup>
                                <col class="col-xs-6">
                                <col class="col-xs-6">
                            </colgroup>
                            <thead>
                                <!--<tr class="section-border">-->
                                <!--    <th>price without tax</th>-->
                                <!--    <th class="text-right"><span class="price">$589,31</span></th>-->
                                <!--</tr>-->
                               <tr>
                                    <th class="text-start">Total Product</th>
                                    <th class="total text-right"><span class="price">
                                        <?php
                                        if (isset($_SESSION['id'])) {
                                            $user_id = $_SESSION['id'];
                                            
                                            // Query to count the occurrences of the user_id in market_cart table
                                            $count_query = "SELECT COUNT(*) AS user_count FROM market_cart WHERE user_id = $user_id";
                                            $count_result = mysqli_query($con, $count_query);
                                            
                                            if ($count_row = mysqli_fetch_assoc($count_result)) {
                                                $user_count = $count_row['user_count'];
                                                echo "$user_count";
                                            } else {
                                                echo "0 items in the cart."; // Display if no items found
                                            }
                                        } else {
                                            echo "User is not logged in.";
                                        }
                                        ?>
                                    </span></th>
                                </tr>

                                 <tr>
                                    <th>Total</th>
                                    <th class="total text-right"><span class="price">
                                        <?php
                                        if (isset($_SESSION['id'])) {
                                            $user_id = $_SESSION['id'];
                                
                                            // Query to calculate the total of cart items for the current user
                                            $total_query = "SELECT SUM(price) AS cart_total FROM market_cart WHERE user_id = $user_id";
                                            $total_result = mysqli_query($con, $total_query);
                                            $cart_total = 0;
                                
                                            if ($total_row = mysqli_fetch_assoc($total_result)) {
                                                $cart_total = $total_row['cart_total'];
                                            }
                                            $without_offer =  number_format($cart_total, 2);
                                            echo $without_offer;
                                          
                                        ?>
                                    </span></th>
                                </tr>

                            </thead>
                        </table>
                        
					<!-- Coupon Input Starts -->
                    <div class="col-xs-12 col-sm-7 text-center my-2" style="padding: 0;">
                        <form method="POST">
                            <div class="my-2">
                                <input type="text" name="coupon_code" placeholder="COUPON CODE" class="form-control">
                                <button type="submit" class="btn btn-primary btn-coupon" name="apply_coupon">Apply Coupon</button>
                            </div>
                        </form>
                        
                        <?php
                        $payment_amount = 0;
                            if (isset($_POST['apply_coupon'])) {
                                // Get the entered coupon code
                                $entered_code = mysqli_real_escape_string($con, $_POST['coupon_code']);
                            
                                // Query to check if the entered code exists and is active
                                $check_coupon_query = "SELECT * FROM market_coupon WHERE code = '$entered_code'";
                                $coupon_result = mysqli_query($con, $check_coupon_query);
                            
                                if ($coupon_result) {
                                    if (mysqli_num_rows($coupon_result) > 0) {
                                        $coupon_data = mysqli_fetch_assoc($coupon_result);
                                        $coupon_status = $coupon_data['status'];
                                        $coupon_discount = $coupon_data['discount'];
                            
                                        if ($coupon_status == 'Active') {
                                            echo '<script>alert("Your Discount is Active. Enjoy!");</script>';
                                            
                                            // Assuming you have defined $cart_total correctly
                                            $discount_count = (float)$cart_total;
                            
                                            $discount_to_subtract = ($discount_count * $coupon_discount) / 100;
                            
                                            // Display the result
                                            $payment_amount = number_format(($discount_count - $discount_to_subtract), 2);
                                            echo 'You Need to Pay Only ₹' . $payment_amount;

                                        } elseif ($coupon_status == 'Deactive') {
                                            echo '<script>alert("Coupon Code is Expired. ");</script>';
                                        }
                                    } else {
                                        echo '<script>alert("Your Coupon Code is Invalid.");</script>';
                                    }
                                } else {
                                    echo '<script>alert("Error checking the coupon code.");</script>';
                                }
                            }
                            ?>


                    </div>
					<!-- Coupon Input Ends -->
					<form method="POST" action="pay.php" class="my-2">
					    <input type="hidden" name="without_off_amount" value="<?php echo $payment_amount; ?>">
					    <input type="hidden" name="amount" value="<?php echo $without_offer; ?>">
                        <divhttps://tradecrazyapi.4born.info/shopping-cart.php><button class="btn btn-primary pull-right btn-proceed" type="submit" style="    margin-right: 0;">Proceed to Buy</button></div>
					</form>
                    </div>
					<!-- Cart Totals Ends -->
                </div>
            </div>
        </section>
		<!-- Section Shopping Cart Ends -->
      
        <?php include "include/footer.php";?> 
<script>
    // JavaScript to handle deleting cart items
    document.querySelectorAll('.icon-delete-product').forEach(function(deleteButton) {
        deleteButton.addEventListener('click', function(e) {
            e.preventDefault();
            var cartItemId = this.getAttribute('data-item-id');

            // Send an AJAX request to delete the cart item
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'delete_cart_item.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Reload the page or update the cart view as needed
                    location.reload(); // Reload the page for simplicity
                }
            };
            xhr.send('cart_item_id=' + cartItemId);
        });
    });
</script>
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

<?php
 
    } else {
        echo "$0.00"; // Display $0.00 if the user is not logged in
    }
?>