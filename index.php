<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Lannapoly</title>
    <!-- css -->
    <link rel="stylesheet" href="style/css/bootstrap.css">
    <link rel="stylesheet" href="style/style/style.css" type="text/css">
</head>

<body>
    <!-- Background -->
    <div class="background"></div>
    <!-- Form Login -->
    <div class="container">
        <div class="row px-3">
            <div class="col-xl-5 col-lg-6 col-md-8 flex-row mx-auto px-0">
                <div class="shadow-lg p-3 w-3 border-radius bg-white">
                    <h4 class="text-center mt-2 mb-4">
                        เข้าสู่ระบบ
                    </h4>
                    <hr>
                    <form action="user_login_fn.php" method="post">
                        <label>ชื่อผู้ใช้</label>
                            <input type="text" name="username" placeholder="รหัสผู้ใช้" style="width: 100%;" class="btn btn-outline-dark mb-2" required>
                        <label>รหัสผ่าน</label>
                            <input type="password" name="pass" placeholder="รหัสผ่านของผู้ใช้" style="width: 100%;" class="btn btn-outline-dark" required>
                        <hr>
                        <div class="mb-2">
                            <div class="text-center">
                                <button type="submit" class="btn btn-success nahee">
                                    เข้าสู่ระบบ
                                </button>
                                <a href="regis.php" class="btn btn-danger nahee">สมัครสมาชิก</a>
                                <a href="ad_login.php" class="btn btn-secondary nahee">Admin</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- js -->
    <script src="style/js/jquery-3.6.0.min.js"></script>
    <script src="style/js/bootstrap.bundle.min.js"></script>
</body>

</html>