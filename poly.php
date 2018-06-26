<?php

interface Shape{
	public function calculate();
}

class Circle implements Shape{
	
	public function calculate()
	{
		return 'Circle : 200';
	}
}

class Triangle implements Shape{
	
	public function calculate()
	{
		return 'Triangle : 200';
	}
}

function test(Shape $shape)
{
	echo $shape->calculate();
}

test(new Circle());
echo '<br/>';
test(new Triangle());

?>