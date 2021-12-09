<?php
include("config.php");
include("chkses.php");
include("user_nav.php");

$reply_id=$_REQUEST['reply_id'];
$post_id = $_REQUEST['post_id'];

$sql = "SELECT * FROM reply_tb INNER JOIN user_tb ON reply_tb.user_id=user_tb.user_id WHERE reply_tb.reply_id=$reply_id";
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขความคิดเห็น | Lannapoly</title>
</head>
<body>
    <!-- Back -->
<div class="me">
    <a href="javascript:history.back()" class="btn btn-dark">กลับ</a>
</div>
<br>
<!-- ----- -->
<!-- Reply_edit -->
<form action="reply_edit_ch.php" method="post">
    <div class="shadow-sm p-3 w-3 bg-white">
        <a href="profile.php"><img src="img/<?=$row['user_img']?>" class="propost"></a>
        <a href="profile.php"><h5><?=$row['user_fname']?><?=$row['user_sname']?></h5></a>
        <font color="gray"><h6><?=$row['reply_date']?></h6></font>
    <br>
        <textarea name="reply_text" rows="3" placeholder="แก้ไขข้อความ . . ."><?=$row['reply_text']?></textarea>
        <input type="hidden" name="post_id" value="<?=$post_id?>">
        <input type="hidden" name="reply_id" value="<?=$reply_id?>">
    <hr>
        <div class="float-right">
            <input type="submit" value="ยืนยัน" class="btn btn-success">
            <input type="reset" value="รีเซ็ต" class="btn btn-danger">
        </div>
<br>
</form>
<br>
<!-- ----- -->
</body>
</html>