<?php
$day = date ('D');
$arr = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
foreach($arr as $v){
    print(str_replace($day, '<i>'.$day.'</i>', $v));
    echo '</br>';
}
