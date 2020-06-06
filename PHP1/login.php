<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    form{
        border: 1px solid gray;
        height: 250px;
        width: 200px;
        padding-left: 20px;
    }
        
    </style>
</head>
<body>
    <form action="login.php" method="post">
    <h1>Login</h1>
    <p><input type="text" name="username" id="username" placeholder="username"></p>
    <p><input type="text" name="password" id="password" placeholder="password"></p>    
    <input type="submit" value="Submit">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $username = $_POST["username"];
        $password = $_POST["password"];
        if ($username === "admin" && $password === "admin"){
            echo "welcome $username to website";
        }else{
            echo "Error";
        }
    }
    ?>
</body>
</html>