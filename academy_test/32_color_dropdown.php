<form method="post" action="32.php" >
    <select name="color">
        <?php
        $color = $_COOKIE['TextColor'];
        if(isset($color)){
            echo "<option value='$color' selected>$color";
        }?>
        <option value='yellow'>yellow
        <option value='blue'>blue
        <option value="green">green
        <option value='red'>red
    </select>
    <input type='submit' value="send">
</form>

<?php

$a = "sdfgsdgsfgsfgfsdgfgfd";

if(isset($_POST['color'])){
    setcookie("TextColor", $_POST['color'], time() + 144000000);
    $a= "<p style='color: {$_POST['color']}'>$a</p>";
    echo $a;
}
elseif (isset($_COOKIE['TextColor'])){
    $a= "<p style='color: {$_COOKIE['TextColor']}'>$a</p>";
    echo $a;
}
else{
    echo $a;
}

