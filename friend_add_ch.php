<?php
session_start();
include("config.php");

$user_id = $_SESSION['user_id'];
$friend_id = $_REQUEST['friend_id'];

$sql = "INSERT INTO friend_tb(user_id_one,user_id_two,friend_status,action_user_id) VALUES('$user_id','$friend_id','wait','$user_id')";
$query = mysqli_query($conn,$sql);

if($query){
    echo "<script>";
    echo "window.location='friend_profile.php?friend_id=$friend_id'";
    echo "</script>";
}
?>