<?php
include("config.php");
include("chkses.php");
$p='profile.php';
include("user_nav.php");

$user_id = $_SESSION['user_id'];
$f = 'p';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรไฟล์ | Lannapoly</title>
</head>
<body>
<!-- Profile -->
<center>
    <img src="img/<?=$_SESSION['user_img']?>" class="profile">
<br><br>
    <h3><?=$_SESSION['user_fname']?>&nbsp;<?=$_SESSION['user_sname']?></h3>
    <a href="edit.php">แก้ไขข้อมูลส่วนตัว</a>
</center>
<!-- ----- -->
<hr>
<!-- Friend -->
<div class="shadow-sm p-3 w-3 bg-white">
        <h3>เพื่อน</h3>
    <hr>
        <a href="friend_list.php">เพื่อนทั้งหมด</a>&nbsp;&nbsp;&nbsp;
        <a href="friend_list_ac.php">คำขอเป็นเพื่อน</a>&nbsp;&nbsp;&nbsp;
        <a href="friend_list_un.php">บุคคลที่ยังไม่ได้เป็นเพื่อน</a>&nbsp;&nbsp;&nbsp;
    <hr>
</div>
<br>
<!-- ----- -->
<!-- Post -->
<form action="post_ch.php" method="post" enctype="multipart/form-data">
    <div class="shadow-sm p-3 w-3 bg-white">
        <h4>สร้างโพสต์</h4>
    <hr>
        <textarea name="post_topic" rows="3"></textarea>
        <input type="hidden" name="f" value="p">
    <hr>
        เลือกรูปภาพที่ต้องการโพสต์
        <br><br>
        <input type="file" name="img">
            <div class="float-right">
                <input type="submit" value="โพสต์" class="btn btn-dark">
            </div>
    </div>
</form>
<br>
<!-- ----- -->
<!-- Post_box -->
<?php
$sql = "SELECT * FROM post_tb INNER JOIN user_tb ON post_tb.user_id=user_tb.user_id WHERE post_tb.user_id='$user_id' ORDER BY post_date desc";
$query = mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($query)){
include("post_box.php");
}
?>
<!-- ----- -->
</body>
</html>
