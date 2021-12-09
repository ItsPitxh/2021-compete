<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/user.css">
</head>
<body>
<!-- User_nav -->
<div class="fixed-top">
    <nav class="navbar navbar-light bg-white">
        <a href="home.php" class="navbar-brand">LANNAPOLY</a>
    <form action="search.php" method="post" class="form-inline">
        <input type="search" name="search" placeholder="ค้นหาผู้ใช้ . . ." class="form-control mr-2">
        <button type="submit" class="btn btn-success">ค้นหา</button>
    </form>
        <a href="logout.php" class="btn btn-danger">ออกจากระบบ</a>
    </nav>
</div>
<!-- ----- -->
<br><br><br><br>
<?php
error_reporting(0);
if($p!='profile.php'&&$p!='friend_profile.php'&&$p!='search.php'){
?>
<!-- Bar -->
<div class="bar">
<center>
    <ul>
        <a href="profile.php"><img src="img/<?=$_SESSION['user_img']?>" class="prohome"></a>
    <br>
        <a href="profile.php" class="navbar-brand"><h4><?=$_SESSION['user_fname']?>&nbsp;<?=$_SESSION['user_sname']?></h4></a>
    <hr color="gray">
        <a href="home.php">หน้าหลัก</a>
        <a href="profile.php">โปรไฟล์</a>
        <a href="friend_list.php">เพื่อนทั้งหมด</a>
        <a href="friend_list_ac.php">คำขอเป็นเพื่อน</a>
        <a href="friend_list_un.php">บุคคลที่ยังไม่ได้เป็นเพื่อน</a>
        <a href="edit.php">แก้ไขข้อมูลส่วนตัว</a>
    </ul>
</center>
</div>
<!-- ----- -->
<?php
}
?>
</body>
</html>