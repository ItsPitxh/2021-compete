<?php
session_start();
include("config.php");

$user_id = $_SESSION['user_id'];
if(isset($_FILES['img']['name'])){
    $img = $_FILES['img']['name'];
    $path = "img/";

    move_uploaded_file($_FILES['img']['tmp_name'],$path.$img);
}

$sql = "UPDATE user_tb SET user_img='$img' WHERE user_id='$user_id'";
$query = mysqli_query($conn,$sql);

if($query){
    $_SESSION['user_img'] = $img;
    echo "<script>";
    echo "alert('แก้ไข รูปภาพประจำตัว เรียบร้อยแล้ว');";
    echo "window.location='edit.php'";
    echo "</script>";
}
?>