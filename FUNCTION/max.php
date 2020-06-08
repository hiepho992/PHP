<?php
function findMax($array)
{
    $max = $array[0][0];
    $index = [0][0];
    $row = count($array);
   
    for ($i = 0; $i < $row; $i++) {
        $col = count($array[$i]);
        for ($j = 0; $j < $col; $j++) {
            if ($array[$i][$j] > $max) {
                $max = $array[$i][$j];
                $index = $i. " ; " .$j;
            }
        }
    }
    echo "Max is " .$max ." index " .$index;
}
$array1 = array(
    array(1, 2, 3),
    array(4, 10, 6),
    array(7, 8, 9)
);
findMax($array1);
    

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