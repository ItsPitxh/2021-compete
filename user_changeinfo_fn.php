<?php 
    session_start();
    include("config.php");

    $user_id = $_SESSION['user_id'];
    $fname = $_POST['fname'];
    $sname = $_POST['sname'];
    
    $sql = "UPDATE user_tb SET user_fname = '$fname' AND user_sname = '$sname' WHERE user_id = '$user_id'";
    $query = mysqli_query($query, $sql);

    $_SESSION['user_fname'] = $fname;
    $_SESSION['user_sname'] = $sname;
    echo "
        <script>
            alert('User Profile Changed');
            window.location = 'user_edit.php'
        </script>
        ";

?>
