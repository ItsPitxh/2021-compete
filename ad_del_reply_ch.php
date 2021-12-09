<?php
session_start();
include("config.php");

$post_id = $_REQUEST['post_id'];
$reply_id = $_REQUEST['reply_id'];

$sql = "DELETE FROM reply_tb WHERE reply_id='$reply_id'";
$query = mysqli_query($conn,$sql);

if($query){
    echo "<script>";
    echo "alert('ลบความคิดเห็นเรียบร้อยแล้ว');";
    echo "window.location='ad_user_post.php?post_id=$post_id'";
    echo "</script>";
}
?>