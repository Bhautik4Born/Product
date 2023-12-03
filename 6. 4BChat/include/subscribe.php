<?php

include '../platform/include/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["email"])) {
    $email = $_POST["email"];
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format. Please enter a valid email address.";
    } else {
        $insertQuery = "INSERT INTO AI_subscribe_email (email) VALUES ('$email')";
        
        if (mysqli_query($con, $insertQuery)) {
                // Success message
                echo '<script>window.location.href = "../index.php";</script>';
        } else {
            echo "Error: " . mysqli_error($con);
        }
    }
}
?>