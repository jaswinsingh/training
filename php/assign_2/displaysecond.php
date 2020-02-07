
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body>
    <?php
    if ( $_FILES['file']['size']>0)
      {
        $file_name = $_FILES['file']['name'];
        $file_type = $_FILES['file']['type'];
        $file_size = $_FILES['file']['size'];
        $file_tem_loc = $_FILES['file']['tmp_name'];
        $file_store = "upload/".$file_name;
        move_uploaded_file($file_tem_loc,$file_store);
        print_r($file_store);
        // echo "<img src =".$file_store."/>";
        //   echo "Hello ".$_POST["fName"]," ",$_POST["lName"];
      }
    else
      {
         echo "please upload an image ";
      }
     ?>
  </body>
</html>
