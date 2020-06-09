<?php
class QuadraticEquation
{
    private $numa;
    private $numb;
    private $numc;


    function __construct($numa, $numb, $numc)
    {
        $this->numa = $numa;
        $this->numb = $numb;
        $this->numc = $numc;
    }
    function getNuma()
    {
        return $this->numa;
    }
    function getNumb()
    {
        return $this->numb;
    }
    function getNumc()
    {
        return $this->numc;
    }

    function checkNum()
    {
        if ($this->numa === 0) {
            if ($this->numb !== 0) {
                echo "PT co nghiem " . "<br>";
                echo (-$this->numc / $this->numb);
            } else {
                echo "PT vo nghiem";
            }
        } elseif ($this->numb !== 0) {
            $delta = ($this->numb * $this->numb  - 4 * $this->numa * $this->numc);
            if ($delta === 0) {
                echo "Nghiem kep: " . round(-$this->numb / (2 * $this->numa), 2);
            } elseif ($delta < 0) {
                echo "PT vo nghiem";
            } else {
                echo "PT co 2 nghiem" . "<br>";
                echo "Nghiem 1: " . round((-$this->numb + sqrt($this->numb * $this->numb - 4 * $this->numa * $this->numc)) / (2 * $this->numa), 2) . "<br>";
                echo "Nghiem 2: " . round((-$this->numb - sqrt($this->numb * $this->numb - 4 * $this->numa * $this->numc)) / (2 * $this->numa), 2);
            }
        }
    }

    
}
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $numbera = (float) $_POST["numbera"];
    $numberb = (float) $_POST["numberb"];
    $numberc = (float) $_POST["numberc"];
}

$number = new QuadraticEquation($numbera, $numberb, $numberc);
$number->checkNum();



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <fieldset>
            <legend>QuadraticEquation</legend>
            Input A: <input type="number" name="numbera" id="">
            Input B: <input type="number" name="numberb" id="">
            Input C: <input type="number" name="numberc" id="">
            <input type="submit" value="Calculate">
            <p>
                <?= $number->getNuma(); ?>
                <?= $number->getNumb(); ?>
                <?= $number->getNumc(); ?>

            </p>
        </fieldset>

    </form>
</body>

</html>