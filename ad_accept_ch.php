<?php
session_start();
include("config.php");

$user_id = $_REQUEST['user_id'];

$sql = "UPDATE user_tb SET user_status='user' WHERE user_id='$user_id'";
$query = mysqli_query($conn,$sql);

if($query){
    echo "<script>";
    echo "window.location='ad_accept.php'";
    echo "</script>";
}
?>