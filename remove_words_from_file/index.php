<?PHP header("Content-Type: text/html; charset=utf-8");?>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<?php
/*Есть текстовый файл.
Необходимо удалить из него все слова, длина которых превышает N символов.
Значение N задавать через форму.
Проверить работу на кириллических строках - найти ошибку, найти решение. */
$n = $_GET['number'];
$text = file_get_contents('file.txt');
//cyrillic coding
$text = iconv('CP1251','UTF-8',$text);
//replace multiple spaces to single
$text = preg_replace("| +|", " ", $text);
$arr = explode(" ", $text);
$new_arr = [];
foreach($arr as $key => $value){
    //find all symbols except letters and numbers
//    $result = preg_match_all("/[^a-zA-ZА-Яа-я0-9\s]/", $value);

    if(mb_strlen($value, 'UTF-8') > $n){
        unset($arr[$key]);
    } else {
        array_push($new_arr, $value);
    }
}
$new_text = implode(" ", $new_arr);
$new_text = iconv('UTF-8','CP1251',$new_text);
file_put_contents('file.txt', $new_text);