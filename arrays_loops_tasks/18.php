<?php
$arr = array('sun', 'mon', 'tue', 'wed', 'thu', 'fri', 'sat');
foreach($arr as $v){
    $a = str_replace('sun', '<b>'.'sun'.'</b>', $v);
    print(str_replace('sat', '<b>'.'sat'.'</b>', $a));
    echo '</br>';
}
