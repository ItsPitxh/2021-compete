<?php
session_start();
include("config.php");

$post_id = $_POST['post_id'];
$user_id = $_SESSION['user_id'];
$post_topic = $_POST['post_topic'];
$post_topic = str_replace("\n","<br>\n",$post_topic);

if($_FILES['img']['name']!=null){
    $img = $_FILES['img']['name'];
    $path = "post_img/";

    move_uploaded_file($_FILES['img']['tmp_name'],$path.$img);
}
else{
    $img = $_POST['nimg'];
}

$sql = "UPDATE post_tb SET post_topic='$post_topic',post_img='$img' WHERE post_id='$post_id'";
$query = mysqli_query($conn,$sql);

if($query){
    echo "<script>";
    echo "alert('แก้ไข โพสต์ เรียบร้อยแล้ว');";
    echo "window.location='post_detail.php?post_id=$post_id'";
    echo "</script>";
}
?>