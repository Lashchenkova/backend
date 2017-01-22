<?php
setcookie("login", $_GET['login'], time() - 144000000);
setcookie("password", $_GET['password'], time() - 144000000);
header('Location: /academy_test/35.php');