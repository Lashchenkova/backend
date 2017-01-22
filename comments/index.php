<?PHP header("Content-Type: text/html; charset=utf-8");?>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<?php
/*Создать гостевую книгу, где любой человек может оставить комментарий
в текстовом поле и добавить его.
Все добавленные комментарии выводятся над текстовым полем.
Реализовать проверку на наличие в тексте запрещенных слов, матов.
При наличии таких слов - выводить сообщение "Некорректный комментарий".
Реализовать удаление из комментария всех тегов, кроме тега &lt;b&gt;.
*/
$text = file_get_contents("comments.txt");
echo nl2br($text);
//echo strip_tags($text, '<hr>');
//$h = fopen("comments.txt", 'r');
//while($line = fgets($h)):
//    $line = iconv('CP1251','UTF-8',$line);
//list($name, $comment) = explode("@##@", $line);
//echo $name . ":";
//echo '<br>';
//echo $comment;
//echo '<br>';
//?>
<!--<hr>-->
<?php //endwhile;
//    fclose($h);
        ?>

<form action="index.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br>
    <label for="comment"></label>
    <textarea name="comment" id="comment"></textarea><br>
    <input type="submit" value="Send">
</form>

<?php
if(empty($_POST['name']) || empty($_POST['comment']))
{return false;}
//$comment = array_map('htmlentities', $_POST);
//removing all tags

//removing empty strings
$_POST['comment']=preg_replace("/\s+\r\n/", "",$_POST['comment']);
$comment = array_map('htmlentities', $_POST);
$comment['comment'] = strip_tags($comment['comment'], 'b');
file_put_contents("comments.txt", implode(": \n", $comment) . "\n" . "<hr>", FILE_APPEND);
header("Location: /backend/comments");
?>