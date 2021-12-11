<?php  
    session_start();
    include("config.php");
    $user_id = $_SESSION['user_id'];

    if(isset($_FILES['img']['name'])) {
        $img = $_FILES['img']['name'];
        $img_path = 'img/';
        move_uploaded_file($_FILES['img']['tmp_name'],$img_path.$img);
    }
    $sql = "UPDATE user_tb SET user_img = '$img' WHERE user_id = '$user_id'";
    $query = mysqli_query($conn, $sql);
    $_SESSION['user_img'] = $img;
    echo "
        <script>
            alert('user Password Changed');
            window.location = 'user_edit.php'
        </script>
        ";


?>