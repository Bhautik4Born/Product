<?php

include "../platform/include/config.php";

$username_err = $email_err = $password_err = "";
$username = $email = $password = $mobile_number = $profile = $current_date = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate and sanitize user input
    $username = htmlspecialchars($_POST["username"]);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $password = $_POST["password"];
    $mobile_number = $_POST["mobile_number"];
    $profile = 'platform/img/user/user.jpg';
    $current_date = date('d-m-Y');
    
    function generateUniqueId() {
    $prefix = "4BCBORN";
    $currentMonth = date("M");
    $currentYear = substr(date("Y"), -2);
    $randomNumber = mt_rand(1000, 9999); // Generate a random 4-digit number
    $suffix = "BH";

    $uniqueId = $prefix . $currentMonth . $currentYear . $randomNumber . $suffix;

    return $uniqueId;
    }
    
    $uniqueId = generateUniqueId();

    // Validate username
    if (empty($username)) {
        $username_err = "Please enter a username.";
        echo "<script>alert('Please enter a username.');</script>";
    }else {
        $sql = "SELECT id FROM AI_register WHERE username = ?";

        if ($stmt = mysqli_prepare($con, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            $param_username = $username;

            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = "This username is already registered.";
                    echo "<script>alert('This username is already registered.');</script>";
                    echo "<script>window.location.href='../login.php';</script>";
                }
            } else {
                echo "<script>alert('Oops! Something went wrong. Please try again later.');</script>";
                echo "<script>window.location.href='../login.php';</script>";
            }

            mysqli_stmt_close($stmt);
        }
    }

    // Validate email
    if (empty($email)) {
        $email_err = "Please enter an email address.";
        echo "<script>alert('Please enter an email address.');</script>";
        echo "<script>window.location.href='../login.php';</script>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_err = "Please enter a valid email address.";
        echo "<script>alert('Please enter a valid email address.');</script>";
        echo "<script>window.location.href='../login.php';</script>";
    } else {
        $sql = "SELECT id FROM AI_register WHERE email = ?";

        if ($stmt = mysqli_prepare($con, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $param_email);

            $param_email = $email;

            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $email_err = "This email is already registered.";
                    echo "<script>alert('This email is already registered.');</script>";
                    echo "<script>window.location.href='../login.php';</script>";
                }
            } else {
                echo "<script>alert('Oops! Something went wrong. Please try again later.');</script>";
                echo "<script>window.location.href='../login.php';</script>";
            }

            mysqli_stmt_close($stmt);
        }
    }

    // Validate password
    if (empty($password)) {
        $password_err = "Please enter a password.";
        echo "<script>window.location.href='../login.php';</script>";
    }
    // If there are no errors, insert the data into the database
    if (empty($username_err) && empty($email_err) && empty($password_err)) {
       

        $sql = "INSERT INTO AI_register (username, email, password, mobile_number, profile_image, created , license_key)
        VALUES (?, ?, ?, ?, ?, ?, ?)";

        if ($stmt = mysqli_prepare($con, $sql)) {

            $param_username = $username;
            $param_email = $email;
            $param_mobile = $mobile_number;
            $param_profile = $profile;
            $param_current_date = $current_date;
             $hashed_password = $password;
             $uniqueId_e = $uniqueId;

            mysqli_stmt_bind_param($stmt, "sssssss", $param_username, $param_email, $hashed_password, $param_mobile, $param_profile, $param_current_date,$uniqueId_e);
            if (mysqli_stmt_execute($stmt)) {
                echo "<script>alert('Registration completed successfully. Login to continue.');</script>";
                echo "<script>window.location.href='../login.php';</script>";
                exit;
            } else {
                echo "<script>alert('Oops! Something went wrong. Please try again later.');</script>";
                echo "<script>window.location.href='../login.php';</script>";
            }

            mysqli_stmt_close($stmt);
        }
    }

    mysqli_close($con);
}
?>