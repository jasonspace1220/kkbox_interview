<?php

namespace lib\Qa;

use lib\Qa\BaseQA;
use lib\Valid\ValidInterface;

class QA extends BaseQA
{
    protected $valid;

    public function __construct(ValidInterface $valid)
    {
        $this->valid = $valid;
    }

    public function showQA($question)
    {
        $inputs = [];
        $stop = false;

        while ($stop == false) {

            $in = $this->qa($question);

            if($in == ""){
                // $stop = true;
                break;
            }

            $valid = $this->valid->valid($in);
            
            if($valid !== true){
                echo $valid.PHP_EOL;
                continue;
            }

            array_push($inputs,$in);
        }

        return $inputs;
    }
}
