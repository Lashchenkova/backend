<?php
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
foreach ($arr as $key => $value){
    echo $key . PHP_EOL;
}
foreach ($arr as $value){
    echo $value . PHP_EOL;
}

