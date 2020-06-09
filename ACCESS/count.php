<?php
class Application{
    private $name;
    public static $count = 0;
    function __construct($name){
        $this->name = $name;
        self::$count ++;
    }
    public function __toString()
    {
        return "Application " .$this->name;
    }
}
echo "So doi tuong duoc tao " .Application::$count ."<br>";
$app1 = new Application("H");
echo "So doi tuong duoc tao " .Application::$count ."<br>";
echo $app1;

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