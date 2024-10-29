<?php
class Car
{
    public $brand;

    public function __construct($brand)
    {
        $this->brand= $brand;
    }
}

$car1=new Car("Toyota");
$car2=new Car("Toyota");
$car3=$car1;

// var_dump($car1==$car2);
// var_dump($car1===$car2);
var_dump($car1===$car3);