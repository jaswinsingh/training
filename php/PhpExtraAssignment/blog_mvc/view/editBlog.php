<?php

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/internship/php/PhpExtraAssignment/blog_mvc/view/index.css?v=1">
    <link rel="stylesheet" href="/internship/php/PhpExtraAssignment/blog_mvc/view/login.css?v=45">
      <script src="https://cdn.ckeditor.com/4.13.1/standard-all/ckeditor.js?v=1"></script>
    <title></title>
  </head>
  <body>
    <?php
    require_once 'controller/navbarSession.php';
     ?>

  <div class="wrapper">
    <?php if (isset($msg)) {?>
    <div class="updateMsg">
      <?php
       echo $msg;
      ?>
    </div><?php }  ?>
  <div class="loginForm">
<form class="login" action="" method="post" enctype = "multipart/form-data">

  <input type="text" id='test1' name="bTitle" placeholder="Blog Title" value="<?php echo $post[0]['blog_title'];?>" required>

  <input type="file"  name="Image" placeholder="Upload Image" value="">

  <textarea name="bContent" id='test2' rows="15" cols="40" placeholder="Blog content" value=" "required><?php echo $post[0]['content']; ?></textarea>
  <input type="submit" name="upload" value="Submit">
</form>
<script type="text/javascript">
	CKEDITOR.replace('bContent');
</script>
</div>
</div>
  </body>
</html>
