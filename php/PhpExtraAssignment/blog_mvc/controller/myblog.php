
<?php
require '../vendor/autoload.php';
use model\blog;

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
      <div class='content'>
<?php
  $obj = new blog();
 $post = $obj->displayBlog($_SESSION['fname']);
 // echo $_SESSION['user_id'];

 foreach ($post as $key => $value) { ?>
   <div class='blog'>
    <?php
    if ($value['img']!=""){ ?>
      <img src = "<?php echo $value['img']; ?>" >
    <?php  }?>
     <div class='left'>
       <div class='bTitle'>
         <span class ='title'><?php echo $value['blog_title']; ?></span>
       </div>
       <div class='bDate'>
         <?php echo date('d/m/Y', $value['blog_date']); ?>
      </div>
      <div class='bAuther'>
        <?php echo $value['blog_author']; ?>
      </div>
    </div>
    <form class='form' action="../controller/action.php" method="post">
    <input type="hidden" name = "temp" value = "<?php echo $value['blog_id']; ?>">
    <input type="submit" name="readme" class ='botton' value="Read More">
    <input type="submit" name="edit"class ='botton' value="Edit">
    <input type="submit" name="delete" class ='botton' value="Delete">

  </form>
  </div>
<?php  }


?>
  </div>



  </body>
</html>