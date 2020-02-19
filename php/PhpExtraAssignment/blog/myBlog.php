<?php
require 'sessionCheck.php';
 ?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="index.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<?php
require_once 'navbar.php';
require 'SqlConnection.php';
// $userName='Jaswin Singh';
$userId = $_SESSION['user_id'];
echo "<div class=\"container\">";
$displayData = "select blog_id,blog_title,blog_author,blog_date,img from blog_data where user_id='".$userId."'";
$result = $conn->query($displayData);
echo "<div class ='content'>";
while ($row = mysqli_fetch_assoc($result))
  {
    echo "<div class='blog'>";
    if ($row['img']!=""){
      // echo "<div class='bImage'>";
      echo "<img src =".$row['img'].">";
      // echo "</div>";
    }
    echo "<div class='left'>";
    echo "<div class='bTitle'>";
    echo "<span class ='title'>".$row['blog_title']."</span>";
    echo "</div>";
    echo "<div class='bDate'>";
    echo date('d/m/Y', $row['blog_date']);
    echo "</div>";
    echo "<div class='bAuther'>";
    echo  " ".$row['blog_author'];
    echo "</div>";
    echo "</div>";
    echo "<form  action=\"\" method=\"post\">";
     echo "<input type=\"hidden\" name=\"temp\" value=".$row['blog_id'].">";
     echo "<input type=\"submit\" name=\"readme\" class ='botton' value=\"Read More\">";
     echo "<input type=\"submit\" name=\"edit\"class ='botton' value=\"Edit\">";
     echo "<input type=\"submit\" name=\"delete\" class ='botton' value=\"Delete\">";
     echo "</form>";
    echo "</div>";
  }

  echo "</div>";
    echo "</div>";
 ?>
  </body>
</html>


<?php

if ((isset($_POST['readme'])) && ($_SERVER["REQUEST_METHOD"]=="POST")){
        $_SESSION['BID']=$_POST['temp'];
        header( "Location: displayBlog.php");
  }

  if ((isset($_POST['edit'])) && ($_SERVER["REQUEST_METHOD"]=="POST")){
          $_SESSION['BID']=$_POST['temp'];
          header( "Location: editBlog.php");
    }

    if ((isset($_POST['delete'])) && ($_SERVER["REQUEST_METHOD"]=="POST")){
            $temp=$_POST['temp'];
            $deleteQuery="delete from blog_data where blog_id='".$temp."'";
            if ($conn->query($deleteQuery)){
              echo "deleted Successfully";
              header( "Refresh:1; url='myBlog.php'");
            }
      }
 ?>
