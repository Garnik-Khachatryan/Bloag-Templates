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
<form action="" method="post" class="w-50 m-auto m-3">
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
        <input type="file" name="post_img" id="img" class="form-control">
    </div>
    <div>
        <input type="button" value="Add Post" class="btn btn-outline-primary" name="addPost">
    </div>
</form>
</body>
</html>