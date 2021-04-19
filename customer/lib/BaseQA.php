<?php

namespace lib;

use Exception;
use lib\QAInterface;

abstract class BaseQA implements QAInterface
{
    public function qa($question)
    {
        return readline($question);
    }

    public function showQA($question)
    {
        $inputs = [];
        $stop = false;

        while ($stop == false) {
            $in = $this->qa($question);

            if(!$this->valid($in)){
                throw new Exception("輸入錯誤的資料或格式");
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
