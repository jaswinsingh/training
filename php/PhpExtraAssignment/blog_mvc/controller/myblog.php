
<?php
require 'vendor/autoload.php';
use model\blog;


require 'view/myblog.php';
 ?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="/internship/php/PhpExtraAssignment/blog_mvc/view/jquery.js?v=2" charset="utf-8"></script>
<div class="container">
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
    <form class='form' action="/internship/php/PhpExtraAssignment/blog_mvc/controller/action.php" method="post">
    <input type="hidden" name = "temp" value = "<?php echo $value['blog_id']; ?>">
    <input type="submit" name="readme" class ='botton' value="Read More">
    <input type="submit" name="edit"class ='botton' value="Edit">
    <input type="submit" name="delete" class ='botton' value="Delete">

  </form>
  </div>
<?php  }


?>
  </div>
  </div>
