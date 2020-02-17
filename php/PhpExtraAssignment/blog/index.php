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
        <li><a href="#">My Blogs</a> </li>
        <li><a href="#">logout</a> </li>
      </ul>
    </div>
<div class="blogging">
<?php
$displayData="select blog_id,blog_title,blog_author,blog_date from blog_data";
$result=$conn->query($displayData);

while($row = mysqli_fetch_assoc($result))
  {
    echo "<div class='content blog".$row['blog_id']."'>";
    // echo "<div class = 'title'>";
    echo $row['blog_title'];
    // echo "</div>";
    echo $row['blog_author'];
    echo $row['blog_date'];
    echo "</div>";

  }


 ?>

</div>

  </body>
</html>
