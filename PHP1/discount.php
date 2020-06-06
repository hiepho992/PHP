<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $product =  $_POST["Product"];
    $price = (int) $_POST["Price"];
    $percent = (float) $_POST["Percent"];
    $discountAmount = $price * $percent * 0.1;
    $priceAfter = $price - $discountAmount;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Discount Calculator</title>
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
        p{
            margin-left: 10px;
        }

        [type="submit"] {
            width: 150px;
            margin: 0px 90px;
        }
    </style>
</head>

<body>
    <form action="discount.php" method="post">
        <h2>Product Discount Calculator</h2>
        <label for="Product">Product Description:</label>
        <input type="text" name="Product" id="Product">
        <label for="Price">List Price:</label>
        <input type="number" name="Price" id="Price">
        <label for="Percent">Discount Percent:</label>
        <input type="text" name="Percent" id="Percent">
        <p><?= "Discount Amount: " . $discountAmount ?></p>
        <p><?= "Discount Price: " . $priceAfter ?></p>
        <input type="submit" value="Calculate">
    </form>

</body>

</html>