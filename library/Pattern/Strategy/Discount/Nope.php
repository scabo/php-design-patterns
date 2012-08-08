<?php

class Pattern_Strategy_Discount_Nope  implements Pattern_Strategy_Discount_Interface
{

    function calculate($value)
    {
        return $value - number_format((0 * 100) / $value);
    }
}