<?php
abstract class Animal{

    abstract public function makeSound();
}



class Tiger extends Animal{



    public function makeSound()
    {
        return "Tiger roar";
    }
}



class Chicken extends Animal{

    public function makeSound()
    {
        return "Checken chik chik";
    }
}


$animals[0] = new Tiger();
$animals[1] = new Chicken();

foreach($animals as $animal){
    echo $animal->makeSound() ."<br>";
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