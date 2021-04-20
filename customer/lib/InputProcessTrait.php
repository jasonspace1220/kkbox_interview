<?php

namespace lib;

trait InputProcessTrait
{
    public $MENU_NAME_INDEX = 0;
    public $MENU_SIZE_INDEX = 1;

    public function inputToArray($inputString)
    {
        $result = [
            "name" => null,
            "size" => null,
            "ingredients" => []
        ];

        $inputArray = explode(",", $inputString);

        foreach ($inputArray as $key => $value) {

            if ($key == $this->MENU_NAME_INDEX) {
                $result["name"] = $value;
                continue;
            }

            if ($key == $this->MENU_SIZE_INDEX) {
                $result["size"] = $value;
                continue;
            }

            array_push($result["ingredients"], $value);
        }

        return $result;
    }
}
