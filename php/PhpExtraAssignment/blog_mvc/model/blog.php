<?php
namespace model;
require '../vendor/autoload.php';
use model\connection;

class blog extends connection{

  function displayBlog($author=''){
    $ob = new connection();
    $conn = $ob->openConnection();
    $post = [];
    $displayData = "select blog_id,blog_title,blog_author,blog_date,img from blog_data where 1 = 1";
    if ($author){
      $displayData .= " AND blog_author ='$author'";
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

  function updateBlog($title,$content,$image,$id){
    $ob = new connection();
    $conn = $ob->openConnection();
    $updateQuery = "update blog_data set blog_title='".$title."',content='".$content."',blog_date='".time()."',img='".$image."'where blog_id='".$id."'";
    if ($conn->query($updateQuery)){
      return true;
    }
    else {
      return false;
    }
  }

  function addBlog($blogtitle,$blogauthor,$content,$userId,$img){
    $ob = new connection();
    $conn = $ob->openConnection();
    $addBlog = "insert into blog_data(blog_title,blog_author,content,blog_date,user_id,img) values('".$blogtitle."','".$blogauthor."','".$content."','".time()."','".$userId."','".$img."');";
    if ($conn->query($addBlog)){
      return true;
    }
    else {
      return false;
    }
  }
}
 ?>
