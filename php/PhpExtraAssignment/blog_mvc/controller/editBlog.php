<?php
require '../vendor/autoload.php';
session_start();
use model\blog;
$post=[];
$ob= new blog();
$post=$ob->displayContent($_SESSION['BID']);

require '../view/editBlog.php';

if ( isset($_POST['upload']) && isset($_POST['bContent']) && isset($_POST['bTitle'])){
  $title=$_POST['bTitle'];
  $content=$_POST['bContent'];
  $file_store="";

  if(($_FILES['Image']['size']>0)){
    $file_name = $_FILES['Image']['name'];
    // $file_type = $_FILES['file']['type'];
    $file_size = $_FILES['Image']['size'];
    $file_tem_loc = $_FILES['Image']['tmp_name'];
    $file_store = "../../../../../upload/".$file_name;
    move_uploaded_file($file_tem_loc,$file_store);
  }
  else {
    $file_store="../../../../../upload/fixedImage.jpeg";
  }

if ($ob->updateBlog($title,$content,$file_store,53)){
  echo "Successfully updated";
  $post=$ob->displayContent(53);?>
  <script type="text/javascript">
  document.getElementById('test1').value = "<?php echo $post[0]['blog_title']; ?>";
  document.getElementById('test2').value = "<?php echo $post[0]['content']; ?>";
  </script>
<?php
header( "Refresh:1; url='../view/myblog.php'");
  }
else {
  echo "error while updating";
}

}

?>
