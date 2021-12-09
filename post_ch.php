<?php
session_start();
include("config.php");

$user_id = $_SESSION['user_id'];
$post_topic = $_POST['post_topic'];
$post_topic = str_replace("\n","<br>\n",$post_topic);
if(isset($_FILES['img']['name'])){
    $img = $_FILES['img']['name'];
    $path = "post_img/";

    move_uploaded_file($_FILES['img']['tmp_name'],$path.$img);
}

$f = $_POST['f'];

$sql = "INSERT INTO post_tb(user_id,post_topic,post_img,post_date,post_status) VALUES('$user_id','$post_topic','$img','$date','active')";
$query = mysqli_query($conn,$sql);

if($query){
    if($f=='h'){
        echo "<script>";
        echo "window.location='home.php'";
        echo "</script>";
    }
    else{
        echo "<script>";
        echo "window.location='profile.php'";
        echo "</script>";
    }
}
?>