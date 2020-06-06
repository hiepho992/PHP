<?php
    
    function isPrimNumber($num){
        if ($num < 2){
            return false;
        }

        for ($i = 2; $i < $num; $i++ ){
            if ($num % $i === 0){
                return false;
            }             
        }
        return true;
    }
    echo "cac so nguyen to nho hon 100 .<br>";
    for ($num = 0; $num < 100; $num++){
        if (isPrimNumber($num)){
            echo $num ."<br>";
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