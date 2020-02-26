<?php
// require 'controller/login.php';
// require 'controller/validateNewUser.php';
// require 'controller/displayAllBlog.php';



$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
echo $url=basename($url);
switch ($url) {
  case 'login':
     include './controller/login.php';
    break;

  case 'index':
    require 'controller/displayAllBlog.php';
    break;

  case 'register':
  require 'controller/validateNewUser.php';
    break;

  case 'displayContent':
    require 'controller/displayContent.php';
    break;

  case 'myblog':
    require 'controller/myblog.php';
    break;

    case 'editblog':
    require 'controller/editBlog.php';
    break;

  case 'addblog':
    require 'controller/addBlog.php';
    break;

  case 'delete':
    require 'controller/delete.php';
    break;

  default:

    break;
}

?>
