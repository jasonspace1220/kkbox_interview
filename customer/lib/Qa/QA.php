<?php

namespace lib\Qa;

use lib\Qa\BaseQA;
use lib\Valid\ValidInterface;
use lib\InputProcessTrait;

class QA extends BaseQA
{
    use InputProcessTrait;

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

            if ($in == "") {
                // $stop = true;
                break;
            }

            $inputArray = $this->inputToArray($in);

            $valid = $this->valid->valid($inputArray);

            if ($valid !== true) {
                echo $valid . PHP_EOL;
                continue;
            }

            array_push($inputs, $inputArray);
        }

        return $inputs;
    }
}
