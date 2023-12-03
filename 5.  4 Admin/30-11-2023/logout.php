<?php
session_start();

$_SESSION = array();

session_destroy();

// Send a response to indicate successful logout
http_response_code(200);

echo "<script>" . "window.location.href='./login.php';" . "</script>";
exit;

?>
