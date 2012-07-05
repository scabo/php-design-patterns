<?php

abstract class Pattern_ValueObject_Abstract
{
	protected $_value = null;
	
	public function Pattern_ValueObject_Abstract($value)
	{
		$this->_value = $this->check($value);
	}
	
	public function getValue()
	{
		return $this->_value;
	}
	
	public abstract function check($value);
}