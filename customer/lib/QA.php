<?php

namespace lib;

use lib\BaseQA;

class QA extends BaseQA
{
    public function valid(string $input): bool
    {
        if($input != "綠茶"){
            return false;
        }

        return true;
    }
}
