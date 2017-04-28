<form method="get" action="">
    <input type="text" name="q">
    <input type="submit" value="search">
</form>
<?php

if (isset($_GET['q']) && !empty($_GET['q'])) {

    $query = $_GET['q'];

    $path = file_get_contents('https://www.bing.com/images/search?q='.urlencode($query));

    preg_match_all('/https?:\/\/[a-z0-9\-\.\/]+\.(jpe?g)/i', $path, $img);

    $num = array_slice($img[0], 0, 10);

    foreach ($num as $url) {
        echo "<a href='index.php?save={$query}&img={$url}'><img src='{$url}' width='600'></a>";
        echo('<br>');
    }
}

if (isset($_GET['save'])) {
    makeMirrorPic($_GET['img'], 'images/' . $_GET['save'] . '.jpg');
    header("Location: index.php");
}

function makeMirrorPic($fileImg, $newFile)
{
    $source = imagecreatefromjpeg($fileImg);
    $size = getimagesize($fileImg);
    $img = imagecreatetruecolor($size[0], $size[1]);

    for ($x = 0; $x < $size[0]; $x++) {
        for ($y = 0; $y < $size[1]; $y++) {
            $color = imagecolorat($source, $x, $y);
            imagesetpixel($img, ($size[0] - 1) - $x, $y, $color);
        }
    }

    $degrees = 2;
    $img = imagerotate($img, $degrees, 0);

    $cut = ceil($size[0] * sin(deg2rad($degrees)));

    $img_o = imagecreatetruecolor($size[0] - $cut, $size[1] - $cut);
    imagecopy($img_o, $img, 0, 0, $cut, $cut, $size[0] - $cut, $size[1] - $cut);
    imagejpeg($img_o, $newFile);

    imagedestroy($img);
    imagedestroy($img_o);
}
