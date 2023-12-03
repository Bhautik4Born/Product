<?php
require_once "../../include/config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $user_name = $_POST["username"];
    $bookName = $_POST["book_name"];
    $chapterNo = $_POST["chapter_no"];
    $chapterTitle = $_POST["chapter_title"];
    $domain = $_POST["domain"];

    // Prepare the SQL statement
    $sql = "INSERT INTO market_buy_product (user_name, Stock_name, license_key, stock_link,domain)
            VALUES ('$user_name', '$bookName', '$chapterNo', '$chapterTitle','$domain')";

    if (mysqli_query($con, $sql)) {
        // Successful insertion
        echo '<script>alert("Product added successfully.");</script>';
        echo '<script>window.location.href = "../api-buy-detail.php";</script>';
        exit;
    } else {
        // Failed insertion
        $errorMessage = "Error: " . mysqli_error($con);
        echo '<script>alert("Error adding the chapter: ' . $errorMessage . '");</script>';
        echo '<script>window.location.href = "../api-buy-detail.php";</script>';
        exit;
    }
}
?>
