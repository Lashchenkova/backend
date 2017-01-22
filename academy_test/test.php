form.html
<form method="post" action="test.php" enctype="multipart/form-data">
<textarea name='txtArea'></textarea>
<input type="file" name="file">
<input type="submit">
</form>

save.php
<?php
if(isset($_FILES) ){
    copy($_FILES['file']['tmp_name'], 'uploads/' . $_POST['txtArea'] . "." . basename($_FILES['file']['type']));
}