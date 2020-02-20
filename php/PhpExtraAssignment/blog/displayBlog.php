<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <!-- <link rel="stylesheet" href="index.css"> -->
    <link rel="stylesheet" href="displayBlog.css?v=1">
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Mukta+Malar:200,400,700&display=swap" rel="stylesheet">
    <title></title>
  </head>
  <body>


<?php
  require_once 'SqlConnection.php';
  session_start();
  if (isset($_SESSION['BID'])){
  $id=$_SESSION['BID'];

  if (isset($_SESSION['user_id']))
    require 'navbar.php';
  else
    require 'navbar_NL.php';

    $displayQuery="select blog_title,content,img,blog_date,blog_author  from blog_data where blog_id='".$id."'";
    $result=$conn->query($displayQuery);
    $row = mysqli_fetch_assoc($result);
    echo "<div class='container'>";
    echo "<div class='blog'>";
    echo "<div class='bTitle'>";
    echo "<h1 class ='title'>".$row['blog_title']."</h1>";
      echo "</div>";
    if ($row['img']!=""){
      echo "<div class='bImage'>";
      echo "<img class ='dImage' src =".$row['img'].">";
      echo "</div>";
    }

    echo "<div class='bContent'>";
    echo"<p>". $row['content']."</p>";
    echo "</div>";

    echo "<div class='bAuther'>";
    echo  "By ".$row['blog_author']. "  ".date('d/m/Y', $row['blog_date']);;
    echo "</div>";
  }
  else {
    header("Location:index.php");
  }
 ?>

</div>
</body>
</html>
