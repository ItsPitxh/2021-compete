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
        border-color: black;
        padding: 10px;
    }

    .box{
        margin-top: 1%;
        margin-left: 30%;
        margin-right: 15%;
    }

    .center{
        margin-top: 1%;
        margin-left: 17%;
        margin-right: 1%;
        color: white;
    }
</style>
</head>
<body>
<!-- Ad_accept -->
<form action="#" method="post">
<div class="box">
    <table>
        <tr align="center">
            <td>
                <input type="search" name="search" placeholder="ค้นหาชื่อผู้ใช้ . . ." class="form-control mr-2" style="width: 100%;">
            </td>
            <td style="width: 1%;">
                <button type="submit" class="btn btn-success">Search</button>
            </td>
            <td style="width: 1%;">
                <a href="" class="btn btn-danger">Result</a>
            </td>
        </tr>
    </table>
</div>
</form>
<!-- ----- -->
<!-- Table -->
<div class="center">
    <table border="1">
        <tr align="center">
            <td colspan="8"><h5>รายงานข้อมูลผู้ใช้งานระบบ</h5></td>
        </tr>
        <tr align="center">
            <td style="width: 10%;">ชื่อจริง</td>
            <td style="width: 10%;">นามสกุล</td>
            <td style="width: 10%;">ชื่อผู้ใช้</td>
            <td style="width: 15%;">โปรไฟล์</td>
            <td style="width: 5%;">สถานะ</td>
            <td style="width: 5%;">ดูโปรไฟล์</td>
            <td style="width: 5%;">ลบ</td>
        </tr>
        <?php
        $search = $_POST['search'];
        $sql = "SELECT * FROM user_tb WHERE (user_fname LIKE '%".$search."%' OR user_sname LIKE '%".$search."%' OR user_username LIKE '%".$search."%' OR user_status LIKE '%".$search."%') AND (user_status='user' OR user_status='block') ORDER BY user_id asc";
        $query = mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($query)){
        ?>
        <tr align="center">
            <td style="width: 1%;"><?=$row['user_fname']?></td>
            <td style="width: 10%;"><?=$row['user_sname']?></td>
            <td style="width: 10%;"><?=$row['user_username']?></td>
            <td style="width: 15%;"><img src="img/<?=$row['user_img']?>" style="width: 30%;"></td>
            <td style="width: 5%;"><?=$row['user_status']?></td>
            <td style="width: 5%;"><a href="ad_user_profile.php?user_id=<?=$row['user_id']?>" class="btn btn-info">ดูโปรไฟล์</a></td>
            <td style="width: 5%;"><a href="ad_del_user_ch.php?user_id=<?=$row['user_id']?>" onclick="return confirm('ต้องการลบบัญชีผู้ใช้นี้ ใช่หรือไม่')" class="btn btn-danger">ลบ</a></td>
        </tr>
        <?php
        }
        ?>
    </table>
</div>
<!-- ----- -->
</body>
</html>