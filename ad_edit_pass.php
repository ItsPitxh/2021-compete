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
<!-- Ad_edit_pass -->
<form action="ad_edit_pass_ch.php" method="post">
<div class="center">
    <table>
        <tr>
            <td colspan="3"><h4>การตั้งค่าบัญชีผู้ดูแลระบบ</h4></td>
        </tr>
            <tr><td><hr color="gray" style="width:280%;"></td></tr>
        <tr>
            <td>รหัสผ่านปัจจุบัน</td>
            <td><input type="password" name="pass" placeholder="รหัสผ่านปัจจุบัน" style="width: 100%; margin-left: -40%;" class="btn btn-dark" required></td>
        </tr>
        <tr>
            <td>รหัสผ่านใหม่</td>
            <td><input type="password" name="npass" placeholder="รหัสผ่านใหม่" style="width: 100%; margin-left: -40%;" class="btn btn-dark" required></td>
        </tr>
        <tr>
            <td>ยืนยันรหัสผ่านใหม่</td>
            <td><input type="password" name="cpass" placeholder="ยืนยันรหัสผ่านใหม่" style="width: 100%; margin-left: -40%;" class="btn btn-dark" required></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="ยืนยัน" class="btn btn-success"></td>
            <td><a href="ad_edit.php" class="btn btn-danger">ยกเลิก</a></td>
        </tr>
            <tr><td><hr color="gray" style="width:280%;"></td></tr>
    </table>
</div>
</form>
<!-- ----- -->
</body>
</html>