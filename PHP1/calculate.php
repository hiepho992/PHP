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
        input, select{
            margin: 10px;
            height: 30px;
        }
    </style>
</head>

<body>
    <form action="calculate.php" method="post">
        <h2>Simple Calculate</h2>
        <fieldset>
            <legend>Calculate</legend>
            <table>
            <label for="number1">First operand</label>
            <input type="number" name="number1" id="number1">
            <label for="Operator">Operator</label>
            <select name="Operator">
                <option value="Addition"> Addition(+)</option>
                <option value="Subtraction">Subtraction(-)</option>
                <option value="Multiplication">Multiplication(*)</option>
                <option value="Division">Division(/)</option>
            </select>
            <label for="number2">Second operand</label>
            <input type="number" name="number2" id="number2">
            <input type="submit" value="Calculate">
            </table>

        </fieldset>
    </form>
    <?php
   
        
        if ($_SERVER["REQUEST_METHOD"] === "POST") {      
            $number1 = $_POST["number1"];
            $number2 = $_POST["number2"];
            $operator1 = $_POST["Operator"];
            if ($operator1 === "Addition") {
                $result = $number1 + $number2;
                echo "result: " .$result;
            }
            if ($operator1 === "Subtraction") {
                $result = $number1 - $number2;
                echo "result: " .$result;
            }
            if ($operator1 === "Multiplication") {
                $result = $number1 * $number2;
                echo "result: " .$result;   
            }
            if ($operator1 === "Division") {
                $result = $number1 / $number2;
                echo "result: " .$result;
            }

        } 
    
    
       
    
    ?>

</body>

</html>