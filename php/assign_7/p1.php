<html>
<body>

  <?php

    if (isset($_POST["fName"])&&isset($_POST["lName"]))
    {
      if((preg_match("/^[a-zA-Z]+$/",$_POST["fName"]))&&(preg_match("/^[a-zA-Z]+$/",$_POST["lName"])))
      {
        echo "Hello ".$_POST["fName"]," ",$_POST["lName"];
        $_SESSION['fname']=$_POST["fName"];
        $_SESSION['lname']=$_POST["lName"];
      }
      else
      {
        echo "please use alphabets only";
      }
   }

 ?>
</body>
</html>
