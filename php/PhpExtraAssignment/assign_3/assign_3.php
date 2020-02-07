<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style media="screen">
    *{
      margin: 0;
      padding: 0;
    }
      .pixel{
        height: 50px;
        width: 50px;
        display: inline-block;
      }
      .parent{
        margin: 30px 20px;
        border: 1px solid red;
        display: inline-block;
      }
    </style>
    <title></title>
  </head>
  <body>
    <form class="" action="" method="post">
      <input type="number" name="number" value="" placeholder="enter number">
      <input type="submit" name="upload" value="Submit">
    </form>
    <?php
    // $count="black";
    if (isset($_POST['upload'])) {
      $limit=$_POST['number'];
      echo "<div class =\"parent\">";
      for ($i=0; $i < $limit; $i++)
      {
        for ($j=0; $j <$limit ; $j++)
        {
          if (($i+$j)%2==0)
            echo "<div class =\"pixel\" style =\"background-color:black\"></div>";
          else
            echo "<div class=\"pixel\" style =\"background-color:white\"></div>";
        }
        echo nl2br("\n\r");
      }
      echo "</div>";
    }

//
//
//     if ($count=="white")
//     {
//       echo "<div class =\"pixel\" style =\"background-color:black\"></div>";
//       $count="black";
//     }
//     else{
//       echo "<div class=\"pixel\" style =\"background-color:white\"></div>";
//       $count="white";
//   }  }
//   if ($count=="white")
//   $count='black';
//   else
//     $count='white';
//
//
//   echo nl2br("\n\r");
// }
// echo "</div>";
// }
     ?>


  </body>
</html>
