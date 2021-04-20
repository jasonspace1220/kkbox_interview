<?php

require_once './vendor/autoload.php';

use lib\QA;
use lib\QAInterface;
use lib\Menu;
use lib\Ingredients;

$menuDatas = [
    "綠茶" => [
        "M" => 15,
        "L" => 20
    ],
    "烏龍" => [
        "M" => 25,
        "L" => 30
    ],
    "奶茶" => [
        "M" => 40,
        "L" => 50,
    ],
    "水果茶" => [
        "M" => 50,
        "L" => 60,
    ],
];

$ingredientsDatas = [
    "椰果" => 5,
    "珍珠" => 5,
    "仙草" => 10,
    "布丁" => 10
];

$menu = new Menu;
$menu->setMenu($menuDatas);

$ingredients = new Ingredients;
$ingredients->setMenu($ingredientsDatas);


// $inputs = start(new QA(),"請輸入訂單(空白或EOF結束輸入): ");
// print_r($inputs);

// function start(QAInterface $qa,$question){
//     return $qa->showQA($question);
// }