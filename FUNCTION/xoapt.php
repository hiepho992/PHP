<?php
$array = array(1, 2, 4, 5, 9);
$len = count($array);
$N = 2;
for ($i = 0; $i < $len; $i++){
    if ($N === $array[$i]){
        array_splice($array, $i, $i);
        array_splice($array,$len-1,0,0);
        print_r($array);
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