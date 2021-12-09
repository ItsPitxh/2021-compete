<?php
include("config.php");
include("chkses.php");
$p='profile.php';
include("user_nav.php");

$user_id = $_SESSION['user_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คำขอเป็นเพื่อน | Lannapoly</title>
    <link rel="stylesheet" href="css/friend.css">
</head>
<body>
<!-- Profile -->
<center>
    <img src="img/<?=$_SESSION['user_img']?>" class="profile">
<br><br>
    <h3><?=$_SESSION['user_fname']?>&nbsp;<?=$_SESSION['user_sname']?></h3>
</center>
<!-- ----- -->
<hr>
<!-- Back -->
<div class="me">
    <a href="javascript:history.back()" class="btn btn-dark">กลับ</a>
</div>
<br>
<!-- ----- -->
<!-- Friend -->
<div class="shadow-sm p-3 w-3 bg-white">
        <h3>เพื่อน</h3>
    <hr>
        <a href="friend_list.php">เพื่อนทั้งหมด</a>&nbsp;&nbsp;&nbsp;
        <a href="friend_list_ac.php">คำขอเป็นเพื่อน</a>&nbsp;&nbsp;&nbsp;
        <a href="friend_list_un.php">บุคคลที่ยังไม่ได้เป็นเพื่อน</a>&nbsp;&nbsp;&nbsp;
    <hr>
<?php
$sql = "SELECT * FROM user_tb INNER JOIN friend_tb ON user_tb.user_id=friend_tb.user_id_one OR user_tb.user_id=friend_tb.user_id_two WHERE (user_id_one='$user_id' OR user_id_two='$user_id') AND friend_status='wait' AND action_user_id!='$user_id' AND user_status!='regis'";
$query = mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($query)){
    if($row['user_id']!=$user_id){
?>
        <div class="shadow-none p-3 w-3" style="background-color: #dedede;">
            <a href="friend_profile.php"><img src="img/<?=$row['user_img']?>" class="prosearch"></a>
            <div class="font"><a href="friend_profile.php"><h4><?=$row['user_fname']?>&nbsp;<?=$row['user_sname']?></h4></a></div>
            <!-- Profile -->
                <div class="prof">
                    <a href="friend_accept_ch.php?friend_id=<?=$row['user_id']?>&&f=l" class="btn btn-success">ตอบรับคำขอ</a>
                    <a href="friend_cancel_ch.php?friend_id=<?=$row['user_id']?>&&f=l" class="btn btn-danger" onclick="return confirm('ไม่ต้องการตอบรับคำขอเป็นเพื่อนนี้ ใช่หรือไม่')">ลบคำขอ</a>
                </div>
            <!-- ----- -->
            <br>
        </div>
        <br>
<?php
    }
}
?>
</div>
<br>
<!-- ----- -->
</body>
</html>
