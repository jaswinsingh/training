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
<form class="" action="" method="post">
  <label>Blog Title</label>
  <input type="text" name="bTitle" value="" required>
  <label>Blog content</label>
  <textarea name="bContent" rows="8" cols="40" required></textarea>
  <input type="submit" name="upload" value="Submit">
</form>
  </body>
</html>
<?php
require_once 'SqlConnection.php';
if (isset($_POST['bContent']) && $_SERVER["REQUEST_METHOD"]=="POST") {
  $title=$_POST['bTitle'];
  $content = $_POST['bContent'];
  $author =  $_SESSION['fname'];
  $userId = $_SESSION['user_id'];
  $date=time();
  // print_r($date);
  $addBlog = "insert into blog_data(blog_title,blog_author,content,blog_date,user_id) values('$title','$author','$content','$date','$userId');";
  if ($conn->query($addBlog))
    echo "blog added success";
    header( "Refresh:1; url='myBlog.php'");
}
 ?>
