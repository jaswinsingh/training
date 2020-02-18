<?php
require_once 'SqlConnection.php';
session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css">
    <title></title>
  </head>
  <body>
  <?php
  if (isset($_SESSION['user_id']))
    require 'navbar.php';
  else
    require 'navbar_NL.php';
  ?>
<div class="blogging">
  <table class="blogTable">
    <tr>
      <th>Title</th>
      <th>Author</th>
      <th>Date published</th>
    </tr>



<?php
$displayData="select blog_id,blog_title,blog_author,blog_date from blog_data";
$result=$conn->query($displayData);

while($row = mysqli_fetch_assoc($result))
  {
    // echo "<div class='content blog".$row['blog_id']."'>";
    // echo "<div class = 'title'>";
    echo "<tr>";
    echo "<td>".$row['blog_title']."</td>";
    // echo "</div>";
    echo "<td>".$row['blog_author']."</td>";
    echo "<td>".date('d/m/Y', $row['blog_date']);
    echo "<form  action=\"\" method=\"post\">";
    echo "<input type=\"hidden\" name=\"temp\" value=".$row['blog_id'].">";
    echo "<input type=\"submit\" name=\"upload\" value=\"Read More\"></form></td>";
    echo "</tr>";

  }


  if ((isset($_POST['upload'])) && ($_SERVER["REQUEST_METHOD"]=="POST")){
          $_SESSION['BID']=$_POST['temp'];
          header( "Location: displayBlog.php");
    }
 ?>
  </table>
</div>

  </body>
</html>
