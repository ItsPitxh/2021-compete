<?php
include("config.php");
include("chkses.php");
include("user_nav.php");

$post_id=$_REQUEST['post_id'];

$sql = "SELECT * FROM post_tb INNER JOIN user_tb ON post_tb.user_id=user_tb.user_id WHERE post_tb.post_id=$post_id";
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($query);

$user_id = $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงความคิดเห็น | Lannapoly</title>
</head>
<body>
<!-- Back -->
<div class="me">
    <a href="javascript:history.back()" class="btn btn-dark">กลับ</a>
</div>
<br>
<!-- ----- -->
<!-- Post_box -->
<div class="shadow-sm p-3 w-3 bg-white">
    <?php
    if($row['user_id']==$user_id){
    ?>
        <a href="profile.php"><img src="img/<?=$row['user_img']?>" class="propost"></a>
        <a href="profile.php"><h5><?=$row['user_fname']?>&nbsp;<?=$row['user_sname']?></h5></a>
    <?php
    }
    else{
    ?>
        <a href="friend_profile.php?friend_id=<?=$row['user_id']?>"><img src="img/<?=$row['user_img']?>" class="propost"></a>
        <a href="friend_profile.php?friend_id=<?=$row['user_id']?>"><h5><?=$row['user_fname']?>&nbsp;<?=$row['user_sname']?></h5></a>
    <?php
    }
    ?>
    <font color="gray"><h6><?=$row['post_date']?></h6></font>
    <br><?=$row['post_topic']?>
        <?php
        if($row['user_id']==$user_id){
        ?>
        <!-- Edit - Dele -->
            <div class="top-right">
                <a href="post_edit.php?post_id=<?=$row['post_id']?>" class="btn btn-success">แก้ไข</a>
                <a href="post_del_ch.php?post_id=<?=$row['post_id']?>&&f=<?=$f?>" onclick="return confirm('ต้องการลบโพสต์นี้ ใช่หรือไม่')" class="btn btn-danger">ลบ</a>
            </div>
        <!-- ----- -->
        <?php
        }
        ?>
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
        <form action="reply_ch.php" method="post">
            <img src="img/<?=$_SESSION['user_img']?>" class="procomment">
            <input type="text" name="reply_text" placeholder="เขียนแสดงความคิดเห็น . . ." style="width: 70%;" class="btn btn-dark">
            <input type="hidden" name="post_id" value="<?=$post_id?>">
            <input type="submit" value="แสดงความคิดเห็น" class="btn btn-success">
        </form>
        <!-- ----- -->
        <br>
        <?php
        $sql = "SELECT * FROM reply_tb INNER JOIN post_tb ON reply_tb.post_id=post_tb.post_id INNER JOIN user_tb ON reply_tb.user_id=user_tb.user_id WHERE reply_tb.post_id=$post_id ORDER BY reply_date desc";
        $query = mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($query)){
        ?>
        <!-- Boxcomment -->
            <div class="shadow-none p-3 w-3" style="background-color: #dedede;">
            <?php
            if($row['user_id']==$user_id){
            ?>
                <a href="profile.php"><img src="img/<?=$row['user_img']?>" class="procomment2"></a>
                <a href="profile.php"><h5><?=$row['user_fname']?>&nbsp;<?=$row['user_sname']?></h5></a>
            <?php
            }
            else{
            ?>
                <a href="friend_profile.php?friend_id=<?=$row['user_id']?>"><img src="img/<?=$row['user_img']?>" class="procomment2"></a>
                <a href="friend_profile.php?friend_id=<?=$row['user_id']?>"><h5><?=$row['user_fname']?>&nbsp;<?=$row['user_sname']?></h5></a>
            <?php
            }
            ?>
                <font color="gray"><h6><?=$row['reply_date']?></h6></font>
                <br><?=$row['reply_text']?>
                <?php
                if($row['user_id']==$user_id){
                ?>
                <!-- Edit - Dele -->
                    <div class="top-right">
                        <a href="reply_edit.php?reply_id=<?=$row['reply_id']?>&&post_id=<?=$post_id?>" class="btn btn-success">แก้ไข</a>
                        <a href="reply_del_ch.php?reply_id=<?=$row['reply_id']?>&&post_id=<?=$post_id?>" onclick="return confirm('ต้องการลบความคิดเห็นนี้ ใช่หรือไม่')" class="btn btn-danger">ลบ</a>
                    </div>
                <!-- ----- -->
                <?php
                }
                ?>
            </div>
        <br>
        <!-- ----- -->
        <?php
        }
        ?>
</div>
<br>
<!-- ----- -->
</body>
</html>