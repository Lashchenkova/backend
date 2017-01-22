<?php
function array_to_file($arr)
{
    file_put_contents("array.txt", implode('.', $arr), FILE_APPEND);

}
$arr = array(1, 2, 4, 5);
array_to_file($arr);