<?php
include("config.php");
include("chkses.php");
include("user_nav.php");

$post_id=$_REQUEST['post_id'];

$sql = "SELECT * FROM post_tb INNER JOIN user_tb ON post_tb.user_id=user_tb.user_id WHERE post_tb.post_id=$post_id";
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แก้ไขโพสต์ | Lannapoly</title>
</head>
<body>
<!-- Back -->
<div class="me">
    <a href="javascript:history.back()" class="btn btn-dark">กลับ</a>
</div>
<br>
<!-- ----- -->
<!-- Post_edit -->
<form action="post_edit_ch.php" method="post" enctype="multipart/form-data">
<div class="shadow-sm p-3 w-3 bg-white">
    <a href="profile.php"><img src="img/<?=$row['user_img']?>" class="propost"></a>
    <a href="profile.php"><h5><?=$row['user_fname']?>&nbsp;<?=$row['user_sname']?></h5></a>
    <font color="gray"><h6><?=$row['post_date']?></h6></font>
    <br><textarea name="post_topic" rows="3" placeholder="โพสต์ข้อความ . . ."><?=$row['post_topic']?></textarea>

    <hr>
    <?php
    if($row['post_img']!=null){
    ?>
        <img src="post_img/<?=$row['post_img']?>" style="Width: 100%;">
    <hr>
    <?php
    }
    ?>
        <input type="file" name="img">
        <input type="hidden" name="nimg" value="<?=$row['post_img']?>">
        <input type="hidden" name="post_id" value="<?=$post_id?>">
        <!-- Edit - Dele -->
            <div class="float-right">
               <input type="submit" value="บันทึก" class="btn btn-success">
               <input type="reset" value="รีเซ็ต" class="btn btn-danger">
            </div>
        <!-- ----- -->
<br><br>
</div>
</form>
<br>
<!-- ----- -->
</body>
</html>