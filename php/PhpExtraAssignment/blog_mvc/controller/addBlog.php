<?php
require 'vendor/autoload.php';
use model\blog;
$post=[];
$ob= new blog();

require 'view/addBlog.php';
if (isset($_POST['bContent']) && isset($_POST['bTitle']) && $_SERVER["REQUEST_METHOD"]=="POST") {
  $blogtitle = htmlspecialchars($_POST['bTitle']);
  $content =  strip_tags($_POST['bContent']);
  $blogauthor = $_SESSION['fname'];
  $userId = $_SESSION['user_id'] ;
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

  if ($ob->addBlog($blogtitle,$blogauthor,$content,$userId,$file_store)){
    echo "Blog added successfully";
    header("Location:http://www.jaswinsingh.com/str/myblog");
  }
}


 ?>
