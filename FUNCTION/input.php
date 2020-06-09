<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $index = (int) $_POST["index"];
}
function findValue($N)
{
    $arr = array();
    for ($i = 0; $i < 100; $i++) {
        $num = rand(0, 1000);
        array_push($arr, $num);
        if ($N > 100 || $N < 0){
            throw new Exception($N ." khong nho hon 0 va khong lon hon 100");
        }elseif ($N === $i) {
            echo "Value: " . $arr[$i] ."<br>";
        }      
        
    }
    
    print_r($arr);
}
try{
    findValue($index);
}catch(Exception $mess){
    echo "Message " .$mess->getMessage();
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
    <form action="input.php" method="post">
        Index: <input type="number" name="index" id="">
        <input type="submit" value="Submit">
    </form>
</body>

</html>