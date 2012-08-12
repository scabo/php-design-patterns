<?php

class Pattern_Visitor_Product
{
    public $brand = null;
    public $model = null;
    public $price = 0;

    public function applyVisitor(Pattern_Visitor_Visitor_Interface $visitor)
    {
        $visitor->visitProduct($this);
    }
}
