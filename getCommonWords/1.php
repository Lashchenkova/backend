<?PHP header("Content-Type: text/html; charset=utf-8");?>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<?php
/*Создать форму с двумя элементами textarea.
При отправке формы скрипт должен выдавать только те слова,
которые есть и в первом и во втором поле ввода.
Реализацию это логики необходимо поместить в функцию getCommonWords($a, $b),
которая будет возвращать массив с общими словами.*/
$a = $_GET['txtArea1'];
$b = $_GET['txtArea2'];
$a = preg_replace("| +|", " ", $a);
$a = preg_replace("/[^a-zA-ZА-Яа-я\s]/", "", $a);
$a = str_replace( "\n", " ", $a);
$b = preg_replace("| +|", " ", $b);
$b = preg_replace("/[^a-zA-ZА-Яа-я\s]/", "", $b);
$b = str_replace( "\n", " ", $b);
$a_old = explode(" ", $a);
$b_old = explode(" ", $b);
$arr_a = array_diff($a_old, array('', NULL, false));
$arr_b = array_diff($b_old, array('', NULL, false));

function getCommonWords($a, $b)
{
    $result = array();
while(count($a) > 0){
    $e = array_shift($a);
    if (in_array($e, $b)){
        array_push($result, $e);
    }
}
print_r ($result);
}
getCommonWords($arr_a, $arr_b);