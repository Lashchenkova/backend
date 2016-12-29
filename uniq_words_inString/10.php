<?PHP header("Content-Type: text/html; charset=utf-8");?>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<?php
/*Написать функцию, которая считает количество уникальных слов в тексте.
Слова разделяются пробелами. Текст должен вводиться с формы.</p>
*/
$a = implode("", $_GET);
function foo($a)
{
    $a = preg_replace("| +|", " ", $a);
    $a = preg_replace("/[^a-zA-ZА-Яа-я\s]/", "", $a);
    $arr = explode(" ", $a);
    $uniq = array();
    $not_uniq = array();
    $result = "";

    while (count($arr) > 0) {
                $b = array_shift($arr);
        if (in_array($b, $arr)) {
            array_push($not_uniq, $b);
        }
        if (!in_array($b, $arr) && !in_array($b, $uniq) && !in_array($b, $not_uniq)) {
            array_push($uniq, $b);
            $result = count($uniq);
        }
    }
    echo $result;
}
foo($a);