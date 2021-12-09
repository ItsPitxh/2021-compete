<?php
session_start();

error_reporting(0);

$user_id = $_SESSION['user_id'];
$admin_id = $_SESSION['admin_id'];
//echo $admin_id;

if($user_id==null&&$admin_id==null){
    header("Location: index.php");
}

if($_SESSION['user_status']=='user'||$_SESSION['user_status']=='block'){
$sql = "SELECT user_status FROM user_tb WHERE user_id='$user_id'";
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($query);

if($row['user_status']=='block'){
    session_destroy();
    echo "<script>";
    echo "alert('บัญชีผู้ใช้นี้ถูกยกเลิกการใช้งาน');";
    echo "window.location='index.php'";
    echo "</script>";
}
if(mysqli_num_rows($query)==0){
    session_destroy();
    echo "<script>";
    echo "alert('บัญชีผู้ใช้นี้ถูกลบโดยผู้ดูแลระบบ');";
    echo "window.location='index.php'";
    echo "</script>";
}
}
?>