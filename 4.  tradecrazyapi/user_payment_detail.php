<?php
// session_start();
include "include/config.php";
include "include/header.php";

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== TRUE) {
  echo "<script>" . "window.location.href='./login.php';" . "</script>";
  exit;
}

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
    <style>
        input.form-control.disable{
            background-color:black;
        }
    </style>

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
                                    <li><a href="index.php"> home</a></li>
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
        
        <div class="container">
  <div class="row min-vh-100 justify-content-center align-items-center">
    <div class="col-lg-5">
      <?php
      if (!empty($login_err)) {
        echo "<div class='alert alert-danger'>" . $login_err . "</div>";
      }
      ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = array();
    $payment_id = $_POST['payment_id'];
    $user_login = $_POST['user_login'];
    $user_id = $_SESSION['id'];
    $photo_err = "";

    if (empty($payment_id)) {
        $errors[] = "Payment ID is required.";
    }

    if (empty($user_login)) {
        $errors[] = "Email is required.";
    }

    if (empty($_FILES['photo']['name'])) {
        $errors[] = "Screenshot is required.";
    } else {
        $tmp_name = $_FILES["photo"]["tmp_name"];
        $file_name = $_FILES["photo"]["name"];
        $file_type = $_FILES["photo"]["type"];

        $allowed_types = array("image/jpeg", "image/png","image/jpg");
        if (!in_array($file_type, $allowed_types)) {
            $photo_err = "Only JPEG, JPG, and PNG images are allowed.";
            $errors[] = $photo_err;
        }

        if (strpos($file_name, ' ') !== false) {
            $errors[] = "Please enter an image name without spaces.";
        }
    }

    if (empty($errors)) {
        $upload_directory = "include/image/";
        $upload_path = $upload_directory . $file_name;

        if (move_uploaded_file($tmp_name, $upload_path)) {
            $to = 'sorathiyamer3@gmail.com';
            $subject = "User Entered Details";

            // $message = "Screenshot URL: $upload_path\n\n";
            $message .= '<div style="font-family: Arial, sans-serif;">';
            $message .= '<div style="border: 1px solid #ddd; background-color: #fff; padding: 20px; color: #222; font-family: Arial, sans-serif; line-height: 1.5; text-align: center;">';
            $message .= '<h2 style="color:#fd961a;">Payment Confirmation in Email is ' . $user_login . '</h2>';
            $message .= '<p style="color:#777; margin-bottom: 30px;">User Screenshot is: </p>';
            $message .= '<img src="https://tradecrazyapi.4born.info/' . $upload_path . '" alt="4Born Solutions" style="max-width: 350px; margin-bottom: 10px;">';
            $message .= '<p style="color:#777; margin-bottom: 30px;">User Payment ID is: <h2 style="color:#fd961a;">' . $payment_id . '</h2></p>';
            $message .= '<h2 style="color:#222; margin-bottom: 10px;">Notice: This is a Payment Confirmation mail</h2>';
            $message .= "<a href='https://4born.info' style='text-decoration:none;'><button style='background-color: #fd961a; color: #fff; border: none; padding: 10px 20px; font-size: 18px; border-radius: 5px; box-shadow: 2px 2px 5px #ddd; transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;'>Contact</button></a>";
            $message .= '</div>';

            $headers = "From: 4born" . "\r\n" .
                "Reply-To: 4born" . "\r\n" .
                "Content-Type: text/html;charset=utf-8" . "\r\n" .
                "X-Mailer: PHP/" . phpversion();

            $success = mail($to, $subject, $message, $headers);

          if ($success) {
    $user_id = $_SESSION['id'];
    
  if (empty($username_err) && empty($email_err) && empty($mobile_err) && empty($password_err)) {
    // First, retrieve rows from market_cart matching the user_id
    $cart_sql = "SELECT name, price FROM market_cart WHERE user_id = ?";
    if ($cart_stmt = mysqli_prepare($con, $cart_sql)) {
        mysqli_stmt_bind_param($cart_stmt, "s", $user_id);
        mysqli_stmt_execute($cart_stmt);
        $cart_result = mysqli_stmt_get_result($cart_stmt);

        $product_ids = array();
        $total_amount = 0;

        // Loop through the matching rows in market_cart
        while ($cart_row = mysqli_fetch_assoc($cart_result)) {
            $product_name = $cart_row['name'];
            $product_price = $cart_row['price'];

            // Calculate and update the total amount
            $total_amount += $product_price;

            // Store product names in an array
            $product_ids[] = $product_name;
        }

        // Close the cart statement
        mysqli_stmt_close($cart_stmt);

        // Insert data into market_confirm_payment
        $payment_id = $payment_id;
        $file = $upload_path;

        $payment_sql = "INSERT INTO market_confirm_payment (payment_id, user_id, email, image, amount, product_id) VALUES (?, ?, ?, ?, ?, ?)";
        if ($stmt = mysqli_prepare($con, $payment_sql)) {
            $user_login = $user_login;
            $payment_id = $payment_id;
            $user_id = $_SESSION['id'];
            $file = $upload_path;

            // Convert the product_ids array to a comma-separated string
            $product_ids_str = implode(', ', $product_ids);

            mysqli_stmt_bind_param($stmt, "ssssds", $payment_id, $user_id, $user_login, $file, $total_amount, $product_ids_str);

            if (mysqli_stmt_execute($stmt)) {
                // Successfully stored in market_confirm_payment, now delete from market_cart
                $delete_cart_sql = "DELETE FROM market_cart WHERE user_id = ?";
                if ($delete_cart_stmt = mysqli_prepare($con, $delete_cart_sql)) {
                    mysqli_stmt_bind_param($delete_cart_stmt, "s", $user_id);
                    mysqli_stmt_execute($delete_cart_stmt);
                    mysqli_stmt_close($delete_cart_stmt);
                }

                echo "<script>window.location.href='./user_payment_detail.php';</script>";
                echo "<div class='alert alert-success'>Thank you for your submission. We have received your details.</div>";
                echo "<div class='alert alert-success'>Our Team will contact you within 24 hours.</div>";
                exit;
            } else {
                // Handle the case where insertion into market_confirm_payment fails
            }

            mysqli_stmt_close($stmt);
        }
    }
}

    
    echo "<div class='alert alert-success'>Thank you for your submission. We have received your details.</div>";
    echo "<div class='alert alert-success'>Our Team will contact you within 24 hours.</div>";
} else {
                echo "<div class='alert alert-danger'>Oops! An error occurred while processing your submission.</div>";
            }
        } else {
            echo "<div class='alert alert-danger'>Failed to move the uploaded file.</div>";
        }
    } else {
        foreach ($errors as $error) {
            echo "<div class='alert alert-danger'>" . $error . "</div>";
        }
    }
}


