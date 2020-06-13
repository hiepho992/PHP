<?php
class Shape
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }


    public function show()
    {
        return "The shape name" . $this->name;
    }
}

class Circle extends Shape
{
    public $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }
    public function calculateArea()
    {
        return pi() * pow($this->radius, 2);
    }
    public function calculatePerimeter(){
        return 2 * pi() * $this->radius;
    }
}
class Cylinder extends Circle{
    public $height;

    public function __construct($name, $radius, $height){
        parent::__construct($name, $radius);
        $this->height = $height;
    }

    public function calculateArea(){
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }
    public function calculateVolume(){
        return parent::calculatePerimeter() * $this->height;
    }
}
$curcle1 = new Circle("circle", 4);
echo "Name: " .$curcle1->name ."<br>";
echo "Perimeter " .$curcle1->calculatePerimeter() ."<br>";
echo "Area: " .$curcle1->calculateArea() ."<br>";
$cylinder1 = new Cylinder("culinder", 3, 5);
echo "Name: " .$cylinder1->name ."<br>";
echo "Area: " .$cylinder1->calculateArea() ."<br>";
echo "Volume: " .$cylinder1->calculateVolume();
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