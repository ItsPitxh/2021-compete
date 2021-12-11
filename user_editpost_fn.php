<?php 
    session_start();
    include('config.php');

    $post_id = $_POST['post_id'];
    $user_id = $_POST['user_id'];
    $new_text = $_POST['new_text'];

    if(isset($_FILES['img']['name']) != null) {
        $img = $_FILES['img']['name'];
        $img_path = "img/post/";
        move_uploaded_file($_FILES['img']['tmp_name'],$img_path.$new_img);

    }
    else {
        $img = $currimg;                          
    }

    $sql = "UPDATE post_tb SET post_text = '$new_text', post_img = '$img' WHERE post_id = '$post_id' AND user_id = '$user_id'";
    $query = mysqli_query($conn, $query);
    echo "
        <script>
            alert('Replying to User Post');
            window.location = 'post.php?post_id=$post_id'
        </script>
        ";

?>