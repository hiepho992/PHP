

<?php
session_start();
function findMin($arr)
{
    if (count($arr) === 0){
        echo "Mang chua co gia tri";
    }
   
  
    $len = count($arr);
    for ($i = 1; $i < $len; $i++) {   
        $min = $arr[0]; 
        $index = 0;    
        if ($arr[$i] < $min) {
            $min = $arr[$i];
            $index = $i;
            
        }
    }
    return "Min: " .$min ." index " .$index;
    
}
if(isset($_SESSION['munber'])){
    $array = $_SESSION["munber"];
}else{
    $array = [];
}



if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $index1 = (int) $_POST["index"];
    if ($_POST["submit"] === "add"){
        array_push($array, $index1);
        $_SESSION["munber"] = $array;
    }
    if ($_POST["submit"] === "Min"){
        print_r($array);
        echo findMin($array);
        unset($_SESSION["munber"]);
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
    <form action="min.php" method="post">
        Giá trị: <input type="number" name="index" id="">
        <input type="submit" value="add" name="submit" >
        <input type="submit" value="Min" name="submit">
    </form>
</body>

</html>