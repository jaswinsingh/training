<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>



<?php
  require_once 'SqlConnection.php';
  session_start();
  if (isset($_SESSION['BID'])){
  $id=$_SESSION['BID'];
    $displayQuery="select blog_title,content,img  from blog_data where blog_id='".$id."'";
    $result=$conn->query($displayQuery);
    $row = mysqli_fetch_assoc($result);
    echo "<div class='blog'>";
    echo "<div class='bTitle'>";
    echo $row['blog_title'];
    echo "</div>";
    if ($row['img']!=""){
      echo "<div class='bImage'>";
      echo "<img src =".$row['img']." style=\"height:200px;width:200px;\">";
      echo "</div>";
    }
    echo "<div class='bContent'>";
    echo $row['content'];
    echo "</div>";


    echo "</div>";
  }
  else {
    header("Location:index.php");
  }
 ?>

</body>
</html>
