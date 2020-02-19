<?php
require_once 'SqlConnection.php';
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css?v=2">
    <link href="https://fonts.googleapis.com/css?family=Mukta+Malar:200,400,700&display=swap" rel="stylesheet">
    <title></title>
  </head>
  <body>

  <?php
  if (isset($_SESSION['user_id']))
    require 'navbar.php';
  else
    require 'navbar_NL.php';
  ?>
<?php
echo "<div class=\"container\">";
$displayData="select blog_id,blog_title,blog_author,blog_date,img from blog_data";
$result=$conn->query($displayData);
    echo "<div class='content'>";
while($row = mysqli_fetch_assoc($result))
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
    echo "<input type=\"submit\" name=\"upload\" class ='botton' value=\"Read More\"></form>";
    echo "</div>";

  }

      echo "</div>";

  if ((isset($_POST['upload'])) && ($_SERVER["REQUEST_METHOD"]=="POST")){
          $_SESSION['BID']=$_POST['temp'];
          header( "Location: displayBlog.php");
    }
 ?>

  </div>
  </body>
</html>
