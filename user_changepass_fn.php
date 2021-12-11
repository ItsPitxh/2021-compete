<?php 
    session_start();
    include("config.php");
    
    $user_id = $_SESSION['user_id'];
    $pass = $_POST['pass'];
    $new_pass = $_POST['new_pass'];
    $cnew_pass = $_POST['cnew_pass'];

    if($_SESSION['user_pass'] != $pass) {
        echo "
        <script>
            alert('Password Incorrect');
            window.location = 'user_edit.php'
        </script>
        ";
    }
    else if($new_pass != $cnew_pass) {
        //password confirmation dont match
        echo "
        <script>
            alert('New Password Confirmation Dont Match');
            window.location = 'user_edit.php'
        </script>
        ";
    }
    else {
        //new pass
        $sql = "UPDATE user_tb SET user_pass = '$new_pass' WHERE user_id = '$user_id'";
        $query = mysqli_query($conn, $sql);
        $_SESSION['user_pass'] = $new_pass;
        echo "
        <script>
            alert('user Password Changed');
            window.location = 'user_edit.php'
        </script>
        ";

    }

    


?>