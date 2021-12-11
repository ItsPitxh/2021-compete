<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Lannapoly</title>
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
                        สมัครสมาชิกใหม่
                    </h4>
                    <hr>
                    <form action="user_regis_fn.php" method="post" enctype="multipart/form-data">
                        <label>Name</label><br>
                            <input type="text" name="fname" id="fname" placeholder="ชื่อจริง" class="btn btn-outline-dark" required>
                            <input type="text" name="sname" id="sname" placeholder="นามสกุล" class="btn btn-outline-dark" required><br>
                        <label class="mt-2">Username</label>
                            <input type="text" name="username" placeholder="xxx@gmail.com" style="width: 100%;" class="btn btn-outline-dark mb-2" required>
                        <label>Password</label>
                            <input type="password" name="pass" placeholder="รหัสผ่านของผู้ใช้" style="width: 100%;" class="btn btn-outline-dark mb-2" required>
                        <label>Password Commfirmation</label>
                            <input type="password" name="cpass" placeholder="รหัสผ่านของผู้ใช้" style="width: 100%;" class="btn btn-outline-dark mb-2" required>
                        <label>Upload Your Image</label>
                            <input type="file" name="img" required>
                        <hr>
                        <div class="mb-3">
                            <div class="text-center">
                                <button type="submit" class="btn btn-success nahee">
                                    สมัครสมาชิกใหม่
                                </button>
                                <a href="index.php" class="btn btn-danger nahee">กลับหน้าหลัก</a>
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