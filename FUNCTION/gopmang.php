<?php
$array1 = array();
$array2 = array();
for ($i = 0; $i < 5; $i++) {
    array_push($array1, $i);
}
print_r($array1);
echo "<br>";

for ($j = 5; $j < 10; $j++) {
    array_push($array2, $j);
}
print_r($array2);
echo "<br>";


$array3 = array();
$len1 = count($array1);
for($k = 0; $k < $len1; $k++){
    array_push($array3, $array1[$k]);
}

$len2 = count($array2);
for($t = 0; $t < $len2; $t++){
    array_push($array3, $array2[$t]);
}
print_r($array3);



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