<?php

use App\Manegar;

include_once "App/Manegar.php";
include_once "App/NormalEmployee.php";
include_once "App/ExceptionalRewardForTheManager.php";

class Main
{
    public function main()
    {
        $manegar = new ExceptionalRewardForTheManager ;
        $manegar->id = 2;
        $manegar->name="abdo selim";
        $manegar->besicSalary = 2000;
        $manegar->exceptionalRewardForTheManager =500;
      
      return  $manegar->calculetExceptionalRewardForTheManager();
    }
}


$main = new Main;
echo $main->main();