<?php
session_start();
require './vendor/autoload.php';
require 'navbarSession.php';
require 'view/index.php';
use model\blog;
 ?>
  <div class="container">
<?php
  $obj = new blog();
 $post = $obj->displayBlog();?>
 <div class='content'>
   <?php
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

         <div class="style">
         </div>

         <div class='bAuther'>
           <?php echo $value['blog_author']; ?>
         </div>
         <div class='bDate'>
           <?php echo date('d/m/Y', $value['blog_date']); ?>
        </div>

    </div>
    <form class='form new' action="/internship/php/PhpExtraAssignment/blog_mvc/controller/action.php" method="post">
    <input type="hidden" name = "temp" value = "<?php echo $value['blog_id']; ?>">
    <input type="submit" name="readme" class ='botton' value="Read More"></form>
  </div>
<?php  }

?>

</div>
</div>
<?php require 'view/footer.php'; ?>
