<?php
function checkAccount($account){
    $pattern = '/^[_a-z0-9]{6,}$/';
    if (empty($account)) return "Account not empty";
    if (preg_match($pattern, $account)){
        return "Account eccept";
    }else{
        return "Account error";
    }
}
if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $input = $_POST["account"];
    checkAccount($input);
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
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label for="">Input your account</label>
    <input type="text" name="account" id="">
    <input type="submit" value="Submit">
    </form>
    <p><?php echo  checkAccount($input); ?></p>
</body>

</html>