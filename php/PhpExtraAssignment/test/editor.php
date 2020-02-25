<!-- <script src="ckeditor/ckeditor.js?v=1"></script> -->
<script src="https://cdn.ckeditor.com/4.13.1/standard-all/ckeditor.js?v=1"></script>
<!-- <script src="https://cdn.ckeditor.com/ckeditor5/17.0.0/classic/ckeditor.js?v=1"></script> -->

<!-- creating a text area for my editor in the form -->
<form class="" action="" method="post">
  <textarea id="myeditor" name="myeditor" id="myeditor">My name is Asit prakash</textarea>
  <input type="submit" name="upload" value="Submit">
</form>

<!-- creating a CKEditor instance called myeditor -->
<script type="text/javascript">
	CKEDITOR.replace('myeditor');
</script>


<?php if (isset($_POST['upload'])) {
$text = $_POST['myeditor'];
echo $text;
} ?>
