<?php

class Pattern_Strategy_Discount_Wholesale implements Pattern_Strategy_Discount_Interface
{

    function calculate($value)
    {
        return $value - number_format((50 * 100) / $value);
    }
}