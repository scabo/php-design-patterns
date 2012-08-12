<?php

interface Pattern_Strategy_Discount_Interface
{
    /**
     * Calculate discount
     *
     * @return numeric
     */
    function calculate($value);
}
