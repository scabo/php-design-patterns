<?php

abstract class Pattern_VolumeObject_Abstract
{
	protected $_value = null;
	
	public function Pattern_VolumeObject_Size($value)
	{
		$this->_value = $this->check($value);
	}
	
	public function getValue()
	{
		return $this->_value;
	}
	
	public abstract function check($value);
}