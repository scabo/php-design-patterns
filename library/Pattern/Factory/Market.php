<?php

class Pattern_Factory_Market
{
    public function doPurchase()
    {
        $purchase = new Pattern_Factory_Purchase();

        //add potato to basket
        $purchase->setProductFactory(new Pattern_Factory_Factory_Potato());
        $purchase->addProduct();

        //change product factory and so add tomato to basket
        $purchase->setProductFactory(new Pattern_Factory_Factory_Tomato());
        $purchase->addProduct();
    }
}