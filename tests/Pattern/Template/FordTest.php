<?php

class Pattern_Template_FordTest extends PHPUnit_Framework_TestCase
{
    public function testMakeSpecification()
    {
        $ford = new Pattern_Template_Ford();
        $expect = 'Color: red Weight: 1500';
        
        $this->assertEquals($expect, $ford->makeSpecification());
    }
}
