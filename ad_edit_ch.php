<?php
session_start();
include("config.php");

$admin_id = $_SESSION['admin_id'];
$name = $_POST['name'];

$sql = "UPDATE admin_tb SET admin_name='$name' WHERE admin_id='$admin_id'";
$query = mysqli_query($conn,$sql);

if($query){
    $_SESSION['admin_name'] = $name;
    echo "<script>";
    echo "alert('แก้ไข ชื่อ เรียบร้อยแล้ว');";
    echo "window.location='ad_edit.php'";
    echo "</script>";
}
?>