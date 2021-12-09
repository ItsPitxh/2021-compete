<?php
//Include Code From Config.php
session_start();
include('config.php');
//Input User Date From regis.php Store to String
$username = $_POST['username'];
$pass = $_POST['pass'];
$cpass = $_POST['cpass'];
$fname = $_POST['fname'];
$sname = $_POST['sname'];
//Input Files as img and check If File Changed then Move File to 'Img/'
if(isset($_FILES['img']['name'])) {
    $img = $_FILES['img']['name'];
    $imgpath_dir = 'img/';
    move_uploaded_file($_FILES['img']['tmp_name'],$imgpath_dir.$img);
}
//Check if Input Data was Already Existed
$sql = "SELECT user_username FROM user_tb WHERE user_username = '".trim($username)."'";
$query = mysqli_query($conn, $sql);
//If Input Date Already Existed Then Alert Err And Redirect To regis.php(current page)
if(mysqli_num_rows($query)==1) {
    echo "<script>";
    echo "alert('This Username Already Used');";
    echo "window.location = 'regis.php'";
    echo "</script>";
}
//If Two input Passwords Weren't Matching Then Alert And Redirect To regis.php(current page)
else if($pass != $cpass) {
    echo "<script>";
    echo "alert('Password Does Not Match');";
    echo "window.location = 'regis.php'";
    echo "</script>";
}
//If conditions weren't non from above then Alert Then Redirect To index.php(log in page)
else {
    $sql = "INSERT INTO user_tb (user_username, user_pass, user_fname, user_sname, user_img, user_status) VALUES ('$username','$pass','$fname','$sname','$img','pending')";
    $query = mysqli_query($conn, $sql);

    echo "<script>";
    echo "alert('Logged In!!');";
    echo "window.location = 'index.php'";
    echo "</script>";
}

?>



