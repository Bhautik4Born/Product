<?php
define("DB_SERVER", "localhost");
define("DB_USERNAME", "seamarin_4Born_OTP");
define("DB_PASSWORD", "X=yTWN00KVTi");
define("DB_NAME", "seamarin_4Born_OTP");

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if (!$link) {
  die("Connection failed: " . mysqli_connect_error());
}
