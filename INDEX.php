<?php
// $num2 = 2.5;
// $num1 = 10;
// $sum = $num1 + $num2;
// echo $sum . "<br/>";

// $name = "Code";
// echo "Hello " . $name . "<br/>";
// echo "Hello  $name  <br/>";
// define('PI', 3.14, true);
// echo pi . "<br/>";
// if(isset($_GET['name'])){
//     $name = $_GET['name'];
//     echo $name;
// }
// print_r($_GET);

if(isset($_REQUEST['name'])){
    $name = $_REQUEST['name'];
    echo $name;
}
print_r($_REQUEST);
// $_REQUEST method $_GET hay $_POST deu lay dc du lieuj

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="INDEX.php" method="get">
        <div>
            <label for="name"></label>
            <input type="text" name="name" id="Name">
        </div>
        <div>
            <label for="email"></label>
            <input type="email" name="email" id="email">
        </div>
        <input type="submit" value="Submit">
    </form>
    <ul>
        <li>
            <a href="INDEX.php?name=A">A</a>
        </li>
    </ul>
    
</body>
</html>