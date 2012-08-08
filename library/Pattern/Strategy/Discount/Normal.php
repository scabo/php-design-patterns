<?php

class Pattern_Strategy_Discount_Normal  implements Pattern_Strategy_Discount_Interface
{

    function calculate($value)
    {
        return $value - number_format((10 * 100) / $value);
    }
}