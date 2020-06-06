<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $number1 = (int) $_POST["number"];

    function isPrimNumber($num)
    {
        if ($num < 2) {
            return false;
        }

        for ($i = 2; $i < $num; $i++) {
            if ($num % $i === 0) {
                return false;
            }
        }
        return true;
    }
    function listPrime($number1)
    {
        $N = 2;
        $count = 0;
        while ($count < $number1) {
            if (isPrimNumber($N)) {
                echo "N First Prime: " .$N ."<br>";
                $count++;
            }

            $N++;
        }
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
    <form action="firstprime.php" method="post">
        <label for="number">Number Of Prime (N)</label>
        <input type="number" name="number" id="">
        <input type="submit" value="Submit"><br>
        <p><?=  listPrime($number1); ?></p>
    </form>
</body>

</html>