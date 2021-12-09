<?php
session_start();
include('config.php');

$username = $_POST['username'];
$pass = $_POST['pass'];
//Check If Username And Password == 1 In user_tb
$sql = "SELECT * FROM admin_tb WHERE admin_username = '$username' AND admin_pass = '$pass'";
$query = mysqli_query($conn, $sql);
//Input Username and Password Store to SESSION
if(mysqli_num_rows($query)==1){
    $row = mysqli_fetch_array($query);
    $_SESSION['admin_id'] = $row['admin_id'];
    $_SESSION['admin_username'] = $row['admin_username'];
    $_SESSION['admin_name'] = $row['admin_name'];
    $_SESSION['admin_pass'] = $row['admin_pass'];
    $_SESSION['admin_status'] = $row['admin_status'];

    echo "<script> window.location = 'ad_accept.php' </script>";
    
}
//If user and password Doesn't match to user_tb then Alert and redirect to index.php(current page)
else {
    echo 
    "<script>
        alert('Your username and password may not correct, Please try again');
        window.location = 'index.php'
    </script>";
    
}

?>

