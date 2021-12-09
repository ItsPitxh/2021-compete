<?php
session_start();
include("config.php");

$username = $_POST['username'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM admin_tb WHERE admin_username='$username' AND admin_pass='$pass'";
$query = mysqli_query($conn,$sql);

if(mysqli_num_rows($query)==1){
    $row = mysqli_fetch_array($query);
    $_SESSION['admin_id'] = $row['admin_id'];
    $_SESSION['admin_name'] = $row['admin_name'];
    $_SESSION['admin_username'] = $row['admin_username'];
    $_SESSION['admin_pass'] = $row['admin_pass'];
    $_SESSION['admin_status'] = $row['admin_status'];

    if($_SESSION['admin_status']=='admin'){
        echo "<script>";
        echo "window.location='ad_accept.php'";
        echo "</script>";
    }
    else{
        echo "<script>";
        echo "alert('บัญชีผู้ใช้นี้ไม่มีสิทธิ์ในการเข้าถึงการดูแลระบบ');";
        echo "window.location='index.php'";
        echo "</script>";
    }
}
else{
    echo "<script>";
    echo "alert('ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง');";
    echo "window.location='ad_login.php'";
    echo "</script>";
}
?>