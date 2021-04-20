<?php

namespace lib;

use lib\MenuInterface;

class Menu implements MenuInterface
{
    protected $menu = [];

    //設定菜單
    public function setMenu($menu)
    {
        $this->menu = $menu;
    }

    //取得菜單
    public function getMenu()
    {
        return $this->menu;
    }
}
