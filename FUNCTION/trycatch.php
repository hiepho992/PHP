<?php

function calculate($operator1, $num1, $num2)

{
    if ($operator1 === "Subtraction") {
        $result = $num1 - $num2;
        echo "result: " . $result;
    }

    if ($operator1 === "Addition") {
        $result = $num1 + $num2;
        echo "result: " . $result;
    }

    if ($operator1 === "Division") {
        if ($num2 === 0 || ($num1 === 0 && $num2 === 0)) {
            throw new Exception("Second operand not 0");
        } else {
            $result = $num1 / $num2;
            echo "result: " . $result;
        }
        
    }
    if ($operator1 === "Multiplication") {
        if ($num2 === 0 || ($num1 === 0 && $num2 === 0)) {
            throw new Exception("Second operand not 0");
        } else {
            $result = $num1 * $num2;
            echo "result: " . $result;
        }
    }
}


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $number1 = (int) $_POST["number1"];
    $number2 = (int) $_POST["number2"];
    $operator1 = $_POST["Operator"];
}
try {
    calculate($operator1, $number1, $number2);
} catch (Exception $mess) {
    echo "Message: " . $mess->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate</title>
    <style>
        form {
            height: 400px;
            width: 350px;
            border: 1px solid gray;
        }

        input,
        select {
            margin: 10px;
            height: 30px;
        }
    </style>
</head>

<body>
    <form action="trycatch.php" method="post">
        <h2>Simple Calculate</h2>
        <fieldset>
            <legend>Calculate</legend>
            <table>
                <tr>
                    <td><label for="number1">First operand</label></td>
                    <td><input type="number" name="number1" id="number1"></td>
                </tr>
                <tr>
                    <td><label for="Operator">Operator</label></td>
                    <td>
                        <select name="Operator">
                            <option value="Addition"> Addition(+)</option>
                            <option value="Subtraction">Subtraction(-)</option>
                            <option value="Multiplication">Multiplication(*)</option>
                            <option value="Division">Division(/)</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td> <label for="number2">Second operand</label></td>
                    <td> <input type="number" name="number2" id="number2"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Calculate">
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>


</body>

</html>