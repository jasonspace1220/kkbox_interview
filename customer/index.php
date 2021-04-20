<?php

require_once './vendor/autoload.php';

use lib\Qa\QA;
use lib\Qa\QAInterface;
use lib\Menu\Menu;
use lib\Menu\Ingredients;
use lib\Menu\MenuInterface;
use lib\Valid\QaValid;

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
$ingredients = new Ingredients;

setMenu($menu, $menuDatas);
setMenu($ingredients, $ingredientsDatas);

$qaValid = new QaValid($menu->getNameSizeList(), $ingredients->getNameList());

$qa = new QA($qaValid, "請輸入訂單 : ");
$orders = $qa->startQa();

print_r($orders);

//========

function setMenu(MenuInterface $menu, $menuDatas)
{
    foreach ($menuDatas as $v) {
        $menu->addItem($v);
    }
}

// function start(QAInterface $qa, $question)
// {
//     return $qa->showQA($question);
// }
