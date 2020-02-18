<?php
session_start();
$id=$_SESSION['BID'];
require_once 'SqlConnection.php';
$editQuery="select blog_title,content  from blog_data where blog_id='".$id."'";
$result=$conn->query($editQuery);
$row = mysqli_fetch_assoc($result);

if ((isset($_POST['upload'])) && ($_SERVER["REQUEST_METHOD"]=="POST")){
  $title=$_POST['bTitle'];
  $content=$_POST['bContent'];

  $updateQuery="update blog_data set blog_title='".$title."',content='".$content."',blog_date='".time()."' where blog_id='".$id."'";
  if ($conn->query($updateQuery)){
    $editQuery="select blog_title,content  from blog_data where blog_id='".$id."'";
    $result=$conn->query($editQuery);
    $row = mysqli_fetch_assoc($result);
    echo "Updated Successfully";
    header( "Refresh:1; url='myBlog.php'");
  }

}
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
  <input type="text" name="bTitle" value="<?php echo$row['blog_title'];?>" required>
  <label>Blog content</label>
  <textarea name="bContent" rows="8" cols="40" value=" "required><?php echo $row['content']; ?></textarea>
  <input type="submit" name="upload" value="Submit">
</form>
  </body>
</html>
