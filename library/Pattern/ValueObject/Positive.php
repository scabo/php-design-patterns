<?php

final class Pattern_VolumeObject_Positive 
	extends Pattern_VolumeObject_Abstract 
{
	public function add($value)
	{
		$value = (int)$value + $this->_value;
		return new Pattern_VolumeObject_Positive($value);
	}
	
	public function check($value)
	{
		$value = (int)$value;
		return (0 <= $value) ? 0 : $value;
	}
}