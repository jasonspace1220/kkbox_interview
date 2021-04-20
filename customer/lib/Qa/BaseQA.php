<?php

namespace lib\Qa;

use Exception;
use lib\Qa\QAInterface;
use lib\InputProcessTrait;

abstract class BaseQA implements QAInterface
{
    use InputProcessTrait;

    protected $valid;
    protected $question;

    public function qa($question):string
    {
        return readline($question);
    }

    public function startQa() : array
    {
        $inputs = [];
        $stop = false;

        while ($stop == false) {

            $in = $this->qa($this->question);

            if ($in == "") {
                break;
            }

            array_push($inputs, $in);
        }

        return $inputs;
    }
}
