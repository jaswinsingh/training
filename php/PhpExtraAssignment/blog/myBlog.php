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
echo "<a href=\"addBlog.php\">Add Blog</a>";
require 'SqlConnection.php';
// $userName='Jaswin Singh';
$userId = $_SESSION['user_id'];
$displayData = "select blog_id,blog_title,blog_author,blog_date from blog_data where user_id='".$userId."'";
$result = $conn->query($displayData);
echo "<div class ='content'>";
while ($row = mysqli_fetch_assoc($result))
  {
    // echo "<div class='content blog".$row['blog_id']."'>";
    echo "<div class = 'title'>";
    echo $row['blog_title'];
    echo "</div>";
    echo "<div class ='author'>";
    echo $row['blog_author'];
    echo date('d/m/Y', $row['blog_date']);
    echo "</div>";
    echo "<div class = 'button'>";
    echo "<form  action=\"\" method=\"post\">";
    echo "<input type=\"hidden\" name=\"temp\" value=".$row['blog_id'].">";
    echo "<input type=\"submit\" name=\"readme\" value=\"Read More\">";
    echo "<input type=\"submit\" name=\"edit\" value=\"Edit\">";
    echo "<input type=\"submit\" name=\"delete\" value=\"Delete\">";
    echo "</form>";

    echo "</div>";
  }

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
