<?php require 'controller/sessionCheck.php'; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/internship/php/PhpExtraAssignment/blog_mvc/view/index.css">
    <link rel="stylesheet" href="/internship/php/PhpExtraAssignment/blog_mvc/view/login.css">
      <link href="https://fonts.googleapis.com/css?family=Mukta+Malar:200,400,700&display=swap" rel="stylesheet">
      <script src="https://cdn.ckeditor.com/4.13.1/basic/ckeditor.js?v=1"></script>
    <title></title>
  </head>
  <body>
  <?php
    require_once 'controller/navbarSession.php';
  ?>
  <div class="wrapper">
  <div class="loginForm addblog">
  <form class="login" action="" method="post" enctype = "multipart/form-data">

  <input type="text" name="bTitle" value="" placeholder="Blog Title" required autocomplete="off">

  <input type="file" name="bImage" value=""placeholder="Upload Image">

  <textarea name="bContent" rows="15" cols="40" required></textarea>
  <input type="submit" name="upload" value="Submit">
</form>
<script type="text/javascript">
	CKEDITOR.replace('bContent');
</script>
</div>
</div>

<?php require 'view/footer.php'; ?>
  </body>
</html>
