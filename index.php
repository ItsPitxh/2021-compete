<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ล็อกอิน | Lannapoly</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
<!-- Login -->
<form action="login_ch.php" method="post">
    <div class="login">
        <center>
            <table>
                <tr>
                    <td>
                        <div class="box">
                            <font color="green"><h1>Lannapoly</h1></font>
                            <h3>วิทยาลัยโปลิเทคนิคลานนาเชียงใหม่</h3>
                        </div>
                    </td>
                    <td>
                        <div class="box2">
                            <div class="shadow-lg p-3 w-3 bg-white">
                                <label for="">ชื่อผู้ใช้</label>
                                    <input type="text" name="username" placeholder="ชื่อผู้ใช้" style="width: 100%;" class="btn btn-outline-dark" required>
                                <label style="margin-top: 1%;">รหัสผ่าน</label>
                                    <input type="password" name="pass" placeholder="รหัสผ่าน" style="width: 100%;" class="btn btn-outline-dark" required><br><br>
                                    <input type="submit" value="เข้าสู่ระบบ" style="width: 100%;" class="btn btn-success">
                                <hr>
                                    <center>
                                        <a href="regis.php" style="width:100%;" class="btn btn-warning">สมัครสมาชิกใหม่</a>
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