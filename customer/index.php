<?php

require_once './vendor/autoload.php';

use lib\QA;
use lib\QAInterface;
use lib\Menu\Menu;
use lib\Menu\Ingredients;
use lib\Menu\MenuInterface;

$menuDatas = [
    [
        "name" => "綠茶",
        "size" => "M",
        "price" => 15
    ],
    [
        "name" => "綠茶",
        "size" => "L",
        "price" => 20
    ],
    [
        "name" => "烏龍",
        "size" => "M",
        "price" => 25
    ],
    [
        "name" => "烏龍",
        "size" => "L",
        "price" => 30
    ],
    [
        "name" => "奶茶",
        "size" => "M",
        "price" => 40
    ],
    [
        "name" => "奶茶",
        "size" => "L",
        "price" => 50
    ],
    [
        "name" => "水果茶",
        "size" => "M",
        "price" => 50
    ],
    [
        "name" => "水果茶",
        "size" => "L",
        "price" => 60
    ],
];

$ingredientsDatas = [
    [
        "name" => "椰果",
        "price" => 5
    ],
    [
        "name" => "珍珠",
        "price" => 5
    ],
    [
        "name" => "仙草",
        "price" => 10
    ],
    [
        "name" => "布丁",
        "price" => 10
    ],
];

$menu = new Menu;
setMenu($menu, $menuDatas);

$ingredients = new Ingredients;
setMenu($ingredients, $ingredientsDatas);


//========

function setMenu(MenuInterface $menu, $menuDatas)
{
    foreach ($menuDatas as $v) {
        $menu->addItem($v);
    }
}



// $ingredients = new Ingredients;


// $inputs = start(new QA(),"請輸入訂單(空白或EOF結束輸入): ");
// print_r($inputs);

// function start(QAInterface $qa,$question){
//     return $qa->showQA($question);
// }