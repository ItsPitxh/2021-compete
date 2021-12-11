<?php 
    session_start();
    include("config.php");

    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $cpass = $_POST['cpass'];
    $fname = $_POST['fname'];
    $sname = $_POST['sname'];
    
    if(isset($_FILES['img']['name'])) {
        $img = $_FILES['img']['name'];
        $img_path = "img/";
        move_uploaded_file($_FILES['img']['tmp_name'],$img_path.$img);
    }
    
    $sql = "SELECT user_username FROM user_tb WHERE user_username = '".trim($username)."'";
    $query = mysqli_query($conn, $sql);

    if(mysqli_num_rows($query) == 1) {
        echo "
        <script>
            alert('User Already Existed');
            window.location = 'regis.php'
        </script>
        ";
    }
    else if($pass != $cpass) {
        echo "
        <script>
            alert('Password Confirmation Dont Match');
            window.location = 'regis.php'
        </script>
        ";
    }
    else {
        $sql = "INSERT INTO `user_tb`(`user_username`, `user_pass`, `user_fname`, `user_sname`, `user_img`, `user_status`) VALUES ('$username','$pass','$fname','$sname','$img','pending')";
        $query = mysqli_query($conn, $sql);
        echo "
        <script>
            alert('User Registeration Succeeded');
            window.location = 'index.php';
        </script>
        ";
    }

?>