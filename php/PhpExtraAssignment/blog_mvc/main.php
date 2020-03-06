<?php

$url = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
// $url=basename($url);
switch ($url) {

  case '/str':
    require 'controller/displayAllBlog.php';
    break;

  case '/str/login':
     include './controller/login.php';
    break;

  case '/str/index':
    require 'controller/displayAllBlog.php';
    break;

  case '/str/register':
  require 'controller/validateNewUser.php';
    break;

  case '/str/displayContent':
    require 'controller/displayContent.php';
    break;

  case '/str/myblog':
    require 'controller/myblog.php';
    break;

    case '/str/editblog':
    require 'controller/editBlog.php';
    break;

  case '/str/addblog':
    require 'controller/addBlog.php';
    break;

  case '/str/delete':
    require 'controller/delete.php';
    break;

  case '/str/logout':
    require 'controller/logout.php';
    break;

    case '/str/razorpay':
      require 'view/razorpay.php';
      break;
  default:
      require 'view/404.php';
    break;
}

?>
