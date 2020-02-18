<?php
  require_once 'SqlConnection.php';
  session_start();
  $id=$_SESSION['BID'];
    $displayQuery="select content  from blog_data where blog_id='".$id."'";
    $result=$conn->query($displayQuery);
    $row = mysqli_fetch_assoc($result);
    echo $row['content'];
  
 ?>
