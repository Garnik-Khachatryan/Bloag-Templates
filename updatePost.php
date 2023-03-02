<?php 
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $show_update_query = "SELECT * FROM POSTS WHERE id = '$id'";
        $show_update_data = connect($show_update_query);
        $updateTitle = $show_update_data[0]['title'];
        $updateContent = $show_update_data[0]['content'];
        $updateImg = $show_update_data[0]['img'];
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
        img{
            width:20%;
            height:20%;
        } 
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center text-warning m-3">Update Posts</h1>
    <form action="updatePostRequest.php" class="m-auto" style="width:50%; pt-4" method="post" enctype="multipart/form-data">
        <div class="form-group">
             <label for="" class="text-warning">Update Title</label>
             <input type="text" name="update_title" class="form-control" value="<?= $updateTitle;?>">
        </div>
        <div class="form-group">
            <label for="content" class="text-warning">Update Content</label>
            <textarea name="update_content" id="content" cols="30" rows="10" class="form-control"><?= $updateContent?></textarea>
       </div>
       <div class="form-group">
             <img src="<?=$updateImg?>"><br>
            <label for="img" class="text-warning mt-2">Upload Img</label>
            <input type="file" name="updateImg" id="img" class="form-control">
       </div>
        <button class="btn btn-outline-warning" name="update_post">Update</button>
    </form>
</body>
</html>
