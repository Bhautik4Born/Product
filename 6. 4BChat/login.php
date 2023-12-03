<?php
    include './platform/include/config.php';
    
    session_set_cookie_params(172800); // 172800 seconds = 48 hours
session_start();

    
if (isset($_SESSION["loggedin"]) == TRUE) {
  echo "<script>" . "window.location.href='./home.php'" . "</script>";
  exit;
}


// if (isset($_SESSION['loggedin'])) {
//     header('Location: ./home.php');
//     exit;
// }

require 'google-api/vendor/autoload.php';

// Creating new google client instance
$client = new Google_Client();

// Enter your Client ID
$client->setClientId('1001365060068-tfmonue5da5utcf031ss3uaoiu2bnc3k.apps.googleusercontent.com');
// Enter your Client Secrect
$client->setClientSecret('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');
// Enter the Redirect URL
$client->setRedirectUri('https://4bchat.4born.info/login.php');

// Adding those scopes which we want to get (email & profile Information)
$client->addScope("email");
$client->addScope("profile");


if (isset($_GET['code'])) :

    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);

    if (!isset($token["error"])) {

        $client->setAccessToken($token['access_token']);

        // getting profile information
        $google_oauth = new Google_Service_Oauth2($client);
        $google_account_info = $google_oauth->userinfo->get();

        // Storing data into database
        $id = mysqli_real_escape_string($con, $google_account_info->id);
        $full_name = mysqli_real_escape_string($con, trim($google_account_info->name));
        $email = mysqli_real_escape_string($con, $google_account_info->email);
        $profile_pic = mysqli_real_escape_string($con, $google_account_info->picture);
        function generateUniqueId() {
            $prefix = "4BCBorn";
            $currentMonth = date("M");
            $currentYear = substr(date("Y"), -2);
            $randomNumber = mt_rand(1000, 9999); // Generate a random 4-digit number
            $suffix = "BH";
        
            $uniqueId = $prefix . $currentMonth . $currentYear . $randomNumber . $suffix;
        
            return $uniqueId;
        }
            
            $uniqueId = generateUniqueId();

        // checking user already exists or not
        $get_user = mysqli_query($con, "SELECT `google_id` FROM `AI_login_google` WHERE `google_id`='$id'");
        if (mysqli_num_rows($get_user) > 0) {

            $_SESSION['loggedin'] = $id;
            $_SESSION['id'] = $id;
            $_SESSION['google_id'] = $id;
            header('Location: ./home.php');
            exit;
        } else {

            // if user not exists we will insert the user
            $insert = mysqli_query($con, "INSERT INTO `AI_login_google`(`google_id`,`name`,`email`,`profile_image`,`license_key`) VALUES('$id','$full_name','$email','$profile_pic','$uniqueId')");

            if ($insert) {
                $_SESSION['loggedin'] = $id;
                $_SESSION['id'] = $id;
                $_SESSION['google_id'] = $id;
                header('Location: ./home.php');
                exit;
            } else {
                echo "Sign up failed!(Something went wrong).";
            }
        }
    } else {
        header('Location: login.php');
        exit;
    }

else :
    // Google Login Url = $client->createAuthUrl(); 
?>


<!DOCTYPE html>
<html lang="en">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="4Bchat AI">
    <meta name="keywords" content="4Bchat AI">
    <meta name="author" content="4Bchat AI">
    <link rel="icon" href="./assets/images/favicon.png" type="image/x-icon" />
    <link rel="shortcut icon" href="./assets/images/favicon.png" type="image/x-icon" />
    <title>4Bchat AI</title>

    <!--Google font-->
    <link rel="preconnect" href="../../../fonts.googleapis.com/index.php">
    <link rel="preconnect" href="../../../fonts.gstatic.com/index.php" crossorigin>
    <link href="../../../fonts.googleapis.com/css2c418.css?family=Outfit:wght@400;600;700;900&amp;display=swap" rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="./assets/css/vendors/bootstrap.css">

    <!-- remixicon css -->
    <link rel="stylesheet" type="text/css" href="./assets/css/vendors/remixicon.css">

    <!-- iconsax css -->
    <link rel="stylesheet" type="text/css" href="./assets/css/vendors/iconsax.css" />

    <!-- animation css -->
    <link rel="stylesheet" type="text/css" href="./assets/css/vendors/aos.css">

    <!-- swiper slider css -->
    <link rel="stylesheet" type="text/css" href="./assets/css/vendors/swiper-bundle.min.css" />

    <!-- style css -->
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">



</head>

