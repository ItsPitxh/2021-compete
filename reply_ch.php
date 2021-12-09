<?php
session_start();
include("config.php");

$user_id = $_SESSION['user_id'];
$post_id = $_POST['post_id'];
$reply_text = $_POST['reply_text'];
$reply_text = str_replace("\n","<br>\n",$reply_text);

$sql = "INSERT INTO reply_tb(post_id,user_id,reply_text,reply_date,reply_status) VALUES('$post_id','$user_id','$reply_text','$date','active')";
$query = mysqli_query($conn,$sql);

if($query){
    echo "<script>";
    echo "window.location='post_detail.php?post_id=$post_id'";
    echo "</script>";
}
?>