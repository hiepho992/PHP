<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future Value Calculator</title>
    <style>
        form {
            height: 400px;
            width: 350px;
            border: 1px solid gray;
        }

        input {
            width: 90%;
            height: 30px;
        }

        h2,
        input,
        label {
            margin: 10px 5px;
        }

        [type="submit"] {
            width: 150px;
            margin: 0px 90px;
        }
    </style>
</head>

<body>
    <form action="futureValue.php" method="post">
        <h2>Future Value Calculator</h2>
        <label for="amount">Inventment Amount:</label>
        <input type="number" name="amount" id="amount">
        <label for="rate">Yearly Interest Rate:</label>
        <input type="text" name="rate" id="rate">
        <label for="year">Number of Years:</label>
        <input type="number" name="year" id="year">
        <input type="submit" value="Calculate">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $money = $_POST["amount"];
        $rate = $_POST["rate"];
        $years = $_POST["year"];
        for ($i = 1; $i <= $years; $i++) {
            $money = $money + $money * $rate;
        }
        echo $money;
    }
    ?>
</body>

</html>