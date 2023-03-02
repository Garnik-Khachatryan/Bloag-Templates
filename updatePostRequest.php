<?php 

if (isset($_POST['update_post_submit']))
{
    $postTitle=$_POST['title'];
    $postContent=$_POST['content'];
    if (!empty($_FILES['image']['name'])) {
        $target_dir="upload/";
        $img_name=$_FILES['image']['name'];
        $img_tmp_name=$_FILES['image']['tmp_name'];
        $target_file = basename($img_name);
        move_uploaded_file( $_FILES['image']['tmp_name'], $target_file);
    } else {
        $target_file = $_POST['oldImage'];
    }

    $query = "UPDATE POSTS SET `title` = '$postTitle', `content` = '$postContent', `img` = '$target_file' WHERE `id` = ". $_POST['post_id'];
    $res = mysqli_query($link,$query);

    echo "<script>alert('Success')</script>";
}
header("location:admin_board.php");



?>