<?php
class Rectangle{
    public $width;
    public $height;


    public function __construct($width, $height){
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea(){
        return $this->width * $this->height;
    }
    
        
    public function getPerimeter(){
        return ($this->width + $this->height) * 2;
    }

    public function display(){
        return "width " .$this->width ." height " .$this->height;
    }
}
$rectangle1 = new Rectangle(10, 20);
echo "Area " .$rectangle1->getArea() ."<br>";
echo "Perimeter " .$rectangle1->getPerimeter() ."<br>";
echo $rectangle1->display();

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