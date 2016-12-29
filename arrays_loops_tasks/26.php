<?php
$arr = array();
$new_arr = array();
for ($k = 1; $k < 6; $k++){
    $arr[$k] = rand(1, 100);
}
print_r ($arr);
foreach ($arr as $key => $value) {
    if ($key % 2 == 0)
        $new_arr[] = $value;
    if ($key % 2 == 1)
        echo 'Элемент с непарным индексом: ' . $value . PHP_EOL;
}
    echo 'Произведение элементов с парным индексом: ' . array_product($new_arr) . PHP_EOL;
