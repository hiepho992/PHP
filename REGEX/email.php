<?php
function checkEmail($email){
    $pattan = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
    if (empty($email)){
        return "Email not empty";
    }
    if (preg_match($pattan, $email)){
        return "Email is update";
    }else{
        return "Your email is error. Please input it again!";
    }
}
$email = '';
if($_SERVER["REQUEST_METHOD"] === "POST"){
    $email = $_POST["email"];
    checkEmail($email);
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
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);  ?>" method="post">
    <label for="">Email</label>
    <input type="text" name="email" id="" placeholder="abc@gmail.com">
    <input type="submit" value="Submit">
    </form>
    <p><?= checkEmail($email);?> </p>
</body>

</html>