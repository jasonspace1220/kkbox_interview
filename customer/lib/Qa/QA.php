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

            $inputArray = explode(",",$in);
            

            $valid = $this->valid->valid($inputArray);
            
            if($valid !== true){
                echo $valid.PHP_EOL;
                continue;
            }

            
            
            $stop = true;
            
            break;
        }

        return $inputs;
    }
}
