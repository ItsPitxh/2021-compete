<?php
session_start();
include("config.php");

$user_id = $_SESSION['user_id'];
$fname = $_POST['fname'];
$sname = $_POST['sname'];

$sql = "UPDATE user_tb SET user_fname='$fname',user_sname='$sname' WHERE user_id='$user_id'";
$query = mysqli_query($conn,$sql);

if($query){
    $_SESSION['user_fname'] = $fname;
    $_SESSION['user_sname'] = $sname;
    echo "<script>";
    echo "alert('แก้ไข ชื่อจริง - นามสกุล เรียบร้อยแล้ว');";
    echo "window.location='edit.php'";
    echo "</script>";
}
?>