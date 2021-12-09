<?php
include("config.php");
include("chkses.php");
include("user_nav.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>การตั้งค่าบัญชีผู้ใช้งานทั่วไป | Lannapoly</title>
<style>
    table, tr, td{
        width: 50%;
        padding: 10px;
    }

    .center{
        margin-top: 1%;
        margin-left: 35%;
        margin-right: 1%;
        color: black;
    }
</style>
</head>
<body>
<!-- Ad_edit_name -->
<form action="edit_ch.php" method="post">
<div class="center">
    <table>
        <tr>
            <td colspan="3"><h4>การตั้งค่าบัญชีผู้ใช้งานทั่วไป</h4></td>
        </tr>
            <tr><td><hr color="gray" style="width:280%;"></td></tr>
        <tr>
            <td>ชื่อจริง</td>
            <td><input type="text" name="fname" placeholder="ชื่อจริง . . ." value="<?=$_SESSION['user_fname']?>" style="width: 100%; margin-left: -35%;" class="btn btn-outline-dark" required></td>
        </tr>
        <tr>
            <td>นามสกุล</td>
            <td><input type="text" name="sname" placeholder="นามสกุล . . ." value="<?=$_SESSION['user_sname']?>" style="width: 100%; margin-left: -35%;" class="btn btn-outline-dark" required></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" value="ยืนยัน" class="btn btn-success"></td>
            <td><a href="edit.php" class="btn btn-danger">ยกเลิก</a></td>
        </tr>

            <tr><td><hr color="gray" style="width:280%;"></td></tr>
    </table>
</div>
</form>
<!-- ----- -->
</body>
</html>