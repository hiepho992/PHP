<?php
    function isFirstLetterUpperCase($str)
    {
        $regex = '/^[A-Z]/';
        if (preg_match($regex, $str)) {
            return "String's first character is upercase";
        } else {
            return "String's first character isn't upercase";
        }
    }
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $input = $_POST["text"];
        isFirstLetterUpperCase($input);
    }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="post">
            <label for="">CHECK UPERCASE</label>
            <input type="text" name="text" id="">
            <input type="submit" value="CHECK">

        </form>
        <p><?= isFirstLetterUpperCase($input);  ?></p>
    </body>

</html>