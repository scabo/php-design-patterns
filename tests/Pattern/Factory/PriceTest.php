<?php

class Pattern_Strategy_PriceTest extends PHPUnit_Framework_TestCase
{
    private $_price = null;

    public function setUp()
    {
        $this->_price = new Pattern_Strategy_Price();
        $this->_price->_value = 100;
    }

    public function testWholesase()
    {
        $this->_price->setDiscountContext(new Pattern_Strategy_Discount_Wholesale());
        $this->assertEquals($this->_price->getFinalPrice(), 70);
    }

    public function testNormal()
    {
        $this->_price->setDiscountContext(new Pattern_Strategy_Discount_Normal());
        $this->assertEquals($this->_price->getFinalPrice(), 80);

    }

    public function testNope()
    {
        $this->_price->setDiscountContext(new Pattern_Strategy_Discount_Nope());
        $this->assertEquals($this->_price->getFinalPrice(), 100);
    }
}
