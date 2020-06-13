<?php
namespace Manager;
class EmployeeManager{
    public static $employee;

    public function __construct(){
        self::$employee = [];
    }

    public function add($employee){
        return self::$employee[] = $employee;
    }
    public function getEmployee(){
        $index = 0;
        $result = null;
        foreach(self::$employee as $value){
            $result .= $index.' '.$value->getFname().' '.$value->getLname().' '.$value->getBirthdate().' '.$value->getAddress().' '.$value->getwork()."<br>";
            $index++;
        }
        return $result;
    }
    public function lookingforEmployee($employee){
        $index = 0;
        $result = null;
        foreach (self::$employee as $value){
            foreach($value->array() as $val){
                if($val === $employee){
                    $result .= $index.' '.$value->getFname().' '.$value->getLname() .' ' .$value->getBirthdate() .' ' .$value->getAddress() .' ' .$value->getwork ."<br>";
                    $index++;
                }
            }
        }
        return $result;
    }
    
    public function deleteEmployee($index){
        foreach(self::$employee as $key => $value){
            if ($key === $index){
                unset(self::$employee[$key]);
            }
        }
        return $this->getEmployee();
    }
   
    public function editEmployee($employee, $fname, $lname, $birthdate, $address, $work){
        foreach(self::$employee as $value){
            foreach($value->array() as $val){
                if ($val === $employee){
                    $value->setFname($fname);
                    $value->setLname($lname);
                    $value->setBirthdate($birthdate);
                    $value->setAddress($address);
                    $value->setWork($work);
                }
            }
        }
    }
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
    
</body>
</html>