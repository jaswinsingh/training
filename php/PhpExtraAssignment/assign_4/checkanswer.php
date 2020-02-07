<?php
session_start();
include 'mysql.php';
 if (isset($_POST['upload']))   //CHECKING THE ANSWER (SECURITY QUESTIOn) FROM USER IN DATABASE
 {
    $question=$_POST['question'];
    $questionQuerry='select answer as ans from loginuser where email="'.$_SESSION['email'].'"';
    $result = mysqli_query($conn, $questionQuerry);
    $row= mysqli_fetch_assoc($result);
    if($row['ans']==$_POST['question'])
    {echo "success";
    header("location:resetPassword.php");
    }else {
        include 'heading.html';?>
      <!DOCTYPE html>
      <html lang="en" dir="ltr">
        <head>
          <meta charset="utf-8">
          <link rel="stylesheet" href="style.css">
          <title></title>
        </head>
        <body>
          <div class="logincontent">
            <div class="login">
              <div class="form loginform">
                <h2> Wrong Answer ! </h2>
              </div>
              </div>
              </div>

        </body>
      </html>
  <?php    }
  }
?>
