<?php

class Pattern_Visitor_ProductTest extends PHPUnit_Framework_TestCase
{
    public function testDiscount()
    {
        $product = new Pattern_Visitor_Product();
        $product->price = 100;
        $discount = new Pattern_Visitor_Visitor_Discount();
        $product->applyVisitor($discount);

        $this->assertEquals(80, $product->price);
    }
}
