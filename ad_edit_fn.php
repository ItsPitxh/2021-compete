<?php 
    session_start();
    include("config.php");

    $admin_id = $_SESSION['admin_id'];
    $name = $_POST['name'];
    
    $sql = "UPDATE admin_tb SET admin_name = '$name' WHERE admin_id = '$admin_id' ";
    $query = mysqli_query($query, $sql);

    $_SESSION['admin_name'] = $name;
    echo "
        <script>
            alert('User Profile Changed');
            window.location = 'ad_edit.php'
        </script>
        ";

?>
