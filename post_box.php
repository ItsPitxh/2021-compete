<?php
if($row['post_topic']!=null||$row['post_img']!=null){
?>
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
            <div class="float-right">
                <a href="post_detail.php?post_id=<?=$row['post_id']?>" class="btn btn-dark">แสดงความคิดเห็น</a>
            </div>
        <!-- ----- -->
<br><br>
</div>
<br>
<!-- ----- -->
<?php
}
?>