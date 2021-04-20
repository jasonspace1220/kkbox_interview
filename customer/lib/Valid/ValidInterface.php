<?php 
namespace lib\Valid;

interface ValidInterface {
    
    /**
     * valid 驗證
     *
     * @param  mixed $input
     * @return mixed string|true
     */
    public function valid($input) : mixed;
    
}