<?php
session_start();
include("config.php");

$user_id = $_SESSION['user_id'];
$friend_id = $_REQUEST['friend_id'];
$f = $_REQUEST['f'];

$sql = "DELETE FROM friend_tb WHERE (user_id_one='$user_id' AND user_id_two='$friend_id') OR (user_id_one='$friend_id' AND user_id_two='$user_id')";
$query = mysqli_query($conn,$sql);

if($query){
    if($f=='p'){
        echo "<script>";
        echo "window.location='friend_profile.php?friend_id=$friend_id'";
        echo "</script>";
    }
    else{
        echo "<script>";
        echo "window.location='friend_list_ac.php'";
        echo "</script>";
    }
}
?>