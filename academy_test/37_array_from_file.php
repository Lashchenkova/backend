<?php
function array_from_file($filename){
    $str = file_get_contents($filename);
    $arr = explode('.', $str);
    print_r($arr);
}
array_from_file('array.txt');