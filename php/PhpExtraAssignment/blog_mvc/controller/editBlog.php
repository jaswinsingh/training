<?php
require 'controller/sessionCheck.php';
if (!isset($_SESSION['EID']) && !isset($_SESSION['EID']) ){
  header("Location:http://www.jaswinsingh.com/str/index");
}
require 'vendor/autoload.php';
use model\blog;
$post=[];
$ob= new blog();
$post=$ob->displayContent($_SESSION['EID']);

if ( isset($_POST['upload']) && isset($_POST['bContent']) && isset($_POST['bTitle'])){
  $title = htmlspecialchars($_POST['bTitle']);
  $content = strip_tags($_POST['bContent']);
  $file_store="";

  if(($_FILES['Image']['size']>0)){
    $file_name = $_FILES['Image']['name'];
    // $file_type = $_FILES['file']['type'];
    $file_size = $_FILES['Image']['size'];
    $file_tem_loc = $_FILES['Image']['tmp_name'];
    $file_store = "../../../../upload/".$file_name;
    move_uploaded_file($file_tem_loc,$file_store);
  }
  else {
    $file_store="../../../upload/fixedImage.jpeg";
  }

if ($ob->updateBlog($title,$content,$file_store,$_SESSION['BID'])){
  $msg = "Successfully updated";
  $post=$ob->displayContent($_SESSION['EID']);?>
  <script type="text/javascript">
  document.getElementById('test1').value = "<?php echo $post[0]['blog_title']; ?>";
  document.getElementById('test2').value = "<?php echo $post[0]['content']; ?>";
  </script>
<?php
// unset($_SESSION['BID']);
unset($_SESSION['EID']);
header( "Refresh:1; url='http://www.jaswinsingh.com/str/myblog'");
  }
else {
  $msg ="error while updating";
}

}
require 'view/editBlog.php';




?>
