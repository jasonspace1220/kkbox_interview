<?php

namespace lib;


class Ingredients implements MenuInterface
{
    protected $ingredients = [];

    public function setMenu($ingredients)
    {
        $this->ingredients = $ingredients;
    }

    public function getMenu()
    {
        return $this->ingredients;
    }
}
