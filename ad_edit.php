<?php
include("config.php");
include("chkses.php");
include("ad_nav.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
    table, tr, td{
        width: 50%;
        padding: 10px;
    }

    .center{
        margin-top: 5%;
        margin-left: 20%;
        margin-right: 1%;
        color: white;
    }
</style>
</head>
<body>
<!-- Ad_edit -->
<div class="center">
    <table>
        <tr>
            <td colspan="3"><h4>การตั้งค่าบัญชีผู้ดูแลระบบ</h4></td>
        </tr>
            <tr><td><hr color="gray" style="width:250%;"></td></tr>
        <tr>
            <td>ชื่อบัญชีผู้ดูแลระบบ</td>
            <td><?=$_SESSION['admin_username']?></td>
            <td></td>
        </tr>
            <tr><td><hr color="gray" style="width:250%;"></td></tr>
        <tr>
            <td>ชื่อผู้ดูแลระบบ</td>
            <td><?=$_SESSION['admin_name']?></td>
            <td><a href="ad_edit_name.php">แก้ไข</a></td>
        </tr>
            <tr><td><hr color="gray" style="width:250%;"></td></tr>
        <tr>
            <td>รหัสผ่าน</td>
            <td></td>
            <td><a href="ad_edit_pass.php">แก้ไข</a></td>
        </tr>
            <tr><td><hr color="gray" style="width:250%;"></td></tr>
    </table>
</div>
<!-- ----- -->
</body>
</html>