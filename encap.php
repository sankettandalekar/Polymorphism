<?php

class Shape
{
	private $name;
	
	public function setname($name)
	{
		$this->name = $name;
	}
	
	public function getname()
	{
		echo $this->name;
	}
		
}

$obj = new Shape();
$obj->setname('Sanket');
$obj->getname();
$obj->setname('Abc');
$obj->getname();

