<?PHP header("Content-Type: text/html; charset=utf-8");?>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<?php
/*Создать форму с элементом textarea.
При отправке формы скрипт должен выдавать ТОП3 длинных слов в тексте.
Реализовать с помощью функции.</p>
*/
$a = $_GET['txtArea'];
$a = preg_replace("| +|", " ", $a);
$a = preg_replace("/[^a-zA-ZА-Яа-я\s]/", "", $a);
$a = str_replace( "\n", " ", $a);
$a_old = explode(" ", $a);
$arr_a = array_diff($a_old, array('', NULL, false));

function foo($a)
{
    $result = array();
    foreach ($a as $v){
        $b = strlen($v);
        $result[$b] = $v;
        krsort($result);
        $result = array_slice($result, 0, 3, true);
}
    print_r($result);
}
foo($arr_a);