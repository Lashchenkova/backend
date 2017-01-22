<form action="35.php" method="get">
    <label for="login">Login:</label>
    <input type="text" name="login" id="login">
    <br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password">
    <br>
    <input type="submit" value="submit">
</form>
<?php
if(isset($_COOKIE['login']) && isset($_COOKIE['password'])){
    header('Location:/academy_test/secure.php');
}
if(isset($_GET) && !(empty($_GET))){
    if(!(empty($_GET['login'])) && $_GET['password'] == 123456){
        setcookie("login", $_GET['login'], time() + 144000000);
        setcookie("password", $_GET['password'], time() + 144000000);
        header('Location:/academy_test/secure.php');
    }else{header('Location:/academy_test/35.php');}
}
