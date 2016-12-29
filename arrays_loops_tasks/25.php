<?php
$arr = array();
for ($k = 0; $k < 5; $k++):
    $arr[$k] = rand(0, 10);
endfor;
print_r ($arr);
$min = min($arr);
$max = max($arr);
$max_key = array_keys($arr, max($arr))[0];
$min_key = array_keys($arr, min($arr))[0];

$arr[$min_key] = $max;
$arr[$max_key] = $min;

print_r ($arr);
