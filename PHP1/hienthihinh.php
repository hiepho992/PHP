<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $select1 = $_POST["print"];
        if ($select1 === "Print the rectangle") {
            for ($i = 1; $i <= 4; $i++) {
                for ($j = 1; $j <= 10; $j++) {
                    echo "*";
                }
                echo "<br>";
            }
            
        }
        if ($select1 === "Print the square triangle"){
            for ($i = 1; $i <= 7; $i++){
                for ($j = 1; $j <= $i; $j++){
                    echo "*";
                }
                echo "<br>";
            }
        }
        if ($select1 === "Print isosceles triangle"){
            for ($k = 1; $k <= 7; $k++){
                for ($i = $k; $i < 7; $i++){
                   echo "&nbsp";                   
                }
                for ($j = 1; $j <= $k; $j++){
                    echo "*";
                }
                echo "<br>";
            }
           
        }
    }

    ?>
    <form action="hienthihinh.php" method="post">
        <label for="print">Select your choose</label>
        <select name="print">
            <option value="Print the rectangle">Print the rectangle</option>
            <option value="Print the square triangle">Print the square triangle</option>
            <option value="Print isosceles triangle">Print isosceles triangle</option>
        </select>
        <input type="submit" value="Exit">
    </form>
</body>

</html>