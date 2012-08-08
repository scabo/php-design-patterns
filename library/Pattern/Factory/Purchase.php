<?php

class Pattern_Factory_Purchase
{

    /**
     * @var Pattern_Factory_Product_Interface[]
     */
    private $_basket = array();

    /**
     * @var Pattern_Factory_Factory_Interface|null
     */
    private $_factory = null;

    public function setProductFactory(Pattern_Factory_Factory_Interface $factory)
    {
        $this->_factory = $factory;
    }

    public function addProduct()
    {
        if (null !== $this->_factory) {
            $this->_basket[] = $this->_factory->makeProduct();
        }
    }

    public function getBasket(){
        return $this->_basket;
    }
}