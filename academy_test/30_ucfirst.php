<?php
$a = "fasfsdafd, dfdfsdag, dgdsgs";
function first($a){
    $new_arr = array();
    $arr = explode(", ", $a);
    foreach($arr as $value){
        $b = ucfirst($value);
        array_push($new_arr, "$b");
    }
    $new_string = implode($new_arr, ", ");
    echo $new_string;
}
first($a);