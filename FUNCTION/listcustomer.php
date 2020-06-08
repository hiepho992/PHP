<?php
$listcustomer = array(
    "1" => array(
        "ten" => "Mai Văn Hoàn",
        "ngaysinh" => "1983/08/10",
        "diachi" => "Hà Nội"
    ),
    "2" => array(
        "ten" => "Nguyễn Văn Nam",
        "ngaysinh" => "1983/08/20",
        "diachi" => "Bắc Giang"
    ),
    "3" => array(
        "ten" => "Nguyễn Thái Hòa",
        "ngaysinh" => "1983/08/21",
        "diachi" => "Nam Định"
    ),
    "4" => array(
        "ten" => "Trần Đăng Khoa",
        "ngaysinh" => "1983/08/22",
        "diachi" => "Hà Tây"
    ),
    "5" => array(
        "ten" => "Nguyễn Đình Thi",
        "ngaysinh" => "1983/08/17",
        "diachi" => "Hà Nội"
    )
);
function findCustomers($customers, $datefrom, $dateto)
{
    if (empty($datefrom) && empty($dateto)) {
        return $customers;
    }
    $displayCustomers = [];
    foreach ($customers as $customer) {
        if (!empty($datefrom) && (strtotime($customer["ngaysinh"]) < strtotime($datefrom)))
            continue;

        if (!empty($dateto) && ((strtotime($customer["ngaysinh"])) > strtotime($dateto)))
            continue;
        $displayCustomers[] = $customer;
    }
    return $displayCustomers;
}
$datefrom = NULL;
$dateto = NULL;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $datefrom = $_POST["datefrom"];
    $dateto = $_POST["dateto"];
}
    $displayCustomers =
    findCustomers($listcustomer, $datefrom, $dateto);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="listcustomer.php" method="post">
        FROM <input type="text" name="datefrom" id="" placeholder="yy/mm/dd">
        TO <input type="text" name="dateto" id="" placeholder="yy/mm/dd">
        <input type="submit" value="Search">
    </form>
    <table>
        <caption>CUSTOMER LIST</caption>
        <tr>
            <th>NO.</th>
            <th>CUSTOMER NAME</th>
            <th>BIRTHDAY</th>
            <th>ADDRESS</th>
        </tr>
        <?php if (count($displayCustomers) === 0) : ?>
            <tr>
                <td colspan="4" class="message">khong tim thay khach hang nao</td>
            </tr>
        <?php endif; ?>


        <?php foreach ($displayCustomers as $key => $customer) : ?>
            <tr>
                <td><?php echo $key; ?></td>
                <td><?php echo $customer["ten"]; ?></td>
                <td><?php echo $customer["ngaysinh"]; ?></td>
                <td><?php echo $customer["diachi"]; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>