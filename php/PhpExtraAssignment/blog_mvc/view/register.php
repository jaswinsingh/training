<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head>
   <meta charset="utf-8">
   <link rel="stylesheet" href="/internship/php/PhpExtraAssignment/blog_mvc/view/login.css">
   <link rel="stylesheet" href="/internship/php/PhpExtraAssignment/blog_mvc/view/index.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <link href="https://fonts.googleapis.com/css?family=Mukta+Malar:200,400,700&display=swap" rel="stylesheet">
   <script src="/internship/php/PhpExtraAssignment/blog_mvc/view/jquery.js?v=4" charset="utf-8"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <title></title>
 </head>
 <body>
   <?php require 'view/navbar_NL.php'; ?>
   <div class="wrapper">
     <div class="loginForm">
       <form class="registerForm" action="" method="post">
           <div class="input">
       <label>FULL NAME</label><sup class="required"> * </sup> : <span class="err"id="error"><?php echo $errorFname ?></span>

       <input type="text" name="fname" value="" required placeholder="FULL NAME"  autocomplete="off" >
       <label>USERNAME</label><sup class="required"> * </sup>  : <span class="err" id="user-availability-status"></span>
       <input type="text" id="uname" name="username" value="" required placeholder="USERNAME" autocomplete="off">
       <label>PASSWORD</label><sup class="required"> * </sup>
       <div class="input">
         <input type="password"  id="password-field"  name="password" value="" required placeholder="PASSWORD">
         <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
       </div>
       <label>EMAIL</label> <sup class="required"> * </sup> : <span class="err" id="errorEmail"><?php echo $errorEmail ?></span>
       <input type="text" name="email" value="" placeholder="EMAIL" autocomplete="off">
       <label>PHONE-NO.</label> : <span class="err" id="errorPhone"><?php echo $errorPhone?></span>
       <input type="tel" name="phone" value="" placeholder="PHONE-NO." autocomplete="off">
         </div>
       <input id="reg" type="submit" name="submit" value="SUBMIT">
     </form>
    </div>
   </div>
 </body>
</html>
