<?php

class Pattern_Visitor_Visitor_Discount implements Pattern_Visitor_Visitor_Interface
{
    public function visitProduct(Pattern_Visitor_Product $product)
    {
        if (0 === $product->price) return;

        $product->price =
            $product->price - number_format( (20 * 100) / $product->price);
    }
}
