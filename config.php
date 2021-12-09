<?php
$host = "localhost";
$user = "root";
$configpass = "";
$db = "poly_db";
$conn = mysqli_connect($host, $user, $configpass, $db);
mysqli_select_db($conn, $db);
mysqli_set_charset($conn, "utf8");

date_default_timezone_set("Asia/Bangkok");
$date = date("Y-m-d H:i:s");

if(!$conn){
    echo "Failed To Connecting To Datebase";
}
