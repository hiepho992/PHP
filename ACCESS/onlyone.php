<?php
class Application{
    private static $name;
    

    private function __construct(){
        
    }

    public static function getInstant(){
        if (self::$name === null){
            self::$name = new Application();
            echo "123";
        }

        return self::$name;
    }            
       
    
}
$app1 = Application::getInstant();
$app2 = Application::getInstant();
$app3 = new Application();



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