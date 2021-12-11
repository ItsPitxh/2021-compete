<?php 
    session_start();
    include("config.php");
    $user_id = $_REQUEST['user_id'];
    $sql = "DELETE FROM user_tb WHERE user_id = '$user_id'";
    $query = mysqli_query($conn, $sql);
    echo "
        <script>
            alert('User Declined');
            window.location = 'ad_accept.php'
        </script>
        ";

?>