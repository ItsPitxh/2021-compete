<?php
session_start();
include('config.php');

$username = $_POST['username'];
$pass = $_POST['pass'];
//Check If Username And Password == 1 In user_tb
$sql = "SELECT * FROM user_tb WHERE user_username = '$username' AND user_pass = '$pass'";
$query = mysqli_query($conn, $sql);
//Input Username and Password Store to SESSION
if(mysqli_num_rows($query)==1){
    $row = mysqli_fetch_array($query);
    $_SESSION['user_id'] = $row['user_id'];
    $_SESSION['user_username'] = $row['user_username'];
    $_SESSION['user_pass'] = $row['user_pass'];
    $_SESSION['user_fname'] = $row['user_fname'];
    $_SESSION['user_sname'] = $row['user_sname'];
    $_SESSION['user_img'] = $row['user_img'];
    $_SESSION['user_status'] = $row['user_status'];

    //If user status is pendding then alert and redirect to index.php(current page)
    if($_SESSION['user_status'] == "pending") {
        session_destroy();
        echo 
        "<script>
            alert('Your Account is not Verified yet, Please try again');
            window.location = 'index.php'
        </script>";
    }
    //If user status is block then alert and redirect to index.php(current page)
    else if($_SESSION['user_status'] == "blocked") {
        session_destroy();
        echo 
        "<script>
            alert('Your account is blocked by Administator');
            window.location = 'index.php'
        </script>";
    }
    //If user status is verified then alert and redirect to home.php(home page)
    else if($_SESSION['user_status'] == "verified") {
        echo 
        "<script>
            alert('Logged In, Welcome User');
            window.location = 'home.php'
        </script>";
    }
    //If user status is block then alert and redirect to index.php(current page)
    else{
        session_destroy();
        echo 
        "<script>
            alert('Error Occurred');
            window.location = 'index.php'
        </script>";
        

    }
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