?>

        <section class="services">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 service-box">
                        <div>
                            <div class="form-wrap border rounded p-4">
                                <h1 style="color:#fd961a;">Transaction details</h1>
                                <p>Please enter your payment details</p>
                            
                                <!-- The HTML form -->
                                <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data" novalidate>
                                    <div class="mb-3 my-2">
                                        <label for="payment_id" class="form-label" style="color:#fd961a">Payment ID</label>
                                        <input type="text" class="form-control" name="payment_id" id="payment_id" value="<?= isset($payment_id) ? htmlspecialchars($payment_id) : ''; ?>" required>
                                        <small class="text-danger"><?= isset($payment_id_err) ? $payment_id_err : ''; ?></small>
                                    </div>
                                    <div class="mb-3 my-2">
                                        <label for="user_login" class="form-label" style="color:#fd961a">Email</label>
                                        <input type="email" class="form-control" name="user_login" id="user_login" value="<?= isset($user_login) ? htmlspecialchars($user_login) : ''; ?>" required>
                                        <small class="text-danger"><?= isset($user_login_err) ? $user_login_err : ''; ?></small>
                                    </div>
                                    <div class="mb-2 my-2">
                                        <label for="photo" class="form-label" style="color:#fd961a">Screenshot to confirm Payment</label>
                                        <input type="file" class="form-control" name="photo" id="photo" required>
                                        <small class="text-danger"><?= isset($photo_err) ? $photo_err : ''; ?></small>
                                    </div>
                                    <div class="mb-3 my-2">
                                        <input type="submit" class="btn btn-warning" style="color: #000;background-color: #ffc107;border-color: #ffc107;font-size: 20px;margin-top: 1rem;width:100%;" name="submit" value="Submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
			        <div class="login-img">
			            <img src="./images/SHOPPING-CART.svg" style="width: -webkit-fill-available;" class="img-fluid">
			        </div>
                    </div>
                </div>
            </div>
        </section>
</div>
</div>
</div>
      
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