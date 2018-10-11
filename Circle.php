<?php
class Circle{
    //variables
public $radius=0;
public $PI=0;

//method to get perimeter
public function getPerimeter(){
    return (2*($this->PI*$this->radius));
}

//method to get area
public function getArea(){
    return($this->PI*($this->radius*$this->radius));
}
}
//creating object
$obj=new Circle;

$obj->radius=3.5;
$obj->PI=3.14;

echo $obj->getPerimeter()."<br>";
echo $obj->getArea();
?>