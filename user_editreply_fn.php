<?php 
    session_start();
    include('config.php');

    $post_id = $_POST['post_id'];
    $user_id = $_POST['user_id'];
    $new_text = $_POST['new_text'];

    $sql = "UPDATE reply_tb SET reply_text = '$new_text' WHERE user_id = '$user_id'";
    $query = mysqli_query($conn, $query);
    echo "
        <script>
            alert('Replying to User Post');
            window.location = 'post.php?post_id=$post_id'
        </script>
        ";


?>