<?php
function dirlist($dir, $word)
{
    $handle = opendir($dir);
    while($entry = readdir($handle)){
    if(stristr($entry, $word)){
    echo $entry . PHP_EOL;
}}
closedir($handle);
}
dirlist("/", ".");