<?php
namespace lib\Qa;

interface QAInterface{

    //給使用者問題並讓使用者回答
    public function qa(string $question);

}