<?php
require_once 'SqlConnection.php';
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css">
    <title></title>
  </head>
  <body>
    <div class="navbar">
      <ul >
        <li><a href="myBlog.php">My Blogs</a> </li>
        <li><a href="#">logout</a> </li>
      </ul>
    </div>
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

  session_start();  
  if ((isset($_POST['upload'])) && ($_SERVER["REQUEST_METHOD"]=="POST")){
          $_SESSION['BID']=$_POST['temp'];
          header( "Location: displayBlog.php");
    }
 ?>
  </table>
</div>

  </body>
</html>
