<?php
if(isset($_COOKIE['login']) && isset($_COOKIE['password'])) {
    echo "HELLO, " . $_COOKIE['login'] . ". " . "<a href='/academy_test/logout.php'>LOG OUT</a>";
}else{
    header('Location: /academy_test/35.php');
}