<?php
/*Написать функцию, которая выводит список файлов в заданной директории.
Директория задается как параметр функции.
 */
function listDir($dir, $word)
{
    $handle = opendir($dir);
    while ($line = readdir($handle)){
        if(stristr($line, $word)) {
            echo $line . PHP_EOL;
        }
    }
    closedir($handle);
}
listDir('/', 'config');
