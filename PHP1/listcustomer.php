<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     
    </style>
</head>

<body>
    <?php
    $listcustomer = array(
        "1" => array(
            "ten" => "Mai Văn Hoàn",
            "ngaysinh" => "1983-08-20",
            "diachi" => "Hà Nội"
        ),
        "2" => array(
            "ten" => "Nguyễn Văn Nam",
            "ngaysinh" => "1983-08-20",
            "diachi" => "Bắc Giang"
        ),
        "3" => array(
            "ten" => "Nguyễn Thái Hòa",
            "ngaysinh" => "1983-08-21",
            "diachi" => "Nam Định"
        ),
        "4" => array(
            "ten" => "Trần Đăng Khoa",
            "ngaysinh" => "1983-08-22",
            "diachi" => "Hà Tây"
        ),
        "5" => array(
            "ten" => "Nguyễn Đình Thi",
            "ngaysinh" => "1983-08-17",
            "diachi" => "Hà Nội"
        )
    );
    ?>
    <table>
        <caption>Danh sách khách hàng</caption>
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
        </tr>

        <?php
            foreach ($listcustomer as $key => $value) {
                echo "<tr>";
                echo "<td>" . $key . "</td>";
                echo "<td>" . $value["ten"] . "</td>";
                echo "<td>" . $value["ngaysinh"] . "</td>";
                echo "<td>" . $value["diachi"] . "</td>";
                echo "</tr>";
            }
        ?>

    </table>



</body>

</html>