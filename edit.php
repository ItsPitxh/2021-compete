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
    <link rel="stylesheet" href="css/edit.css">
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
<!-- Ad_edit -->
<div class="center">
    <table>
        <tr>
            <td colspan="3"><h4>การตั้งค่าบัญชีผู้ใช้งานทั่วไป</h4></td>
        </tr>
            <tr><td><hr color="gray" style="width:250%;"></td></tr>
        <!-- Img -->
        <form action="edit_img_ch.php" method="post" enctype="multipart/form-data">
            <tr align="center">
                <td colspan="3"><img src="img/<?=$_SESSION['user_img']?>" class="proedit"></td>
            </tr>
            <tr align="center">
                <td colspan="3">เลือกรูปภาพทีต้องการเปลี่ยน</td>
            </tr>
            <tr align="center">
                <td><input type="file" name="img" required></td>
                <td><input type="submit" value="ยืนยัน" class="btn btn-success"></td>
                <td><input type="reset" value="รีเซ็ต" class="btn btn-danger"></td>
            </tr>
        </form>
        <!-- ----- -->
            <tr><td><hr color="gray" style="width:250%;"></td></tr>
        <tr>
            <td>ชื่อผู้ใช้</td>
            <td><?=$_SESSION['user_username']?></td>
            <td></td>
        </tr>
            <tr><td><hr color="gray" style="width:250%;"></td></tr>
        <tr>
            <td>ชื่อจริง - นามสกุล</td>
            <td><?=$_SESSION['user_fname']?>&nbsp;<?=$_SESSION['user_sname']?></td>
            <td><a href="edit_name.php">แก้ไข</a></td>
        </tr>
            <tr><td><hr color="gray" style="width:250%;"></td></tr>
        <tr>
            <td>รหัสผ่าน</td>
            <td></td>
            <td><a href="edit_pass.php">แก้ไข</a></td>
        </tr>
            <tr><td><hr color="gray" style="width:250%;"></td></tr>
    </table>
</div>
<!-- ----- -->
<!-- Back -->
<div class="centerback">
    <a href="javascript:history.back()" class="btn btn-dark">กลับ</a>
</div>
<!-- ----- -->
</body>
</html>