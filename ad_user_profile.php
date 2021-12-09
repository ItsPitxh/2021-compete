<?php
include("config.php");
include("chkses.php");
include("ad_nav.php");

$user_id = $_REQUEST['user_id'];

$sql = "SELECT * FROM user_tb WHERE user_id='$user_id'";
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ad.css">
</head>
<body>
<br><br>
<!-- Back -->
<div class="me">
    <a href="javascript:history.back()" class="btn btn-dark">กลับ</a>
</div>
<br>
<!-- ----- -->
<hr>
<br>
<!-- Profile -->
<center>
    <img src="img/<?=$row['user_img']?>" class="profile">
<br><br>
    <font color="white"><h3><?=$row['user_fname']?>&nbsp;<?=$row['user_sname']?></h3></font>
</center>
<!-- ----- -->
<hr>
<?php
$sql = "SELECT * FROM post_tb INNER JOIN user_tb ON post_tb.user_id=user_tb.user_id WHERE post_tb.user_id='$user_id' ORDER BY post_date desc";
$query = mysqli_query($conn,$sql);
if(mysqli_num_rows($query)!=null){
    while($row=mysqli_fetch_array($query)){
        if($row['post_topic']!=null||$row['post_img']!=null){
?>
<!-- Post_box -->
<div class="shadow-sm p-3 w-3 bg-white">
    <a href="profile.php"><img src="img/<?=$row['user_img']?>" class="propost"></a>
    <a href="profile.php"><h5><?=$row['user_fname']?>&nbsp;<?=$row['user_sname']?></h5></a>
    <font color="gray"><h6><?=$row['post_date']?></h6></font>
    <br><?=$row['post_topic']?>
        <!-- Edit - Dele -->
            <div class="top-right">
                <a href="ad_del_post_ch.php?post_id=<?=$row['post_id']?>&&user_id=<?=$user_id?>" onclick="return confirm('ต้องการลบโพสต์นี้ ใช่หรือไม่')" class="btn btn-danger">ลบ</a>
            </div>
        <!-- ----- -->
    <hr>
    <?php
    if($row['post_img']!=null){
    ?>
        <img src="post_img/<?=$row['post_img']?>" style="Width: 100%;">
    <hr>
    <?php
    }
    ?>
        <!-- Comment -->
            <div class="float-right">
                <a href="ad_user_post.php?post_id=<?=$row['post_id']?>" class="btn btn-dark">ดูความคิดเห็น</a>
            </div>
        <!-- ----- -->
<br><br>
</div>
<br><br>
<!-- ----- -->
<?php
        }
    }
}
else{
?>
<br>
<center><font color="white">บุคคลนี้ยังไม่มีข้อมูลการโพสต์ใดๆ</font></center>
<?php
}
?>
</body>
</html>