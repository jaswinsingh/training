<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css?v=1">
  </head>
  <body>

  <?php
  include 'heading.html';
  session_start();
  $_SESSION['latest_time'] = time(); // SETTING FORGOT PASSWORD PAGE TIMING TO 30 SEC
  include 'mysql.php';
  if (isset($_POST["upload"]))
  {
    $email=$_POST['email'];   //MATCHING THE EMAIL IN DATATBASE AND FETCHING THE QUESTIOn FROM DATABASE
    $_SESSION['email']=$email;
    $mailquerry="select question from loginuser where email= '".$email."'"; //
    $result = mysqli_query($conn, $mailquerry);

    $row= mysqli_fetch_assoc($result);
    if ($row['question']!="")
    {
       ?>
       <div class="logincontent">
         <div class="login">

       <form class="form loginform" action="checkanswer.php" method="post">
         <?php echo "<h2>".$row['question']." ?</h2>"; ?>
        <input type="text" name="question" value="" placeholder="enter your answer">
        <input type="submit" name="upload" value="Submit">
  <?php
    }
    else
    {
      echo "<h2> email not registered !</h2>";
    }

  }
 ?>  </form>
</div>
 </div>
</body>
</html>
