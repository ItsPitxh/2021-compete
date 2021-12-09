<?php
$host = "localhost";
$user = "stupolyIT";
$pass = "datastupolyIT@291117";
$db = "poly_db";
$conn = mysqli_connect($host,$user,$pass,$db);
mysqli_select_db($conn,$db);

mysqli_set_charset($conn,"utf8");

date_default_timezone_set("Asia/Bangkok");
$date = date("Y-m-d H:i:s");

if(!$conn){
    echo "ไม่สามารถเชื่อมต่อฐานข้อมูลได้";
}
?>