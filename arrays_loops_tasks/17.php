<?php
$month = date ('M');
$arr = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
foreach($arr as $v){
   print(str_replace($month, '<b>'.$month.'</b>', $v));
    echo '</br>';
}
