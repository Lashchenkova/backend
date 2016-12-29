<?PHP header("Content-Type: text/html; charset=utf-8");?>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<?php
/*Подсчитайте, сколько раз каждый фрукт встречается в этой строке.
Выведите  в виде списка в порядке уменьшения количества*/
$string = 'яблоко черешня вишня вишня черешня груша яблоко черешня вишня яблоко вишня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня вишня черешня груша яблоко черешня черешня вишня яблоко вишня вишня черешня черешня груша яблоко черешня вишня';
function foo($str)
{
    $arr = explode(" ", $str);
       $b = array_count_values ($arr);
            arsort($b);

    foreach ($b as $k => $v){
        echo "$k = $v" . PHP_EOL;
    }
}
foo($string);