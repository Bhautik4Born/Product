<?php

include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $subject = $_POST["text"]; 
    $message = $_POST["message"];

    $query = "INSERT INTO market_contact (firstname, lastname, email, text, message)
              VALUES (?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "sssss", $firstname, $lastname, $email, $subject, $message);

    if (mysqli_stmt_execute($stmt)) {
        $response = "<script>alert('Data inserted successfully.');window.location.href = '../contact.php';</script>";
    } else {
        $response = "<script>Error inserting data: </script>" . mysqli_error($con);
    }

    mysqli_stmt_close($stmt);
    echo $response;
}

?>
