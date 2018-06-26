<?php
abstract class Shape
{
	public $value;
	abstract public function calculate();
	abstract public function getData();
}

class Circle extends Shape
{
	public function calculate()
	{
		echo 'Circle : 200';
	}
	
	public function getData()
	{
		echo 'Get Data : 10000';
	}
	
		
}

$obj = new Circle();
$obj->calculate();
$obj->getData();