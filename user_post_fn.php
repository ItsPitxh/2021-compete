<?php 
    session_start();
    include('config.php');
    $user_id = $_SESSION['user_id'];
    $post_text = $_POST['post_text'];
    if(isset($_FILES['img']['name'])) {
        $img = $_FILES['img']['namd'];
        $img_path = 'img/post/';
        move_uploaded_file($_FILES['img']['tmp_name'],$img_path,$img);
    }
    $sql = "INSERT INTO `post_tb`(`user_id`, `post_text`, `post_img`, `post_time`, `post_status`) VALUES ('$user_id','$post_text','$img','$date','active')";
    $query = mysqli_query($conn, $sql);
    echo "
        <script>
            alert('Posted');
            window.location = 'home.php'
        </script>
        ";


?>