
<?php
require 'vendor/autoload.php';
use model\blog;
require 'view/myblog.php';
 ?>
<div class="container">
<div class='content'>
<?php
  $obj = new blog();
 $post = $obj->displayBlog($_SESSION['fname']);
 // echo $_SESSION['user_id'];
if (!empty($post)){
 foreach ($post as $key => $value) { ?>
   <div class='blog'>
    <?php
    if ($value['img']!=""){ ?>
      <img src = "<?php echo $value['img']; ?>" >
    <?php  }?>
     <div class='left'>
       <div class="co"><!-- wrap used for whole content -->
         <div class='bTitle'>
           <span class ='title'><?php echo $value['blog_title']; ?></span>
         </div>
           <div class="style">
           </div>
           <div class="con"><!--wrap used for content -->
            <p><?php echo $value['content']; ?></p>
           </div>
        </div>
        <form class='form new' action="/internship/php/PhpExtraAssignment/blog_mvc/controller/action.php" method="post">
          <input type="hidden" name = "temp" value = "<?php echo $value['blog_id']; ?>">
          <input type="submit" name="readme" class ='botton' value="Read More">
          <input type="submit" name="edit"class ='botton' value="Edit">
          <input type="submit" name="delete" class ='botton' value="Delete">
      </form>
    </div>
  </div>
<?php  }
}
else{
  ?>
  <div class="updateMsg">
<?php echo "No Blogs !!!" ?>
  </div>
<?php
}
?>
  </div>
  </div>

  <?php //require 'view/footer.php'; ?>
