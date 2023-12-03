<?php
require_once "../../include/config.php";

function generateProductId()
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $productId = '';
    for ($i = 0; $i < 10; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $productId .= $characters[$index];
    }
    return $productId;
}

function addLanguage($language) {
    global $con;

    $languageId = generateProductId();
    $sql = "INSERT INTO language (language_id, language) VALUES ('$languageId', '$language')";

    if (mysqli_query($con, $sql)) {
        echo '<script>alert("Language added successfully."); window.location.href = "../language.php";</script>';
        exit();
    } else {
        echo "Error: " . mysqli_error($con);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $language = $_POST["language"];

    if (!empty($language)) {
        addLanguage($language);
    } else {
        echo '<script>alert("All fields are required."); 
        window.location.href = "../language.php";</script>';
    }
}
?>
