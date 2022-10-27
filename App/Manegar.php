<?php

namespace App;

include_once "Employee.php";

class Manegar extends Employee
{
    public const BONSE = 1000;
 
    public function calculetSalaryPerHour($hours = 176)
    {
        return (self::BONSE + $this->besicSalary) / $hours;
    }
}
