<?php

class Pattern_Strategy_Price
{
    public $_value = 0;

    /**
     * @var Pattern_Strategy_Discount_Interface
     */
    private $_discount = null;

    public function setDiscountContext(Pattern_Strategy_Discount_Interface $discount)
    {
        $this->_discount = $discount;
    }

    public function getFinalPrice()
    {
        if (null === $this->_discount) return $this->_value;

        return $this->_discount->calculate($this->_value);
    }
}