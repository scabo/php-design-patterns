<?php

class Pattern_Strategy_Discount_Normal  implements Pattern_Strategy_Discount_Interface
{

    /**
     * The discount is 20 percent
     *
     * @return numeric
     */
    function calculate($value)
    {
        return $value - number_format((20 * 100) / $value);
    }
}
