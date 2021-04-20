<?php

namespace lib;

use lib\BaseQA;

class QA extends BaseQA
{
    public function __construct()
    {
        
    }

    public function valid(string $input): bool
    {
        if ($input != "綠茶") {
            return false;
        }

        return true;
    }

    public function showQA($question)
    {
        $inputs = [];
        $stop = false;

        while ($stop == false) {
            $in = $this->qa($question);

            if(!$this->valid($in)){
                throw new \Exception("輸入錯誤的資料或格式");
            }

            if ($in != "") {
                array_push($inputs, $in);
                continue;
            }
            $stop = true;
            break;
        }

        return $inputs;
    }
}
