<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator | Lannapoly</title>
    <link rel="stylesheet" href="css/adlogin.css">
</head>
<body>
<!-- Ad_login -->
<form action="ad_login_ch.php" method="post">
    <div class="admin">
        <center>
            <table>
                <tr>
                    <td>
                        <div class="box">
                            <div class="shadow-lg p-3 w-3 bg-white">
                                <center><h3>Administrator</h3></center>
                            <hr>
                                <input type="text" name="username" placeholder="ชื่อผู้ดูแล" style="width: 100%;" class="btn btn-outline-dark" required><br><br>
                                <input type="password" name="pass" placeholder="รหัสผ่าน" style="width: 100%;" class="btn btn-outline-dark" required><br><br>
                                <input type="submit" value="เข้าสู่ระบบ" style="width: 100%;" class="btn btn-success">
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
        <a href="index.php">User</a>
    </div>
</footer>
<!-- ----- -->
</body>
</html>