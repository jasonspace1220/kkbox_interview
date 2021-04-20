<?php

namespace lib\Qa;

use lib\Qa\BaseQA;
use lib\Valid\ValidInterface;
use lib\ConvertTrait;

class QA extends BaseQA
{
    use ConvertTrait;

    protected $valid;
    protected $question;

    public function __construct(ValidInterface $valid, $question)
    {
        $this->valid = $valid;
        $this->question = $question;
    }

    public function startQa(): array
    {
        $inputs = [];
        $stop = false;

        while ($stop == false) {

            $in = $this->qa($this->question);

            if ($in == "") {
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
