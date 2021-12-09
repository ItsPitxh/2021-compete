<?php
session_start();
include("config.php");

$admin_id = $_SESSION['admin_id'];
$pass = $_POST['pass'];
$npass = $_POST['npass'];
$cpass = $_POST['cpass'];

if($_SESSION['admin_pass']==$pass){
    if($npass==$cpass){
    $sql = "UPDATE admin_tb SET admin_pass='$npass' WHERE admin_id='$admin_id'";
    $query = mysqli_query($conn,$sql);
        if($query){
            $_SESSION['admin_pass'] = $npass;
            echo "<script>";
            echo "alert('แก้ไข รหัสผ่าน เรียบร้อยแล้ว');";
            echo "window.location='ad_edit.php'";
            echo "</script>";
        }    
    }
    else{
        echo "<script>";
        echo "alert('รหัสผ่านยืนยันไม่ตรงกัน');";
        echo "window.location='ad_edit_pass.php'";
        echo "</script>";
    }
}
else{
    echo "<script>";
    echo "alert('รหัสผ่านเดิมไม่ถูกต้อง');";
    echo "window.location='ad_edit_pass.php'";
    echo "</script>";
}

?>