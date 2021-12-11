<?php 
    session_start();
    include("config.php");
    $user_id = $_REQUEST['user_id'];
    $sql = "UPDATE user_tb SET user_status = 'blocked' WHERE user_id = '$user_id'";
    $query = mysqli_query($conn, $sql);
    echo "
        <script>
            alert('User Blocked');
            window.location = 'ad_blocked.php'
        </script>
        ";

?>