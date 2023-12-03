<?php
require_once "../../include/config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $bookName = $_POST["book_name"];
    $chapterNo = $_POST["chapter_no"];
    $chapterTitle = $_POST["chapter_title"];
    
    // Split the bookName by semicolon
    $bookInfo = explode(':', $bookName);
    $stock_id = $bookInfo[0]; // The value before the semicolon
    $name = $bookInfo[1]; // The value after the semicolon

    // Prepare the SQL statement
    $sql = "INSERT INTO market_product (stock_id, name, price, quantity)
            VALUES ('$stock_id', '$name', '$chapterNo', '$chapterTitle')";

    if (mysqli_query($con, $sql)) {
        // Successful insertion
        echo '<script>alert("Product added successfully.");</script>';
        echo '<script>window.location.href = "../Add-Product.php";</script>';
        exit;
    } else {
        // Failed insertion
        $errorMessage = "Error: " . mysqli_error($con);
        echo '<script>alert("Error adding the chapter: ' . $errorMessage . '");</script>';
        echo '<script>window.location.href = "../Add-Product.php";</script>';
        exit;
    }
}
?>
