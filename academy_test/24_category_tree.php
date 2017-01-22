<?php
$shop_categories = array(
    array(
        'title' => 'computers',
        'children' => array(
            array(
                'title' => 'laptops',
            ),
            array(
                'title' => 'monoblocks',
            ),
            array(
                'title' => 'System units',
                'children' => array(
                    array(
                        'title' => 'Tower',
                    ),
                    array(
                        'title' => 'MiniTower',
                    )
                ),
            ),
        ),
    ),
    array(
        'title' => 'Appliances',
        'children' => array(
            array(
                'title' => 'cleaner',
            ),
            array(
                'title' => 'fridge',
            ),
        ),
    ),
);
function categor($arr, $ele="")
{
    foreach($arr as $value){
        if(is_array($value)){
            foreach($value as $item){
                if(is_array($item)){
                   categor($item, $ele."--");
                } else {
                    echo $ele. $item . PHP_EOL;
                }
            }
        }else{
            echo $value. PHP_EOL;
        }
    }

}
categor($shop_categories);