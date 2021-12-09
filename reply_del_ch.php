<?php
session_start();
include("config.php");

$reply_id = $_REQUEST['reply_id'];
$post_id = $_REQUEST['post_id'];
$user_id = $_SESSION['user_id'];

$sql = "DELETE FROM reply_tb WHERE reply_id='$reply_id'";
$query = mysqli_query($conn,$sql);

if($query){
    echo "<script>";
    echo "alert('ลบ ความคิดเห็น เรียบร้อยแล้ว');";
    echo "window.location='post_detail.php?post_id=$post_id'";
    echo "</script>";
}
?>