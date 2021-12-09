<?php
session_start();
include("config.php");

$post_id = $_REQUEST['post_id'];
$user_id = $_SESSION['user_id'];
$f = $_REQUEST['f'];

$sql = "DELETE FROM post_tb WHERE post_id='$post_id'";
$query = mysqli_query($conn,$sql);

$sql = "DELETE FROM reply_tb WHERE post_id='$post_id'";
$query = mysqli_query($conn,$sql);

if($query){
    if($f=='p'){
        echo "<script>";
        echo "alert('ลบ โพสต์ เรียบร้อยแล้ว');";
        echo "window.location='profile.php'";
        echo "</script>";
    }
    else if($f=='h'){
        echo "<script>";
        echo "alert('ลบ โพสต์ เรียบร้อยแล้ว');";
        echo "window.location='home.php'";
        echo "</script>";
    }
    else{
        echo "<script>";
        echo "alert('ลบ โพสต์ เรียบร้อยแล้ว');";
        echo "window.location='home.php'";
        echo "</script>";
    }
}
?>