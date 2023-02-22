<?php 
$link=mysqli_connect('localhost','root','','blogdb');
if(isset($_POST['addCat'])){
   $catTitle=$_POST['cat_title'];
   $insert_db="INSERT INTO categorie(title) VALUES('$catTitle') ";
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
    <title>Add Categoire</title>
    <style>
        label{
            font-size:25px;
        }
    </style>
</head>
<body>
<h1 class="text-center text-success m-3">Add Categories</h1>
<form action="" method="post" class="w-50 m-auto m-3" >
    <div class="form-group" >
        <label for="title" class="text-primary">Title</label>
        <input type="text" name="cat_title" id="title" class="form-control">
    </div>
    <div>
        <button class="btn btn-outline-primary" name="addCat">Add Categorie</button>
    </div>
</form>
</body>
</html>