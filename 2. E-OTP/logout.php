<?php
session_start();

$_SESSION = array();

session_destroy();

echo "<script>" . "window.location.href='./signin.php';" . "</script>";
exit;
