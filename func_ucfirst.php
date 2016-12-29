<?PHP header("Content-Type: text/html; charset=utf-8");?>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<?php
/*Написать функцию, которая в качестве аргумента принимает строку,
и форматирует ее таким образом, что каждое новое предложение начиняется с большой буквы
*/
$a = 'а васька слушает да ест. а воз и ныне там. а вы друзья как ни садитесь, все в музыканты не годитесь. а король-то — голый. а ларчик просто открывался.а там хоть трава не расти.';
$a = str_replace(". ", ".", $a);
$arr = explode(".", $a);
array_pop($arr);

mb_internal_encoding("UTF-8");
function mb_ucfirst($text) {
    return mb_strtoupper(mb_substr($text, 0, 1)) . mb_substr($text, 1);
}

$b = array_map(function ($e)
{
    $e = mb_ucfirst($e);
    return $e;
}, $arr);

$a = implode(". ", $b);
echo $a;

