<?php

namespace App;

include_once "Employee.php";

use App\Employee;

class NormalEmployee extends Employee
{
    public function calculetSalaryPerHour($hours = 176)
    {
        return $this->besicSalary / $hours;
    }
}
