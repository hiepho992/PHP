<?php
class Point2d
{
    public $x;
    public $y;
    public $xy;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
        $this->xy = [];
    }
    public function setX(float $x)
    {
        if ($x < 0) {
            echo "X ko dc nho hon 0";
        } else {
            $this->x = $x;
        }
    }
    public function getX()
    {
        return $this->x;
    }
    public function setY(float $y)
    {
        if ($y < 0) {
            echo "X ko dc nho hon 0";
        } else {
            $this->y = $y;
        }
    }
    public function getY()
    {
        return $this->y;
    }
    public function setXY(float $x, float $y)
    {
        $this->xy[] = $x;
        $this->xy[] = $y;
    }
    public function getXY()
    {
        return $this->xy;
    }

    public function __toString()
    {
        return "X" . $this->x . "Y" . $this->y;
    }
}
$point = new Point2d(2, 3);

$point->setXY(2,3);
print_r($point->getXY());



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