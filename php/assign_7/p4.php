
 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    if (isset($_POST["phone"]))
    {
      if(preg_match("/^\+91[0-9]{10}$/",$_POST["phone"]))
       {
         echo "phone no  ".$_POST["phone"];
         $_SESSION['phn']=$_POST["phone"];
        }
        else {
          echo "enter valid phn-no [+91xxxxxxxxxx]";
        }
    }
  ?>
</body>
</html>
