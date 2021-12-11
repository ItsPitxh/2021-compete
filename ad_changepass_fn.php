<?php 
    session_start();
    include("config.php");
    
    $admin_id = $_SESSION['admin_id'];
    $pass = $_POST['pass'];
    $new_pass = $_POST['new_pass'];
    $cnew_pass = $_POST['cnew_pass'];

    if($_SESSION['admin_pass'] != $pass) {
        echo "
        <script>
            alert('Password Incorrect');
            window.location = 'ad_edit.php'
        </script>
        ";
    }
    else if($new_pass != $cnew_pass) {
        //password confirmation dont match
        echo "
        <script>
            alert('New Password Confirmation Dont Match');
            window.location = 'ad_edit.php'
        </script>
        ";
    }
    else {
        //new pass
        $sql = "UPDATE admin_tb SET admin_pass = '$new_pass' WHERE admin_id = '$admin_id'";
        $query = mysqli_query($conn, $sql);
        $_SESSION['admin_pass'] = $new_pass;
        echo "
        <script>
            alert('Admin Password Changed');
            window.location = 'ad_edit.php'
        </script>
        ";

    }

    


?>