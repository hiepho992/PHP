<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ditionary</title>
    <style>
        form{
            height: 100px;
            width: 200px;
            padding: 20px;
            border: 1px solid gray;
        }
        label,input{
            margin: 10px;
        }
        label{
            font-size: 20px;
            text-transform: uppercase;
        }
        #search{
            height: 25px;
            box-shadow: 1px 2px gray;
        }
        [type = "submit"]{
            border-radius: 5px;
        }

    </style>
</head>
<body>
    <form action="ditionary.php" method="post">
    <label for="search">Từ điển anh-việt</label>
    <input type="text" name="search" id="search" placeholder="Nhập từ cần tìm">
    <input type="submit" value="Submit">
    </form>
    <?php
    $dictionary = array("Name" => "Tên", "hello" => "Xin chào", "hi" => "xin chào");
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $seachWord = $_POST["search"];
        $flag = false;
        foreach ($dictionary as $word => $value){
            if ($seachWord === $word){
                $flag = true;
                echo "Từ " .$seachWord. " có nghĩa là " .$value;

            }
        }
        if($flag = false){
            echo "Không tìm thấy từ cần tra";
        }

    }
    ?>
</body>
</html>