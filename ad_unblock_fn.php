<?php 
    session_start();
    include('config.php');
    $user_id = $_REQUEST['user_id'];
    $sql = "UPDATE user_tb SET user_status = 'verified' WHERE user_id = '$user_id'";
    $query = mysqli_query($conn, $sql);
    echo "<script>window.location = 'ad_block.php'</script>"
?>