<?php 
    $host = "localhost";
    $config_user = "root";
    $config_pass = "";
    $db = "poly_db";
    $conn = mysqli_connect($host, $config_user, $config_pass, $db);
    mysqli_select_db($conn, $db);
    mysqli_set_charset($conn, "utf8");

    date_default_timezone_set("Asia/Bangkok");
    $date = date("Y-m-d H:i:s");

    if(!$conn){
        echo 'cannot connect to database';
    }
 

?>