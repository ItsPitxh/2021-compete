<?php
session_start();
include("config.php");

$user_id = $_SESSION['user_id'];
$pass = $_POST['pass'];
$npass = $_POST['npass'];
$cpass = $_POST['cpass'];

if($_SESSION['user_pass']==$pass){
    if($npass==$cpass){
    $sql = "UPDATE user_tb SET user_pass='$npass' WHERE user_id='$user_id'";
    $query = mysqli_query($conn,$sql);
        if($query){
            $_SESSION['user_pass'] = $npass;
            echo "<script>";
            echo "alert('แก้ไข รหัสผ่าน เรียบร้อยแล้ว');";
            echo "window.location='edit.php'";
            echo "</script>";
        }    
    }
    else{
        echo "<script>";
        echo "alert('รหัสผ่านยืนยันไม่ตรงกัน');";
        echo "window.location='edit_pass.php'";
        echo "</script>";
    }
}
else{
    echo "<script>";
    echo "alert('รหัสผ่านเดิมไม่ถูกต้อง');";
    echo "window.location='edit_pass.php'";
    echo "</script>";
}

?>