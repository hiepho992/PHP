<?php
date_default_timezone_set("Asia/Bangkok");
class StopWatch{
    private $startTime;
    private $endTime;

    function __construct(){
        $this->startTime = date("h:i:s");        
    }

    function getStart(){
        return $this->startTime;
    }
    function getEnd(){
        return $this->endTime;
    }
    function start(){
        $this->startTime = date("h:i:s");
    }
    function stop(){
        $this->endTime = date("h:i:s");
    }
    function getElapsedTime(){
        return microtime($this->stop() - $this->start());
    }
   
}
$stopwatch = new StopWatch();

echo $stopwatch->start() ."<br>";
echo $stopwatch->getStart() ."<br>";

echo $stopwatch->stop() ."<br>";
echo $stopwatch->getEnd() ."<br>";
echo $stopwatch->getElapsedTime();




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