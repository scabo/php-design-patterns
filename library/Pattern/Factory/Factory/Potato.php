<?php

class Pattern_Factory_Factory_Potato implements Pattern_Factory_Factory_Interface
{
    public function makeProduct()
    {
        return new Pattern_Factory_Product_Potato();
    }
}