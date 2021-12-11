<?php 
    session_start();
    include("config.php");

    $username = $_POST['username'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM user_tb WHERE user_username = '$username' AND user_pass = '$pass'";
    $query = mysqli_query($conn, $sql);

    if(mysqli_num_rows($query) == 1){
        $row = mysqli_fetch_array($query);
        $_SESSION['user_id'] = $row['user_id'];
        $_SESSION['user_username'] = $row['user_username'];
        $_SESSION['user_pass'] = $row['user_pass'];
        $_SESSION['user_fname'] = $row['user_fname'];
        $_SESSION['user_sname'] = $row['user_sname'];
        $_SESSION['user_img'] = $row['user_img'];
        $_SESSION['user_status'] = $row['user_status'];
        
        if($_SESSION['user_status'] == 'blocked') {
            session_destroy();
        echo "
        <script>
            alert('User Has been Blocked By administrator');
            window.location = 'index.php'
        </script>
        ";
        }
        else if($_SESSION['user_status'] == 'pending') {
            session_destroy();
        echo "
        <script>
            alert('User Has to be verified by administrator');
            window.location = 'index.php'
        </script>
        ";
        }
        else if($_SESSION['user_status'] == 'verified') {

            echo "
        <script>
            alert('user logged in, welcome');
            window.location = 'home.php'
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