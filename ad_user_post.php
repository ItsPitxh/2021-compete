<?php
include("config.php");
include("chkses.php");
include("ad_nav.php");

$post_id = $_REQUEST['post_id'];

$sql = "SELECT * FROM post_tb INNER JOIN user_tb ON post_tb.user_id=user_tb.user_id WHERE post_tb.post_id=$post_id";
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($query);

$user_id = $row['user_id'];
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
<!-- Post_detail -->
<div class="shadow-sm p-3 w-3 bg-white">
    <a href="ad_user_profile.php?user_id=<?=$row['user_id']?>"><img src="img/<?=$row['user_img']?>" class="propost"></a>
    <a href="ad_user_profile.php?user_id=<?=$row['user_id']?>"><h5><?=$row['user_fname']?>&nbsp;<?=$row['user_sname']?></h5></a>
    <font color="gray"><h6><?=$row['post_date']?></h6></font>
    <br><?=$row['post_topic']?>
        <!-- Edit - Dele -->
            <div class="top-right">
                <a href="ad_del_post_ch.php?post_id=<?=$row['post_id']?>&&user_id=<?=$row['user_id']?>" onclick="return confirm('ต้องการลบโพสต์นี้ ใช่หรือไม่')" class="btn btn-danger">ลบ</a>
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
    ความคิดเห็น
    <br><br>
    <?php
    $sql = "SELECT * FROM reply_tb INNER JOIN post_tb ON reply_tb.post_id=post_tb.post_id INNER JOIN user_tb ON reply_tb.user_id=user_tb.user_id WHERE reply_tb.post_id=$post_id ORDER BY reply_date desc";
    $query = mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($query)){
    ?>
        <!-- Boxcomment -->
            <div class="shadow-none p-3 w-3" style="background-color: #dedede;">
                <a href="ad_user_profile.php?user_id=<?=$row['user_id']?>"><img src="img/<?=$row['user_img']?>" class="procomment2"></a>
                <a href="ad_user_profile.php?user_id=<?=$row['user_id']?>"><h5><?=$row['user_fname']?>&nbsp;<?=$row['user_sname']?></h5></a>
                <font color="gray"><h6><?=$row['reply_date']?></h6></font>
                <br><?=$row['reply_text']?>
                <!-- Edit - Dele -->
                    <div class="top-right">
                        <a href="ad_del_reply_ch.php?reply_id=<?=$row['reply_id']?>&&post_id=<?=$post_id?>" onclick="return confirm('ต้องการลบความคิดเห็นนี้ ใช่หรือไม่')" class="btn btn-danger">ลบ</a>
                    </div>
                <!-- ----- -->
            </div>
        <br>
        <!-- ----- -->
    <?php
    }
    ?>
</div>
<br><br><br>
<!-- ----- -->
</body>
</html>