<?php

namespace App;

abstract class Employee
{
    public int $id;
    public string $name;
    public float $besicSalary;
    public abstract function calculetSalaryPerHour($hours =176);
}
