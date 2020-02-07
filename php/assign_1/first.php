
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script type="text/javascript">

    function concat()
    {
        // used to concat first name and last name in full name
        var first=document.getElementById("fName").value;
        var last=document.getElementById("lName").value;
        document.getElementById("full").value=first.concat(" ",last);
    }

    function checkalpha(inputtxt)
    {
      //used to check the value is alphabet in First Name and Last Name
        var letters = /^[a-zA-Z]*$/;
        var valid= !letters.test(inputtxt.value)
        if(valid)
        {
          alert('alphabets only');
        }
    }
    </script>
    <title></title>
  </head>
  <body>
    <form name="form1" method="post" action="displayfirst.php" enctype="multipart/form-data">
      First Name - <input id="fName" type="text" name="fName" value="" placeholder="First name" onchange="checkalpha(document.form1.fName) ;"required>
      <br><br>
      Last Name - <input id="lName" type="text" name="lName" value="" placeholder="Last name" onchange="concat(), checkalpha(document.form1.lName);"required>
      <br><br>
      Full Name - <input  id="full" type="text" name="fullName" value="" disabled>
      <br><br>
      <input type="submit" name="submit" >
    </form>
    </body>
  </html>
