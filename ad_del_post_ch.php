<?php
session_start();
include("config.php");

$user_id = $_REQUEST['user_id'];
$post_id = $_REQUEST['post_id'];

$sql = "DELETE FROM post_tb WHERE post_id='$post_id'";
$query = mysqli_query($conn,$sql);

$sql = "DELETE FROM reply_tb WHERE post_id='$post_id'";
$query = mysqli_query($conn,$sql);

if($query){
    echo "<script>";
    echo "alert('ลบโพสต์เรียบร้อยแล้ว');";
    echo "window.location='ad_user_profile.php?user_id=$user_id'";
    echo "</script>";
}
?>