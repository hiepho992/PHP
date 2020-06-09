<?php
namespace Model;
class Product{
    private $name;
    private $price;

    public function __construct($name = null, $price = 0)
    {
        $this->name = $name;
        $this->price = $price;
    }
    public function setName($name){
        return $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }

    public function setPrice($price){
        return $this->price = $price;
    }
    public function getPrice(){
        return $this->price;
    }
}


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