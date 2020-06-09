<?php
namespace Services;
class ProductManager{
    private $product;


    public function __construct()
    {
        $this->product = [];
    }

    public function add($product){
        $this->product[] = $product;
    }
    public function getProduct(){
        return $this->product;
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