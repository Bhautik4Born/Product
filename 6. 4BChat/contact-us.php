<?php
    include './include/header.php';
    include './platform/include/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $mobile_number = $_POST["mobile_number"];

    $query = "INSERT INTO AI_contact (name,  email, mobile_number, message)
              VALUES (?, ?, ?, ?)";

    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $mobile_number, $message);

    if (mysqli_stmt_execute($stmt)) {
        $response = "<script>alert('Thank You You Contact Our Team. We can Contact You immediately');window.location.href = 'contact-us.php';</script>";
    } else {
        $response = "<script>Error inserting data: </script>" . mysqli_error($con);
    }

    mysqli_stmt_close($stmt);
    echo $response;
}

?>


<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.net/mega_bot/html/contact-us.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Oct 2023 17:34:03 GMT -->
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
    <link rel="preconnect" href="../../../fonts.googleapis.com/index.html">
    <link rel="preconnect" href="../../../fonts.gstatic.com/index.html" crossorigin>
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

<body class="inner-bg">


    <!-- breadcrumb section start -->
    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="breadcrumb-content">
                        <div>
                            <h2><img src="./assets/images/breadcrumb-title.png" class="img-fluid"
                                    alt="title-effect">Contact us
                            </h2>
                            <p><i class="ri-subtract-line"></i>Email us with any questions, we would be happy to answer
                                your question. </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-lg-inline-block d-none">
                    <div class="breadcrumb-img">
                        <img src="https://themes.pixelstrap.net/mega_bot/assets/svg/contact-vector.svg" class="img-fluid" alt="service">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb section end -->


    <!-- contact section start -->
    <section class="contact-section pb-md-5 pb-0">
        <div class="container">
            <!--<ul class="contact-box">-->
            <!--    <li>-->
            <!--        <div class="contact-icon">-->
            <!--            <img src="https://themes.pixelstrap.net/mega_bot/assets/svg/contact/message.svg" class="img-fluid" alt="message">-->
            <!--        </div>-->
            <!--        <h3>Mail id</h3>-->
            <!--        <h4>contact@4BornAI.com</h4>-->
            <!--        <h4>inquiry@4BornAI.com</h4>-->
            <!--    </li>-->
            <!--    <li>-->
            <!--        <div class="contact-icon">-->
            <!--            <img src="https://themes.pixelstrap.net/mega_bot/assets/svg/contact/contact.svg" class="img-fluid" alt="message">-->
            <!--        </div>-->
            <!--        <h3>Contact no.</h3>-->
            <!--        <h4>(406) 555-0120</h4>-->
            <!--        <h4>(684) 555-0102</h4>-->
            <!--    </li>-->
            <!--    <li>-->
            <!--        <div class="contact-icon">-->
            <!--            <img src="https://themes.pixelstrap.net/mega_bot/assets/svg/contact/route.svg" class="img-fluid" alt="message">-->
            <!--        </div>-->
            <!--        <h3>Address 1</h3>-->
            <!--        <h4>2118 Thornridge Cir.</h4>-->
            <!--        <h4>Syracuse, Connecticut 35624</h4>-->
            <!--    </li>-->
            <!--    <li>-->
            <!--        <div class="contact-icon">-->
            <!--            <img src="https://themes.pixelstrap.net/mega_bot/assets/svg/contact/address.svg" class="img-fluid" alt="message">-->
            <!--        </div>-->
            <!--        <h3>Address 2</h3>-->
            <!--        <h4>2972 Westheimer Rd. Santa </h4>-->
            <!--        <h4>Ana, Illinois 85486 </h4>-->
            <!--    </li>-->
            <!--</ul>-->
            <div class="contact-details">
                <div class="row g-lg-5 g-4">
                    <div class="col-xl-7 col-lg-6">
                        <form class="auth-form" action="" method="post">
                            <div class="row g-4">
                                <div class="col-sm-6">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" name="name" required>
                                </div>
                                <div class="col-sm-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                                <div class="col-12">
                                    <label for="phoneNumber" class="form-label">Phone number</label>
                                    <input type="number" class="form-control" name="mobile_number" required>
                                </div>
                                <div class="col-12">
                                    <label for="message" class="form-label">Additional Message</label>
                                    <textarea class="form-control" rows="3" name="message" required></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn-solid">Send message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-xl-5 col-lg-6">
                        <div class="map-sec">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.8206094730856!2d72.09843820000001!3d21.744638899999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395f50e77608c465%3A0x9e2fc56de78c5b2a!2s4Born%20Solution!5e0!3m2!1sen!2s!4v1648141071245" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact section end -->


    <!-- contact us start -->
    <section class="info-section section-b-space">
        <div class="container">
            <div class="info-box" data-aos="fade-in" data-aos-duration="1000" data-aos-delay="100">
                <div class="hand-effect d-md-block d-none">
                    <img src="https://themes.pixelstrap.net/mega_bot/assets/svg/hand.svg" class="img-fluid left-hand" alt="hand">
                    <img src="https://themes.pixelstrap.net/mega_bot/assets/svg/hand.svg" class="img-fluid right-hand" alt="hand">
                </div>
                <h2>Ready to <span>move <img src="https://themes.pixelstrap.net/mega_bot/assets/svg/title-effect.svg" class="img-fluid"
                            alt="title-effect"></span>
                    ahead?</h2>
                <p>With the help of our ground-breaking AI tool, unlock the potential of cutting-edge AI technology and
                    increase your productivity to new heights. Embrace the
                    future today and let our AI tool redefine what's possible for you.</p>
                <ul>
                    <li><img src="https://themes.pixelstrap.net/mega_bot/assets/svg/tick.svg" class="img-fluid" alt="tick">Free images for lifetime</li>
                    <li><img src="https://themes.pixelstrap.net/mega_bot/assets/svg/tick.svg" class="img-fluid" alt="tick">Get details on any topic</li>
                    <li><img src="https://themes.pixelstrap.net/mega_bot/assets/svg/tick.svg" class="img-fluid" alt="tick">Quick advisor to help you</li>
                    <li><img src="https://themes.pixelstrap.net/mega_bot/assets/svg/tick.svg" class="img-fluid" alt="tick">15+ category to explore</li>
                </ul>
                <a data-cursor="pointer" class="btn-arrow" href="contact-us.php">
                    <div class="icon-arrow"><i class="iconsax" data-icon="arrow-up"></i></div>Contact us now
                </a>
            </div>
        </div>
    </section>
    <!-- contact us end -->
    
     <?php
            include './include/footer.php';
        ?>

    <!-- Tap To Top Button Start -->
    <div class="tap-to-top-box hide">
        <button class="tap-to-top-button"><i class="iconsax" data-icon="chevron-up"></i></button>
    </div>
    <!-- Tap To Top Button End -->


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

    <!-- header sticky js -->
    <script src="./assets/js/header_sticky.js"></script>

    <!-- iconsax js -->
    <script src="./assets/js/iconsax.js"></script>

    <!-- Theme js-->
    <script src="./assets/js/script.js"></script>

</body>


<!-- Mirrored from themes.pixelstrap.net/mega_bot/html/contact-us.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Oct 2023 17:34:03 GMT -->
</html>