<?php
include("config.php");
include("chkses.php");
include("user_nav.php");

$user_id=$_SESSION['user_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ค้นหาผู้ใช้งาน | Lannapoly</title>
</head>
<body>
<?php
    $search = $_POST['search'];
    $sql = "SELECT * FROM user_tb WHERE (user_fname LIKE '%".$search."%' OR user_sname LIKE '%".$search."%') AND (user_status='user' OR user_status='block') ORDER BY user_fname asc";
    $query = mysqli_query($conn,$sql);
if(mysqli_num_rows($query)!=null){
    while($row=mysqli_fetch_array($query)){
?>
<!-- Search -->
    <div class="shadow-sm p-3 w-3 bg-white">
            <?php
            if($row['user_id']==$user_id){
            ?>
        <a href="profile.php"><img src="img/<?=$row['user_img']?>" class="prosearch"></a>
        <div class="font"><a href="profile.php"><h4><?=$row['user_fname']?>&nbsp;<?=$row['user_sname']?></h4></a></div>
        <!-- Profile -->
            <div class="centerpro">
                <a href="profile.php" class="btn btn-info">ดูโปรไฟล์</a>
            </div>
        <!-- ----- -->
            <?php
            }
            else{
            ?>
        <a href="friend_profile.php?friend_id=<?=$row['user_id']?>"><img src="img/<?=$row['user_img']?>" class="prosearch"></a>
        <div class="font"><a href="friend_profile.php?friend_id=<?=$row['user_id']?>"><h4><?=$row['user_fname']?>&nbsp;<?=$row['user_sname']?></h4></a></div>
        <!-- Profile -->
            <div class="centerpro">
                <a href="friend_profile.php?friend_id=<?=$row['user_id']?>" class="btn btn-info">ดูโปรไฟล์</a>
            </div>
        <!-- ----- -->
            <?php
            }
            ?>
        <br>
    </div>
    <br>
<!-- ----- -->
<?php
    }
}else{
?>
<br><br>
<center>ไม่พบข้อมูลการค้นหา</center>
<?php
}
?>
</body>
</html>