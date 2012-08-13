<?php

class Pattern_Template_ToyotaTest extends PHPUnit_Framework_TestCase
{
    public function testMakeSpecification()
    {
        $toyota = new Pattern_Template_Toyota();
        $expect = 'Color: blue Weight: 1200';
        
        $this->assertEquals($expect, $toyota->makeSpecification());
    }
}
