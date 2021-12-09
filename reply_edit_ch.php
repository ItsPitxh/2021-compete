<?php
session_start();
include("config.php");

$post_id = $_POST['post_id'];
$reply_id = $_POST['reply_id'];
$user_id = $_SESSION['user_id'];
$reply_text = $_POST['reply_text'];
$reply_text = str_replace("\n","<br>\n",$reply_text);

$sql = "UPDATE reply_tb SET reply_text='$reply_text' WHERE reply_id='$reply_id'";
$query = mysqli_query($conn,$sql);

if($query){
    echo "<script>";
    echo "alert('แก้ไข ความคิดเห็น เรียบร้อยแล้ว');";
    echo "window.location='post_detail.php?post_id=$post_id'";
    echo "</script>";
}
?>