<?php
session_start();
include("config.php");

$fname = $_POST['fname'];
$sname = $_POST['sname'];
$username = $_POST['username'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];

if(isset($_FILES['img']['name'])){
    $img = $_FILES['img']['name'];
    $path = "img/";

    move_uploaded_file($_FILES['img']['tmp_name'],$path.$img);
}

$sql = "SELECT user_username FROM user_tb WHERE user_username='".trim($username)."'";
$query = mysqli_query($conn,$sql);

if(mysqli_num_rows($query)>0){
    echo "<script>";
    echo "alert('มีชื่อผู้ใช้นี้อยู่แล้ว กรุณาใช้ชื่อผู้ใช้อื่น');";
    echo "window.location='regis.php'";
    echo "</script>";
}
else if($pass!=$cpass){
    echo "<script>";
    echo "alert('รหัสผ่านยืนยันไม่ตรงกัน กรุณากรอกใหม่อีกครั้ง');";
    echo "window.location='regis.php'";
    echo "</script>";
}
else{
    $sql = "INSERT INTO user_tb(user_fname,user_sname,user_username,user_pass,user_img,user_status) VALUES('$fname','$sname','$username','$pass','$img','regis')";
    $query = mysqli_query($conn,$sql);

        if($query){
            echo "<script>";
            echo "alert('สมัครสมาชิกเรียบร้อย รอการอนุมัติการใช้งานจากผู้ดูแลระบบเพื่อเข้าใช้งาน');";
            echo "window.location='index.php'";
            echo "</script>";
        }
}
?>