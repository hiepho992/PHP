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
        self::SLOW;
        self::MEDIUM;
        self::FAST;
        $this->speed = self::SLOW;
        $this->on = false;
        $this->radius = 5;
        $this->color = "blue";
    }

    public function setSpeed($speed)
    {
        if ($speed === 2) {
            $speed = self::MEDIUM;
        } elseif ($speed === 3) {
            $speed = self::FAST;
        } else {
            $speed = self::SLOW;
        }
    }


    public function setOn($on)
    {
        return $this->on = $on;
    }
    public function setRadius($radius)
    {
        if (!is_int($radius) && (int) $radius < 0) {
            echo "radius phai so nguyen lon hon 0";
        } else {
            return $this->radius = $radius;
        }
    }
    public function setColor($color)
    {
        return $this->color = $color;
    }

    public function getSpeed()
    {
        return $this->speed;
    }
    public function geton()
    {
        return $this->on;
    }
    public function getRadius()
    {
        return $this->radius;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function toString()
    {
        if ($this->getOn() === true) {
            return "fan is on" . $this->color . $this->radius . $this->speed;
        } else {
            return "fan is off" . $this->color . $this->radius . $this->speed;
        }
    }
}
$fan1 = new Fan();
$fan1->setSpeed(2);
echo $fan1->getSpeed();



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