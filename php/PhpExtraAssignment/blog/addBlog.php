<?php
require 'sessionCheck.php';
require_once 'SqlConnection.php';
include 'vendor/autoload.php';
use blog\blog ;
if (isset($_POST['bContent']) && isset($_POST['bTitle']) && $_SERVER["REQUEST_METHOD"]=="POST") {
  $title=$_POST['bTitle'];
  $content = $_POST['bContent'];
  $author =  $_SESSION['fname'];
  $userId = $_SESSION['user_id'];
  $date=time();
  $file_store="";

  if(($_FILES['bImage']['size']>0)){
    $file_name = $_FILES['bImage']['name'];
    // $file_type = $_FILES['file']['type'];
    $file_size = $_FILES['bImage']['size'];
    $file_tem_loc = $_FILES['bImage']['tmp_name'];
    $file_store = "../../../../upload/".$file_name;
    move_uploaded_file($file_tem_loc,$file_store);

  }
  else {
    $file_store="../../../../upload/fixedImage.jpeg";
  }
  // print_r($date);
  $obj=new blog($title,$author,$date,$content,$userId,$file_store);
  // echo $obj->getblogdate();
  $addBlog = "insert into blog_data(blog_title,blog_author,content,blog_date,user_id,img) values('".$obj->getblogtitle()."','".$obj->getblogauthor()."','".$obj->getcontent()."','".$obj->getblogdate()."','".$obj->getuserid()."','".$obj->getimg()."');";
  if ($conn->query($addBlog)){
    echo "blog added success";
    header( "Refresh:0; url='myBlog.php'");
  }
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css?v=1">
    <link rel="stylesheet" href="login.css?v=1">
      <link href="https://fonts.googleapis.com/css?family=Mukta+Malar:200,400,700&display=swap" rel="stylesheet">
    <title></title>
  </head>
  <body>
  <?php
    require_once 'navbar.php';
  ?>
  <div class="wrapper">
  <div class="loginForm">
  <form class="login" action="" method="post" enctype = "multipart/form-data">

  <input type="text" name="bTitle" value="" placeholder="Blog Title" required>

  <input type="file" name="bImage" value=""placeholder="Upload Image">

  <textarea name="bContent" rows="15" cols="40" required></textarea>
  <input type="submit" name="upload" value="Submit">
</form>
</div>
</div>
  </body>
</html>
