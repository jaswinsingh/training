<?php
require 'sessionCheck.php';
$id=$_SESSION['BID'];
require_once 'SqlConnection.php';
$editQuery="select blog_title,content  from blog_data where blog_id='".$id."'";
$result = $conn->query($editQuery);
$row = mysqli_fetch_assoc($result);


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<form class="" action="" method="post" enctype = "multipart/form-data">
  <label>Blog Title</label>
  <input type="text" name="bTitle" value="<?php echo$row['blog_title'];?>" required>
  <label>Upload Image</label>
  <input type="file" name="Image" value="">
  <label>Blog content</label>
  <textarea name="bContent" rows="8" cols="40" value=" "required><?php echo $row['content']; ?></textarea>
  <input type="submit" name="upload" value="Submit">
</form>
  </body>
</html>
<?php


if ( isset($_POST['upload']) && isset($_POST['bContent']) && isset($_POST['bTitle'])){
  $title=$_POST['bTitle'];
  $content=$_POST['bContent'];
  $file_store="";

  if(($_FILES['Image']['size']>0)){
    $file_name = $_FILES['Image']['name'];
    // $file_type = $_FILES['file']['type'];
    $file_size = $_FILES['Image']['size'];
    $file_tem_loc = $_FILES['Image']['tmp_name'];
    $file_store = "../../../../upload/".$file_name;
    move_uploaded_file($file_tem_loc,$file_store);
  }

  $updateQuery = "update blog_data set blog_title='".$title."',content='".$content."',blog_date='".time()."',img='".$file_store."'where blog_id='".$id."'";
  if ($conn->query($updateQuery)){
    $editQuery="select blog_title,content  from blog_data where blog_id='".$id."'";
    $result=$conn->query($editQuery);
    $row = mysqli_fetch_assoc($result);
    echo "Updated Successfully";
    header( "Refresh:1; url='myBlog.php'");
  }

}


 ?>
