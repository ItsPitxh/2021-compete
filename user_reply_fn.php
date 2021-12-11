<?php 
    session_start();
    include('config.php');
    $user_id = $_SESSION['user_id'];
    $reply_text = $_POST['reply_text'];
    $post_id = $_POST['post_id'];
    
    $sql = "INSERT INTO `reply_tb`(`user_id`,`post_id`, `reply_text`, `reply_time`, `reply_status`) VALUES ('$user_id','$post_id','$reply_text','$date','active')";
    $query = mysqli_query($conn, $sql);
    echo "
        <script>
            alert('Replying to User Post');
            window.location = 'reply.php?post_id=$post_id'
        </script>
        ";


?>