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
<!-- Ad_edit_name -->
<form action="ad_edit_ch.php" method="post">
<div class="center">
    <table>
        <tr>
            <td colspan="3"><h4>การตั้งค่าบัญชีผู้ดูแลระบบ</h4></td>
        </tr>
            <tr><td><hr color="gray" style="width:280%;"></td></tr>
        <tr>
            <td>ชื่อผู้ดูแลระบบ</td>
            <td><input type="text" name="name" value="<?=$_SESSION['admin_name']?>" placeholder="แก้ไขชื่อ . . ." style="width: 100%; margin-left: -35%;" class="btn btn-dark" required></td>
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