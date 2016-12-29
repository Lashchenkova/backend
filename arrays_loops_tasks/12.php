<?php
$n = 1000;
$num = 0;
while ($n > 50){
    $n = $n / 2;
    $num = $num + 1;
    echo $n . PHP_EOL;
}
echo "Количество итераций - $num";