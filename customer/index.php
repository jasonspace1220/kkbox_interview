<?php

require 'vendor/autoload.php';

use lib\QA;
use lib\QAInterface;

$inputs = start(new QA(),"請輸入訂單(空白或EOF結束輸入): ");
print_r($inputs);

function start(QAInterface $qa,$question){
    return $qa->showQA($question);
}