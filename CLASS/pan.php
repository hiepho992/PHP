<?php
class Fan
{
    const SLOW = 1;
    const MEDIUM = 2;
    const FAST = 3;
    private $speed;
    private $on;
    private $radius;
    private $color;

    public function __construct()
    {
        $this->speed = self::SLOW;
        $this->on = false;
        $this->radius = 5;
        $this->color = "blue";
    }

    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }
    public function getSpeed()
    {
        return $this->speed;
    }

    public function setOn($on)
    {
        return $this->on = $on;
    }
    public function geton()
    {
        return $this->on;
    }

    public function setRadius($radius)
    {
        if (!is_int($radius) && (int) $radius < 0) {
            echo "radius phai so nguyen lon hon 0";
        } else {
            return $this->radius = $radius;
        }
    }
    public function getRadius()
    {
        return $this->radius;
    }

    public function setColor($color)
    {
        return $this->color = $color;
    }  
    public function getColor()
    {
        return $this->color;
    }
    public function toString()
    {
        if ($this->getOn() === true) {
            return "fan is on: " ." color: " .$this->getColor() ." Radius " . $this->getRadius() ." Speed: " . $this->getSpeed();
        } else {
            return "fan is off" . $this->color . $this->radius . $this->speed;
        }
    }
}
$fan1 = new Fan();
$fan1->setSpeed($fan1::FAST);
$fan1->setRadius(10);
$fan1->setColor("yellow");
$fan1->setOn(true);
echo $fan1->toString();



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