<?php

class Area
{
	public function calculate()
	{
		echo 'Area : 2000';
	}
}

class Circle extends Area
{
}

$obj = new Circle();
$obj->calculate();