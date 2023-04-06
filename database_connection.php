<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "atabat";

// اتصال به پایگاه داده
$conn = mysqli_connect($servername, $username, $password, $database);

// بررسی وضعیت اتصال
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
