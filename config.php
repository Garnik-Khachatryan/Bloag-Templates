<?php   
  $link=mysqli_connect('localhost','root','','blogdb');
//   $create_db="CREATE DATABASE IF NOT EXISTS blogdb";
//   $create_db_query=mysqli_query($link,$create_db)or die(mysqli_error($link));
    //  $create_admin_table="CREATE TABLE IF NOT EXISTS admin(
    //       id int not null  AUTO_INCREMENT,
    //       name varchar(55),
    //       email varchar(55),
    //       password varchar(55),
    //       PRIMARY KEY (id)
    //  )";
    //  $create_admin_table_query=mysqli_query($link,$create_admin_table)or die(mysqli_error($link));
    //  $insert_admin="INSERT INTO admin(name,email,password) values('user','user11@mail.ru','root')";
    //  $insert_admin_query=mysqli_query($link,$insert_admin)or die(mysqli_error($link));
    // $create_category_table="CREATE TABLE IF NOT EXISTS categorie(
    //     categorie_id int not null AUTO_INCREMENT,
    //     title varchar(55),
    //     PRIMARY KEY(categorie_id)
    // )";
    // $create_admin_table_query=mysqli_query($link,$create_category_table)or die(mysqli_error($link));

    // $create_post_table="CREATE TABLE IF NOT EXISTS posts(
    //     id int not null AUTO_INCREMENT,
    //     title varchar(55),
    //     content varchar(255),
    //     img varchar(55),
    //     PRIMARY KEY(id),
    //     FOREIGN KEY (category_id) REFERENCES categorie(categorie_id)
    // )";
    // $create_post_table_query=mysqli_query($link,$create_post_table)or die(mysqli_error($link));
?>