<?php

class Pattern_Strategy_Discount_Wholesale implements Pattern_Strategy_Discount_Interface
{

    /**
     * The dicsount is 30 percent
     *
     * @return numeric
     */
    function calculate($value)
    {
        return $value - number_format((30 * 100) / $value);
    }
}
