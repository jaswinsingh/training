<?php
session_start();
require '../vendor/autoload.php';
use model\blog;
$obj = new blog();

        // $_SESSION['BID']=$_POST['temp'];
        $post=$obj->displayContent($_SESSION['BID']);
        foreach ($post as $key => $value) { ?>
          <div class='container'>
            <div class='blog'>
              <div class='bTitle'>
                <h1 class ='title'><?php echo $value['blog_title']; ?></h1>
              </div>
             <?php
             if ($value['img']!=""){ ?>
               <img class ='dImage' src = "<?php echo $value['img']; ?>" >
             <?php  }?>
              <div class='bContent'>
                <p><?php echo $value['content']; ?></p>
              </div>

               <div class='bAuther'>
                 <?php echo "By ".$value['blog_author']." ".date('d/m/Y', $value['blog_date']); ?>
              </div>
            </div>
          </div>
    <?php }


?>
