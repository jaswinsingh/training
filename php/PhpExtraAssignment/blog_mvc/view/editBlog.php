
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="index.css?v=1">
    <link rel="stylesheet" href="login.css?v=1">
    <title></title>
  </head>
  <body>
    <?php
    require_once 'navbar.php';
     ?>
  <div class="wrapper">
  <div class="loginForm">
<form class="login" action="" method="post" enctype = "multipart/form-data">

  <input type="text" id='test1' name="bTitle" placeholder="Blog Title" value="<?php echo $post[0]['blog_title'];?>" required>

  <input type="file"  name="Image" placeholder="Upload Image" value="">

  <textarea name="bContent" id='test2' rows="15" cols="40" placeholder="Blog content" value=" "required><?php echo $post[0]['content']; ?></textarea>
  <input type="submit" name="upload" value="Submit">
</form>
</div>
</div>
  </body>
</html>
