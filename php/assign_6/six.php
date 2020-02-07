<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script src="javascript.js" charset="utf-8"></script>
    <link rel="stylesheet" href="formstyle.css">
    <title></title>
  </head>
  <body>
    <h2></h2>
    <form name="form1" method="post" action="displaysix.php" enctype="multipart/form-data">
      First Name - <input id="fName" type="text" name="fName" value="" placeholder="First name" onchange="checkalpha(document.form1.fName) ;"required>
      <br>
      Last Name - <input id="lName" type="text" name="lName" value="" placeholder="Last name" onchange="concat(), checkalpha(document.form1.lName);"required>
      <br>
      Full Name - <input  id="full" type="text" name="fullName" value="" disabled>
      <br>
      <input type="file" name="file" >
      <br>
      <textarea name="comments" rows="8" cols="40"></textarea>
      <br>
      <input type="text" id="pno" name="phone" value="" maxlength="10" placeholder="Enter Ph-no "onchange="addCountryCode()">
      <br>
      <input type="text" id="mail" name="email" value="" placeholder="Enter E-mail" onchange="checkmail()">
      <br>
      <input type="submit" name="upload" value="Submit">
    </form>
  </body>
</html>
