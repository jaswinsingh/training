<?php
namespace model;
require '../vendor/autoload.php';
use model\connection;

class blog extends connection{

  function displayBlog($id=''){
    $ob = new connection();
    $conn = $ob->openConnection();
    $post = [];
    $displayData = "select blog_id,blog_title,blog_author,blog_date,img from blog_data where 1 = 1";
    if ($id){
      $displayData .= " AND blog_author ='$id'";
    }
    $result = mysqli_query($conn, $displayData);
    while($row = mysqli_fetch_assoc($result)){

     $post[] = $row;
    }
    return $post;
  }

  function displayContent($id){
    $post = [];
    $ob = new connection();
    $conn = $ob->openConnection();
    $displayQuery="select blog_title,content,img,blog_date,blog_author  from blog_data where blog_id='".$id."'";
    $result=$conn->query($displayQuery);
    $row = mysqli_fetch_assoc($result);
    $post[]=$row;
    return $post;

  }
}
 ?>
