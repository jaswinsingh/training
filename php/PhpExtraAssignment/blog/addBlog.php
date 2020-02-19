<?php
require 'sessionCheck.php';

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<form class="" action="" method="post" enctype = "multipart/form-data">
  <label>Blog Title</label>
  <input type="text" name="bTitle" value="" required>
  <label>Upload Image</label>
  <input type="file" name="bImage" value="">
  <label>Blog content</label>
  <textarea name="bContent" rows="8" cols="40" required></textarea>
  <input type="submit" name="upload" value="Submit">
</form>
  </body>
</html>
<?php
require_once 'SqlConnection.php';
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
  // print_r($date);
  $addBlog = "insert into blog_data(blog_title,blog_author,content,blog_date,user_id,img) values('$title','$author','$content','$date','$userId','$file_store');";
  if ($conn->query($addBlog))
    echo "blog added success";
    header( "Refresh:1; url='myBlog.php'");
}
 ?>
