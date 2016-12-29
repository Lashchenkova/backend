<?PHP header("Content-Type: text/html; charset=utf-8");?>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<?php
/*Написать функцию, которая в качестве аргумента принимает строку,
и форматирует ее таким образом, что предложения идут в обратном порядке.
*/
$str = 'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.';
function foo($str)
{
    $str = str_replace ('. ', '.', $str);
    $arr = explode (".", $str);
    array_pop($arr);
    krsort($arr);
    $result = implode(". ", $arr);
    echo $result;
}
foo($str);