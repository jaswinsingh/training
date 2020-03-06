<?php //require 'controller/sessionCheck.php';
session_start();
if ((!isset($_SESSION['yes'])) || (!isset($_SESSION['RID']))) {
    header( "Location: http://www.jaswinsingh.com/str/index");
}
echo $_SESSION['RID'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/internship/php/PhpExtraAssignment/blog_mvc/controller/displayBlog.css?v=2">
    <link href="https://fonts.googleapis.com/css?family=Mukta+Malar:200,400,700&display=swap" rel="stylesheet">
    <title></title>
  </head>
  <body>
<?php
require_once 'controller/navbarSession.php';
require 'vendor/autoload.php';
use model\blog;
$obj = new blog();
        // $_SESSION['BID']=$_POST['temp'];
        // echo $_SESSION['BID'];
        $post=$obj->displayContent($_SESSION['RID']);
        foreach ($post as $key => $value) { ?>
          <div class='container'>
            <div class='blog'>
              <div class='bTitle'>
                <h1 class ='title'><?php echo $value['blog_title']; ?></h1>
              </div>
             <?php
             if ($value['img']!=""){ ?>
               <div class="bImage">

               <img class ='dImage' src = "<?php echo $value['img']; ?>" >
             </div>
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
    // unset($_SESSION['BID']);
    // unset($_SESSION['RID']);
    // unset($_SESSION['yes']);
    ?>
        </body>
    </html>
