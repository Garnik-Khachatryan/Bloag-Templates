<?php 
   $link=mysqli_connect('localhost','root','','blogdb');
   if(isset($_POST['addPost'])){
        $postTitle=$_POST['post_title'];
        $postContent=$_POST['post_content'];
        $target_dir="upload/";
        $img_name=$_FILES['imgUpload']['name'];
        $img_tmp_name=$_FILES['imgUpload']['tmp_name'];
        $target_file=$target_dir.basename($img_name);
        move_uploaded_file( $img_tmp_name,$target_file);
        $insert_db="INSERT INTO posts(title,content,img) VALUES('$postTitle','$postContent','$target_file') ";
        $insert_db_query=mysqli_query( $link,$insert_db);
        echo "<script>alert('Success')</script>";
        
     }
   else{
     echo "<script>alert('Error!!!!')</script>";
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Add Post</title>
    <style>
        label{
            font-size:25px;
        }
    </style>
</head>
<body>
<h1 class="text-center text-success m-3">Add Posts</h1>
<form action="" method="post" class="w-50 m-auto m-3" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title" class="text-primary">Title</label>
        <input type="text" name="post_title" id="title" class="form-control">
    </div>
    <div class="form-group">
        <label for="content" class="text-primary">Content</label>
        <textarea name="post_content" id="content" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="img" class="text-primary">Upload Img</label>
        <input type="file" name="imgUpload" id="img" class="form-control">
    </div>
    <div>
        <button class="btn btn-outline-primary" name="addPost">Add Post</button>
    </div>
</form>
</body>
</html>