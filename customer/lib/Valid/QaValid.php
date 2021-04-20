<?php

namespace lib\Valid;

class QaValid implements ValidInterface
{
    const MIN_LENGTH = 2;
    const MENU_NAME_INDEX = 0;
    const MENU_SIZE_INDEX = 1;

    protected $menuNameSizeList;
    protected $ingredientsNameList;

    public function __construct($menuNameSizeList,  $ingredientsNameList)
    {
        $this->menuNameSizeList = $menuNameSizeList;
        $this->ingredientsNameList = $ingredientsNameList;
    }

    public function valid($inputArray)
    {
        if (!$this->format($inputArray)) {
            return "訂單格式錯誤";
        }

        if (!$this->checkMenuItem($inputArray)) {
            return "訂單品項不存在";
        }

        if(!$this->checkIngredients($inputArray)){
            return "訂單配料不存在";
        }

        return true;
    }

    protected function format($inputArray)
    {
        if (count($inputArray) < self::MIN_LENGTH) {
            return false;
        }

        return true;
    }

    protected function checkMenuItem($inputArray)
    {
        $item = $inputArray[self::MENU_NAME_INDEX].$inputArray[self::MENU_SIZE_INDEX];
    
        if (!in_array($item, $this->menuNameSizeList)) {
            return false;
        }

        return true;
    }

    protected function checkIngredients($inputArray)
    {
        foreach ($inputArray as $k => $v) {
            
            if($k == self::MENU_NAME_INDEX || $k == self::MENU_SIZE_INDEX){
                continue;
            }

            $item = str_replace("+","",$v);

            if (!in_array($item, $this->ingredientsNameList)) {
                return false;
            }
        }

        return true;
    }
}
