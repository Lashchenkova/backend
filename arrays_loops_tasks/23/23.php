<?php
foreach($_GET as $v) {
    $split = preg_split('//', $v, -1, PREG_SPLIT_NO_EMPTY);
    echo array_sum($split);
}