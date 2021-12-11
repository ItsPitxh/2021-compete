<?php 
    session_start();
    include("config.php");

    $username = $_POST['username'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM admin_tb WHERE admin_username = '$username' AND admin_pass = '$pass'";
    $query = mysqli_query($conn, $sql);

    if(mysqli_num_rows($query) == 1){
        $row = mysqli_fetch_array($query);
        $_SESSION['admin_id'] = $row['admin_id'];
        $_SESSION['admin_username'] = $row['admin_username'];
        $_SESSION['admin_pass'] = $row['admin_pass'];
        $_SESSION['admin_name'] = $row['admin_name'];
        $_SESSION['admin_status'] = $row['admin_status'];
        
        echo "
        <script>
            alert('user logged in, welcome');
            window.location = 'ad_accept.php'
        </script>
        ";
    }
    else {
        session_destroy();
        echo "
        <script>
            alert('Username Or Password May Not Corrected');
            window.location = 'index.php'
        </script>
        ";
    }

?>