<?php 
$catTitle=$_POST['title'];
$query = "UPDATE CATEGORIE SET `title` = '$catTitle' WHERE `categorie_id` = ". $_POST['category_id'];
$res = mysqli_query($link,$query)or die(mysqli_connect_error($link));

echo "<script>alert('Success')</script>";




?>