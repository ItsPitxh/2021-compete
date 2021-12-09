<?php
session_start();
include('config.php');
include("ad_nav.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>#</title>
</head>
<body>
<div class="main">
        <form action="" method="post">
            <input type="search" name="search" placeholder="ค้นหาชื่อผู้ใช้ . . ." class="form-control">
        </form>
        <div class="table-responsive mt-5">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">ชื่อจริง</th>
                  <th scope="col">นามสกุล</th>
                  <th scope="col">ชื่อผู้ใช้</th>
                  <th scope="col">โปรไฟล์</th>
                  <th scope="col">สถานะ</th>
                  <th scope="col">อนุญาติ</th>
                  <th scope="col">ไม่อนุญาติ</th>
                </tr>
                
              </thead>
              <tbody>
                  <?php
                    $sql = "SELECT * FROM user_tb WHERE user_status = 'pending'";
                    $query = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_array($query)) {
                      ?>
                      <tr>
                  <td><?=$row['user_fname']; ?></td>
                  <td><?=$row['user_sname'];?></td>
                  <td><?=$row['user_username'];?></td>
                  <td><img src="img/<?=$row['user_img'];?>" alt="" width="20%"></td>
                  <td><?=$row['user_status'];?></td>
                  
                  <td><a href="ad_accept_fn.php?user_id=<?=$row['user_id']?>" class="btn btn-success">อนุญาติ</a></td>
                  <td><a href="ad_declined_fn.php?user_id=<?=$row['user_id']?>" class="btn btn-danger">ไม่อนุญาติ</a></td>
                </tr>
                <?php
                    }
                    
                    
                  ?>
                
              </tbody>
            </table>
          </div>
    </div>
</body>
</html>