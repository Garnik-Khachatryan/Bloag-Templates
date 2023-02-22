<?php
$link=mysqli_connect('localhost','root','','blogdb');
  session_start();
 if(isset($_POST['logOut'])){
    session_destroy();
    header("location:admin_login.php");
 }
 
 $show_post_date="SELECT * FROM posts ";
 $show_post_query=mysqli_query($link,$show_post_date); 
 $show_cat_date="SELECT * FROM categorie";
 $show_cat_query=mysqli_query($link,$show_cat_date);
?> 

<!DOCTYPE html>
<html lang="en">
<head> 

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <style>
       div> button{
            padding:10px 15px !important;
         
        }
        .header h2{
            font-size:25px;
            padding-top:15px;
            color:#EB0D32;
        }
        
        .menu ul {
           display:flex;
           
        }
        .menu ul li{
           margin-left:20px;
           list-style-type: none;
           font-size:22px;
           padding-top:15px;
           color:#EB0D32;
           transition:2s ease-out ;
        }
        .menu ul li:hover{
            color:#91283A;
            cursor: pointer;
            font-size:20px;
        }
        .header{
            margin-bottom:15px;
        }
        .post-content{
            opacity: 1;
            display:flex;
        }
        .post-active {
            display:flex  !important;
        }
        .categorie-active{
            display:flex !important;
        }
        .categorie-content{
            opacity: 1;
            display:flex;
            margin-top:20px;
        }
        img{
            width:80px;
            height:80px;
        }
        .crudBtn a{
            padding-left:20px;
        }
     </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
    <div class="d-flex bg-warning justify-content-around  p-2 header">
        <h2>Admin Panel Board</h2>
            <nav class="menu">
                <ul>
                    <li id="post">Post</li>
                    <li id="categorie">Categorie</li>
                </ul>
            </nav>
            <form method="post">
                <button class="btn btn-outline-danger p-2 m-3" name="logOut">LOG OUT</button>
            </form>
    </div>
    <div class="post-content  post-active" id="post-table">
        <table class="table w-75 m-auto m-3 p-3">
            <thead class="thead-dark">
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Content</th>
                <th scope="col">IMG</th>
                <th scope="col">ACTION</th>
                </tr>
           </thead>
            <tbody>
                <?php while($row=mysqli_fetch_array($show_post_query)):?>
                    <tr>
                            <td><?= $row['id']?></td>
                            <td><?= $row['title']?></td>
                            <td><?= $row['content']?></td>
                            <td><img src="<?= $row['img']?>"></td>
                            <td>
                                <div class="d-fle crudBtn">
                                <a href="show.php?id=<?= $row["id"] ?>>" class="btn btn-outline-success">Show</a> 
                                <a href="update.php?id=<?= $row["id"] ?>>" class="btn btn-outline-warning">Updet</a>
                                <a href="index.php?id=<?= $row["id"] ?>>" class="btn btn-outline-danger">Delete</a>
                                </div>
                           </td>
                    </tr>

                <?php endwhile; ?>
            </tbody>
        </table>
            <form action="add_post.php" method="post">
                 <button class="btn btn-success m-3">Add Post+</button>
            </form>
    </div>
    <div class="categorie-content   categorie-active" id="cat-table">
        <table class="table w-75 m-auto m-3 p-3">
        <thead class="thead-dark">
                <tr>
                    <th scope="col">Categorie ID</th>
                    <th scope="col">Categorie Title</th>
                    <th scope="col">Action</th>
                </tr>
           </thead>
            <tbody>
            <?php while($val=mysqli_fetch_array($show_cat_query)):?>
                    <tr>
                            <td><?= $val['categorie_id']?></td>
                            <td><?= $val['title']?></td>
                            <td>
                                <div class="d-fle crudBtn">
                                    <a href="show.php?id=<?= $row["id"] ?>>" class="btn btn-outline-success">Show</a> 
                                    <a href="update.php?id=<?= $row["id"] ?>>" class="btn btn-outline-warning">Updet</a>
                                    <a href="index.php?id=<?= $row["id"] ?>>" class="btn btn-outline-danger">Delete</a>
                                </div>
                           </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
        <form action="add_cat.php" method="post">
                 <button class="btn btn-success m-3">Add Categorie+</button>
            </form>
    </div>
</body>
<!-- <script>
  let post=document.getElementById('post');
  let post_table=document.getElementById('post-table');
  let categoire=document.getElementById('categorie');
  let cat_table=document.getElementById('cat-table');
  post.addEventListener('click',function(){
    post_table.style.opacity="2";
    cat_table.style.opacity="0";
    post_table.classList.toggle('post-active');
  });
  categoire.addEventListener('click',function(){
    cat_table.classList.toggle('categorie-active');
    cat_table.style.opacity="2";
    post_table.style.opacity="0";
    cat_table.style.transform="translate(5px,-55px)";
  });
</script> -->
</html>