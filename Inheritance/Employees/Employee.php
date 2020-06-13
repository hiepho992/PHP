<?php
namespace Employees;
class Employee{
    public $fname;
    public $lname;
    public $birthdate;
    public $address;
    public $work;


    public function __construct($fname, $lname, $birthdate, $address, $work)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->birthdate = $birthdate;
        $this->address = $address;
        $this->work = $work;

    }
    public function setFname($fname){
        $this->fname = $fname;
    }
    public function getFname(){
        return $this->fname;
    }

    public function setLname($lname){
        $this->lname = $lname;
    }
    public function getLname(){
        return $this->lname;
    }

    public function setBirthdate($birthdate){
        $this->birthdate = $birthdate;
    }
    public function getBirthdate(){
        return $this->birthdate;
    }

    public function setAddress($address){
        $this->address = $address;
    }
    public function getAddress(){
        return $this->address;
    }

    public function setWork($work){
        $this->work = $work;
    }
    public function getwork(){
        return $this->work;
    }
    function array(){
        return [$this->fname, $this->lname, $this->birthdate, $this->address, $this->work];
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