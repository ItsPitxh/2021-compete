<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิกใหม่ | Lannapoly</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<!-- Regis -->
<form action="regis_ch.php" method="post" enctype="multipart/form-data">
    <div class="regis">
        <center>
            <table>
                <tr>
                    <td>
                        <div class="box3">
                            <div class="shadow-lg p-3 w-3 bg-white">
                                <center><h3>สมัครสมาชิกใหม่</h3></center>
                            <hr>
                                <label for="">ชื่อจริง - นามสกุล</label><br>
                                    <input type="text" name="fname" placeholder="ชื่อจริง" class="btn btn-outline-dark" required>
                                    <input type="text" name="sname" placeholder="นามสกุล" class="btn btn-outline-dark" required><br>
                                <label style="margin-top: 1%;">ชื่อผู้ใช้</label><br>
                                    <input type="text" name="username" placeholder="ชื่อผู้ใช้" style="width: 100%;" class="btn btn-outline-dark" required><br>
                                <label style="margin-top: 1%;">รหัสผ่าน</label><br>
                                    <input type="password" name="pass" placeholder="รหัสผ่าน" style="width: 100%;" class="btn btn-outline-dark" required><br>
                                <label style="margin-top: 1%;">ยืนยันรหัสผ่าน</label><br>
                                    <input type="password" name="cpass" placeholder="ยืนยันรหัสผ่าน" style="width: 100%;" class="btn btn-outline-dark" required><br>
                                <label style="margin-top: 1%;">เลือกรูปภาพประจำตัว</label><br>
                                    <input type="file" name="img" required>
                                <hr>
                                    <center>
                                        <input type="submit" value="สมัครสมาชิกใหม่" class="btn btn-success">
                                        <a href="index.php" class="btn btn-danger">กลับสู่หน้าหลัก</a>
                                    </center>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </center>
    </div>
</form>
<!-- ----- -->
<!-- Footer -->
<footer>
    <div class="fixed-bottom">
        <a href="ad_login.php">Administrator</a>
    </div>
</footer>
<!-- ----- -->
</body>
</html>