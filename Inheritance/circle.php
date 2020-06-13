<?php
class Circle
{
    public $radius;
    public $color;

    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }
    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
    public function calculatePerimeter()
    {
        return 2 * pi() * $this->radius;
    }

    public function __toString()
    {
        return "The circle has radius " .$this->radius ." color: " .$this->color;
    }
}
class Cylinder extends Circle{
    public $height;

    public function __construct($radius, $color, $height){
        parent::__construct($radius, $color);
        $this->height = $height;
    }
    public function calculateVolum(){
        return parent::calculateArea() * $this->height;
    }
    public function __toString()
    {
        return "The cylinder has radius " .$this->radius ." color: " .$this->color ." height " .$this->height;
    }
}
$circle1 = new Circle(4, "blue");
echo "Circle Area: " .$circle1->calculateArea() ."<br>";
echo "Circle Perimeter: " .$circle1->calculatePerimeter() ."<br>";
echo $circle1->__toString() ."<br>";
$cylinder1 = new Cylinder(4, "blue", 5);
echo " Cylinder Volum: " .$cylinder1->calculateVolum() ."<br>";
echo $cylinder1->__toString();

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>