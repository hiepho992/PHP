<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $money1 = (int) $_POST["money"];
    $select1 = $_POST["from"];
    $select2 = $_POST["to"];
    $index = 23000;
    if ($select1 === "VND") {
        if ($select2 === "USD") {
            $result = $money1 / $index;
        } else {
            $result = $money1;
        }
    } elseif ($select2 === "VND") {
        $result = $money1 * $index;
    } else {
        $result = $money1;
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            height: 250px;
            width: 350px;
            border: 1px solid gray;
            padding: 10px;
            align-items: center;
        }

        fieldset {
            height: 200px;
            align-items: center;
        }
        tr{
            height: 35px;
        }
        input, select{
            border-radius: 5px;
            height: 25px;
        }
    </style>
</head>

<body>
    <form action="changeMoney.php" method="post">
        <fieldset>
            <legend>Change Money</legend>
            <table>
                <tr>
                    <td> <label for="money">Input Money:</label></td>
                    <td> <input type="number" name="money" id=""></td>
                </tr>
                <tr>
                    <td> <label for="From">From Money:</label></td>
                    <td>
                        <select name="from" id="">
                            <option value="VND">VND</option>
                            <option value="USD">USD</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>To Money:</td>
                    <td>
                        <select name="to" id="">
                            <option value="VND">VND</option>
                            <option value="USD">USD</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Result:</td>
                    <td><?= $result ?></td>

                </tr>
            </table>
            <input type="submit" value="Submit">

        </fieldset>
    </form>
</body>

</html>