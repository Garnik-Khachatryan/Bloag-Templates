<?php 
  $link=mysqli_connect('localhost','root','','blogdb');
  if(isset($_POST['sendBtn'])){
    $query="SELECT * FROM `admin` WHERE `name`='$_POST[adminName]' and `email`='$_POST[adminEmail]' and `password`='$_POST[adminPass]' ";
    $result=mysqli_query($link,$query);
    if(mysqli_num_rows($result)==1){
        session_start();
        $_SESSION['ADMINID']=$_POST['adminName'];
        header("location: admin_board.php");
    }
    else{
        echo"<script>alert('Incorect Date')</script>";
    }
  }
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <h2 class="text-center mb-3 text-success">Admin Login Panel</h2>
    <form action="" class="form-group m-auto w-50 pt-4" method='post'>
       <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="adminName" id="name" class="form-control">
       </div>
       <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="adminEmail" id="email" class="form-control">
       </div>
       <div class="form-group">
          <label for="pass">Password</label>
          <input type="password" name="adminPass" id="pass" class="form-control">
       </div>
       <button  class="btn btn-outline-success" name="sendBtn">SING ING</button>
        
    </form>
</body>
</html>

