<form action="34.php" method="post" enctype="multipart/form-data">
    <label for="txtArea">Text</label>
    <textarea name="txtArea" id='txtArea'> </textarea>
    <br>
    <input type="file" name="uploadfile">
    <input type="submit" value="Send">
    </form>
<?php

if(isset($_POST) && !(empty($_POST))) {
    $name = $_GET['txtArea'];
    copy($_FILES['uploadfile']['tmp_name'], "uploads/" . basename($name));
}