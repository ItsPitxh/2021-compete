<?php
session_start();
include("config.php");

$username = $_POST['username'];
$pass = $_POST['pass'];

$sql = "SELECT * FROM user_tb WHERE user_username='$username' AND user_pass='$pass'";
$query = mysqli_query($conn,$sql);

if(mysqli_num_rows($query)==1){
    $row = mysqli_fetch_array($query);
    $_SESSION['user_id'] = $row['user_id'];
    $_SESSION['user_fname'] = $row['user_fname'];
    $_SESSION['user_sname'] = $row['user_sname'];
    $_SESSION['user_username'] = $row['user_username'];
    $_SESSION['user_pass'] = $row['user_pass'];
    $_SESSION['user_img'] = $row['user_img'];
    $_SESSION['user_status'] = $row['user_status'];

    if($_SESSION['user_status']=='user'){
        echo "<script>";
        echo "window.location='home.php'";
        echo "</script>";
    }
    else if($_SESSION['user_status']=='block'){
        session_destroy();
        echo "<script>";
        echo "alert('บัญชีผู้ใช้นี้ถูกยกเลิกการใช้งานจากผู้ดูแลระบบ');";
        echo "window.location='index.php'";
        echo "</script>";
    }
    else if($_SESSION['user_status']=='regis'){
        session_destroy();
        echo "<script>";
        echo "alert('บัญชีผู้ใช้นี้ยังไม่ได้รับการอนุมัติการใช้งาน');";
        echo "window.location='index.php'";
        echo "</script>";
    }
    else{
        session_destroy();
        echo "<script>";
        echo "alert('บัญชีผู้ใช้นี้ไม่มีสิทธิ์ในการเข้าถึงการใช้งานระบบ');";
        echo "window.location='index.php'";
        echo "</script>";
    }
}
else{
    echo "<script>";
    echo "alert('ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง');";
    echo "window.location='index.php'";
    echo "</script>";
}
?>