<?php

class Pattern_Strategy_Purchase
{
    public function pricing()
    {
        $price = new Pattern_Strategy_Price();
        $price->_value = 20;

        //Wholesale consumer
        $price->setDiscountContext(new Pattern_Strategy_Discount_Wholesale());
        $wholesalePrice = $price->getFinalPrice();

        //Normal consumer
        $price->setDiscountContext(new Pattern_Strategy_Discount_Normal());
        $normalPrice = $price->getFinalPrice();
    }
}