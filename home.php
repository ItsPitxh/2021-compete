<?php
include("config.php");
include("chkses.php");
include("user_nav.php");

$user_id = $_SESSION['user_id'];

$f='h';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าหลัก | Lannapoly</title>
</head>
<body>
<!-- Post -->
<form action="post_ch.php" method="post" enctype="multipart/form-data">
    <div class="shadow-sm p-3 w-3 bg-white">
        <h4>สร้างโพสต์</h4>
    <hr>
        <textarea name="post_topic" rows="3" placeholder="เขียนข้อความโพสต์ . . ."></textarea>
        <input type="hidden" name="f" value="h">
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
$sql = "SELECT * FROM post_tb INNER JOIN friend_tb ON post_tb.user_id=friend_tb.user_id_one OR post_tb.user_id=friend_tb.user_id_two INNER JOIN user_tb ON post_tb.user_id=user_tb.user_id WHERE friend_tb.user_id_one='$user_id' OR friend_tb.user_id_two='$user_id' AND friend_status='friend' GROUP BY post_tb.post_id ORDER BY post_tb.post_date desc";
$query = mysqli_query($conn,$sql);

if(mysqli_num_rows($query)!=null){
    while($row=mysqli_fetch_array($query)){
        include("post_box.php");
    }
}
else{
    $sql = "SELECT * FROM post_tb INNER JOIN user_tb ON post_tb.user_id=user_tb.user_id WHERE post_tb.user_id='$user_id' ORDER BY post_date desc";
    $query = mysqli_query($conn,$sql);
    while($row=mysqli_fetch_array($query)){
    include("post_box.php");
    }
}
?>
<!-- ----- -->
</body>
</html>