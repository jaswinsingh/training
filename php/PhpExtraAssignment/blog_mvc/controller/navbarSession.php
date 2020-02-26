<?php

 if (isset($_SESSION['user_id']))
   require 'view/navbar.php';
 else
   require 'view/navbar_NL.php';
 ?>
