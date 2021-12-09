<?php
include("config.php");
include("chkses.php");
$p='friend_profile.php';
include("user_nav.php");

$friend_id = $_REQUEST['friend_id'];
$user_id = $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>โปรไฟล์เพื่อน | Lannapoly</title>
</head>
<body>
<!-- Profile -->
<center>
<?php
$sql = "SELECT * FROM user_tb WHERE user_id='$friend_id'";
$query = mysqli_query($conn,$sql);
$row=mysqli_fetch_array($query);
?>
    <img src="img/<?=$row['user_img']?>" class="profile">
<br><br>
    <h3><?=$row['user_fname']?>&nbsp;<?=$row['user_sname']?></h3>
        <?php
        $sql = "SELECT * FROM friend_tb WHERE (user_id_one='$user_id' AND user_id_two='$friend_id') OR (user_id_one='$friend_id' AND user_id_two='$user_id')";
        $query = mysqli_query($conn,$sql);
        $row=mysqli_fetch_array($query);


        if($row['action_user_id']==$user_id&&$row['friend_status']=='wait'){
        ?>
    <a href="#" class="btn btn-warning">รอการตอบรับ</a>
    <a href="friend_cancel_ch.php?friend_id=<?=$friend_id?>&&f=p" class="btn btn-danger" onclick="return confirm('ต้องการยกเลิกการส่งคำขอเป็นเพื่อน ใช่หรือไม่')">ยกเลิกคำขอ</a>
        <?php
        }
        else if($row['action_user_id']==$friend_id&&$row['friend_status']=='wait'){
        ?>
    <a href="friend_accept_ch.php?friend_id=<?=$friend_id?>&&f=p" class="btn btn-success">ตอบรับคำขอ</a>
    <a href="friend_cancel_ch.php?friend_id=<?=$friend_id?>&&f=p" class="btn btn-danger" onclick="return confirm('ไม่ต้องการตอบรับคำขอเป็นเพื่อนนี้ ใช่หรือไม่')">ลบคำขอ</a>
        <?php
        }
        else if($row['friend_status']=='friend'){
        ?>
    <a href="#" class="btn btn-info">เพื่อน</a>
    <a href="friend_cancel_ch.php?friend_id=<?=$friend_id?>&&f=p" class="btn btn-danger" onclick="return confirm('ต้องการยกเลิกการเป็นเพื่อน ใช่หรือไม่')">ยกเลิกเป็นเพื่อน</a>
        <?php
        }
        else{
        ?>
    <a href="friend_add_ch.php?friend_id=<?=$friend_id?>" class="btn btn-primary">เพิ่มเพื่อน</a>
        <?php
        }
        ?>
</center>
<!-- ----- -->
<hr>

<?php
if($row['friend_status']=='friend'){
    $sql = "SELECT * FROM post_tb INNER JOIN user_tb ON post_tb.user_id=user_tb.user_id WHERE post_tb.user_id='$friend_id' ORDER BY post_date desc";
    $query = mysqli_query($conn,$sql);
    if(mysqli_num_rows($query)!=null){
        while($row=mysqli_fetch_array($query)){
        include("post_box.php");
        }
    }
    else{
        echo "<br><br><center>บุคคลนี้ยังไม่มีข้อมูลโพสต์ใดๆ</center>";
    }
}
else{
?>
<br><br><br><br><br><br>
<center>ไม่สามารถดูโพสต์ของบุคคลนี้ได้ จนกว่าจะเป็นเพื่อนกัน</center>

<?php
}
?>
</body>
</html>