<body>


    <!-- login section start -->
    <section class="login-section">
        <!--<a href="index.php"><img src="./assets/images/logo.svg" class="img-fluid logo-auth" style="max-width:20%;"></a>-->
        <a href="index.php" class="head-logo">
            <img src="./assets/images/logo.svg" class="img-fluid" alt="logo">
            <!--<h2>4Born AI</h2>-->
        </a>
        <!--<a href="index.php"><h4>4Bchat AI</h4></a>-->
        <div class="row m-0">
            <div class="col-lg-7 d-lg-inline-block d-none p-0">
                <div class="login-animation">
                    <img src="https://themes.pixelstrap.net/mega_bot/assets/svg/auth/1.svg" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100"
                        class="img-fluid img-base" alt="">
                    <img src="https://themes.pixelstrap.net/mega_bot/assets/svg/auth/2.svg" data-aos="zoom-in-up" data-aos-duration="1000"
                        data-aos-delay="1000" class="img-fluid img-light" alt="">
                    <div class="img-face" data-aos-delay="2500" data-aos="flip-left" data-aos-easing="ease-out-cubic"
                        data-aos-duration="1000"> <img src="https://themes.pixelstrap.net/mega_bot/assets/svg/auth/3.svg" class="img-fluid" alt=""></div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-5 ms-auto p-0">
                <div class="login-box">
                    <div>
                        <h2>Welcome to <span>4Bchat AI !</span></h2>
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="login-tab" data-bs-toggle="tab"
                                    data-bs-target="#login-tab-pane" type="button" role="tab"
                                    aria-controls="login-tab-pane" aria-selected="true">Login</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="signup-tab" data-bs-toggle="tab"
                                    data-bs-target="#signup-tab-pane" type="button" role="tab"
                                    aria-controls="signup-tab-pane" aria-selected="false">signup</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="login-tab-pane" role="tabpanel"
                                aria-labelledby="login-tab" tabindex="0">
                                <form class="auth-form" action="./include/login.php" method="POST">
                                    <div class="mb-3 form-group">
                                        <i class="iconsax" data-icon="mail"></i>
                                        <label for="emailid" class="form-label">Email ID</label>
                                        <input type="email" placeholder="Enter your mail id" class="form-control" id="emailid" name="user_login">
                                    </div>
                                    <div class="mb-2 form-group">
                                        <i class="iconsax" data-icon="lock-2"></i>
                                        <label for="password" class="form-label">Password</label>
                                        <input placeholder="Enter your password" type="password" class="form-control" id="password" name="user_password">
                                    </div>
                                    <div class="text-end">
                                        <!--<a data-cursor="pointer" href="reset-password.php">Forget Password?</a>-->
                                    </div>
                                    <button class="btn-solid w-100 text-center mt-3">Log me
                                        in</button>
                                    <h4 class="text-title text-center mt-2">Don’t have an account ? <a
                                            data-cursor="pointer" onclick="signupClick()" href="javascript:void(0)">Sign
                                            up</a>
                                    </h4>
                                    <div class="divider">
                                        <h3>or sign in with</h3>
                                    </div>
                                    <ul class="social-btn">
                                        <li><a type="button" class="login-with-google-btn" href="<?php echo $client->createAuthUrl(); ?>"><img
                                                    src="https://themes.pixelstrap.net/mega_bot/assets/svg/google.svg" class="img-fluid">Continue with
                                                google</a></li>
                                       
                                    </ul>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="signup-tab-pane" role="tabpanel" aria-labelledby="signup-tab"
                                tabindex="0">
                                <form class="auth-form" action="./include/register.php" method="POST">
                                    <div class="mb-3 form-group">
                                        <i class="iconsax" data-icon="user-1"></i>
                                        <label for="name" class="form-label">User Name</label>
                                        <input type="name" placeholder="Enter your name" class="form-control" id="name" name="username" >
                                        <small class="text-danger fs-5"><?= $username_err; ?></small>
                                       
                                    </div>
                                    <div class="mb-3 form-group">
                                        <i class="iconsax" data-icon="mail"></i>
                                        <label for="emailid" class="form-label">Email ID</label>
                                        <input type="email" placeholder="Enter your mail id" class="form-control" id="emailid" name="email">
                                          <small class="text-danger fs-5"><?= $email_err; ?></small>
                                    </div>
                                    <div class="mb-3 form-group">
                                        <i class="iconsax" data-icon="lock-2"></i>
                                        <label for="number" class="form-label">Mobile Number</label>
                                        <input placeholder="Enter your Mobile Number" type="number" class="form-control" id="number" name="mobile_number" >
                                    </div>
                                    <div class="mb-3 form-group">
                                        <i class="iconsax" data-icon="lock-2"></i>
                                        <label for="password1" class="form-label">Password</label>
                                        <input placeholder="Enter your password" type="password" class="form-control" id="password1" name="password" >
                                         <small class="text-danger fs-5"><?= $password_err; ?></small>
                                    </div>
                                    <button data-cursor="pointer" class="btn-solid w-100 text-center mt-4">Sign
                                        up</button>
                                    <h4 class="text-title text-center mt-2">Already have an account <a
                                            data-cursor="pointer" onclick="loginClick()" href="javascript:void(0)">Sign
                                            in</a>
                                    </h4>
                                    <div class="divider">
                                        <h3>or sign in with</h3>
                                    </div>
                                    <ul class="social-btn">
                                        <li><a type="button" class="login-with-google-btn" href="<?php echo $client->createAuthUrl(); ?>"><img
                                                    src="https://themes.pixelstrap.net/mega_bot/assets/svg/google.svg" class="img-fluid">Continue with
                                                google</a></li>
                                       
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login section end -->


    <!--custom cursor start  -->
    <div id="cursor"></div>
    <div id="cursor-border"></div>
    <!--custom cursor start  -->


    <!-- Bootstrap js-->
    <script src="./assets/js/bootstrap.bundle.min.js"></script>

    <!-- slider js-->
    <script src="./assets/js/swiper-bundle.min.js"></script>
    <script src="./assets/js/custom-slider.js"></script>

    <!-- custom cursor -->
    <script src="./assets/js/custom-cursor.js"></script>

    <!-- aos animation -->
    <script src="./assets/js/aos.js"></script>
    <script src="./assets/js/custom-aos.js"></script>

    <!-- iconsax js -->
    <script src="./assets/js/iconsax.js"></script>

    <!-- tab js-->
    <script src="./assets/js/tab.js"></script>

    <!-- Theme js-->
    <script src="./assets/js/script.js"></script>

</body>


</html>

<?php endif; ?>