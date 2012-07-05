<?php

final class Pattern_ValueObject_WearSize 
	extends Pattern_ValueObject_Abstract 
{
	private $_possibleValues = array('n/a', 'xs', 's', 'm', 'l', 'xl');
	
	private $_defaultIndex = 0;
	
	public function Pattern_ValueObject_WearSize($value)
	{
		parent::Pattern_ValueObject_Abstract($value);
	}
	
	public function check($value)
	{
		$value = strtolower((string)$value);
		
		return 
			(in_array($value, $this->_possibleValues)) 
			? $value 
			: $this->_possibleValues[$this->_defaultIndex];
	}
}