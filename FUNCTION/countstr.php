<?php
$str = "hom nay toi di hoc";
$len = strlen($str);
$N = "i";
$p;
$count = 0;
for ($i = 0; $i < $len; $i++){
    if ($N === $str[$i]){ 
        $p = $i;     
        $count += 1;
        echo "vi tri cua N la: " .$p ."<br>";      
    }  
    
}
echo "so la xuat hien cua N la: " .$count;

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