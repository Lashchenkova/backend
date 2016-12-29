<?php
$arr = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$a = '';
foreach($arr as $v) {
        if ($v % 3 == 0) {
        $a .= $v . PHP_EOL;
    }
        else {
            $a .= $v;
        }
}
echo $a;