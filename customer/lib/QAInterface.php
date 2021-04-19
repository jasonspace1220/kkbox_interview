<?php
namespace lib;

interface QAInterface{

    //給使用者問題並讓使用者回答
    public function qa(string $question);

    //驗證QA輸入的格式
    public function valid(string $input) : bool;
}