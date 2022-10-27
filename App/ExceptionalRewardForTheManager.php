<?php
include_once "Manegar.php";

use App\Manegar;

class ExceptionalRewardForTheManager extends Manegar
{
    public float  $exceptionalRewardForTheManager;

    public function calculetExceptionalRewardForTheManager($hours = 10)
    {
        return (self::BONSE + $this->besicSalary + $this->exceptionalRewardForTheManager) / $hours;
    }
}
