<?php
// require_once '../controller/validateNewUser.php';

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
   <meta charset="utf-8">
   <link rel="stylesheet" href="/internship/php/PhpExtraAssignment/blog_mvc/view/login.css?v=5">
   <link rel="stylesheet" href="/internship/php/PhpExtraAssignment/blog_mvc/view/index.css?v=2">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="../view/jquery.js?v=5" charset="utf-8"></script>
   <title></title>
 </head>
 <body>
   <div class="wrapper">
     <div class="loginForm">
       <form class="registerForm" action="" method="post">
       <!-- <label>FULL NAME</label> -->
       <input type="text" name="fname" value="" required placeholder="FULL NAME"><span class="err" id="error"><?php echo $errorFname ?></span>
       <!-- <label>USERNAME</label> -->
       <input type="text" id="uname" name="username" value="" required placeholder="USERNAME"><span class="err" id="user-availability-status"></span>
       <!-- <label>PASSWORD</label> -->
       <input type="password" name="password" value="" required placeholder="PASSWORD">
       <!-- <label>EMAIL</label> -->
       <input type="text" name="email" value="" placeholder="EMAIL"><span class="err" id="errorEmail"><?php echo $errorEmail ?></span>
       <!-- <label>PHONE-NO.</label> -->
       <input type="tel" name="phone" value="" placeholder="PHONE-NO."><span class="err" id="errorPhone"><?php echo $errorPhone?></span>
       <input id="reg" type="submit" name="submit" value="SUBMIT">

     </form>
   </div>
   </div>
 </body>
</html>
