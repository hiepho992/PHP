<?php
session_start();
function findMax($arr){
    $len = count($arr);
    for ($i = 0; $i < $len; $i++){
        $max = $arr[0];
        $index = 0;
        if ($arr[$i] > $max){
            $max = $arr[$i];
            $index = $i;
        }
    }
    return "Max " .$max ." index " .$i;
}
if (isset($_SESSION["array"])){
    $array = $_SESSION["array"];
}else{
    $array = [];
}
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $number = (int) $_POST["number"];  
    if ($_POST["submit"] === "value"){
        array_push($array, $number);
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
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        Gia tri: <input type="number" name="number" id="">
        <input type="submit" value="value" name="submit">
        <input type="submit" value="max" name="submit">
    </form>
</body>
</html>