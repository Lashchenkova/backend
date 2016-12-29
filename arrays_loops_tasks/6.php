<?php
$eng = [];
$ru = [];
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
foreach ($arr as $k => $v) {
    $eng[] = $k;
    $ru[] = $v;
}
print_r ($eng);
print_r ($ru);