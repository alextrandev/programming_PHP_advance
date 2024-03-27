<?php
class Fruit {
public $name;
public $color;
public static $taste = "good";
function __construct($name, $color) {
	$this->name = $name; 
	$this->color = $color;
}
	
static function greeting() {
	echo "Hello";
}
}

$apple = new Fruit("Apple", "red");
Fruit::$taste = "Apple";
echo $apple->name;
echo $apple->color;
echo Fruit::$taste;
Fruit::greeting();
