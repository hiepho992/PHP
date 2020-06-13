<?php
include_once "Employees/Employee.php";
include_once "Manager/manager.php";
use Employees\Employee;
use Manager\EmployeeManager;


$employeeManager = new EmployeeManager();
$employeeManager->add(new Employee("Nguyen", "Xuan", "10/06/1990", "Hue", "Giam Doc"));
$employeeManager->add(new Employee("Tran", "Thang", "10/06/1998", "Hue", "ke toan"));
$employeeManager->add(new Employee("Ho", "Vuong", "10/05/1994", "Hue", "Nhan su"));
$employeeManager->add(new Employee("Le", "Hang", "10/06/1991", "Hue", "ke toan"));
print_r($employeeManager->getEmployee());

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>