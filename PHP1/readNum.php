<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Number</title>
</head>
<body>
    <form action="readNum.php" method="get">
        <caption>Read Number To Letter</caption>
        <input type="number" name="number" id="number">
        <input type="submit" value="Submit">
        <p><?php  $inputNumber ?></p>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "GET"){
        $inputNumber = $_GET["number"];
        if ( $inputNumber < 10 && $inputNumber > 0){
            switch ($inputNumber){
                case 1:
                    echo "ONE";
                break;
                case 2:
                    echo "TWO";
                break;
                case 3:
                    echo "THREE";
                break;
                case 4:
                    echo "FOUR";
                break;
                case 5:
                    echo "FIVE";
                break;
                case 6:
                    echo "SIX";
                break;
                case 7:
                    echo "SEVEN";
                break;
                case 8:
                    echo "EIGHT";
                break;
                case 9:
                    echo "NINE";
                break;
                
            }
        }elseif($inputNumber < 20){
           
        }
        
    }
    
    ?>
</body>
</html>