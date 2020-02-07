
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

<?php


   if (isset($_POST['email']))
  {
    $access_key = '8a06741ebfab93a994bdcaa59eebc248';

    // getting email address email
    $email_address = $_POST['email'];
    // Initialize CURL:
    $ch = curl_init('http://apilayer.net/api/check?access_key='.$access_key.'&email='.$email_address.'');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    // Store the data:
    $json = curl_exec($ch);
    curl_close($ch);
    // echo var_dump($json);

    $validationResult = json_decode($json, true);

    if (($validationResult['format_valid']) && ($validationResult['smtp_check']) && ($validationResult['score'])>0.5)
    {
      echo nl2br("\n Welcome ".$_POST["email"]);
      $_SESSION['email']=$_POST["email"];
    }
    else
    {
      echo nl2br("\n Hello spam");
     }

  }
  ?>
