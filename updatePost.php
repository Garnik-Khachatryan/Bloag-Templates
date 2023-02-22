<?php 
$link=mysqli_connect('localhost','root','','blogdb');
   if(isset($_GET['id'])){
    $id=$_GET['id'];
   }
   if(isset($_POST['update_post'])){
        $target_dir="upload/";
        $imgs_name=$_FILES['updateImg']['name'];
        $imgs_tmp_name=$_FILES['updateImg']['tmp_name'];
        $target_file=$target_dir.basename($img_name);
        move_uploaded_file( $imgs_tmp_name,$target_file);
        $updateTitle=$_POST['update_title'];
        $updateContent=$_POST['update_content'];
        $query="UPDATE posts SET title='$updateTitle',content='$updateContent' img='$target_file' where id='$id'";
        $res=mysqli_query($link,$query) or die(mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <style>
        form{
            padding-top:80px;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center text-warning m-3">Update Posts</h1>
    <form action="admin_board.php" class="m-auto" style="width:50%; pt-4" method="post" enctype="multipart/form-data">
        <div class="form-group">
             <label for="" class="text-warning">Update Title</label>
             <input type="text" name="update_title" class="form-control">
        </div>
        <div class="form-group">
            <label for="content" class="text-warning">Update Content</label>
            <textarea name="update_content" id="content" cols="30" rows="10" class="form-control"></textarea>
       </div>
       <div class="form-group">
            <label for="img" class="text-warning">Upload Img</label>
            <input type="file" name="updateImg" id="img" class="form-control">
       </div>
        <button class="btn btn-outline-warning" name="update_post">Update</button>
    </form>
</body>
</html>
