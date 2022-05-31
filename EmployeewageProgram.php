<?php
/* To dispaly Welcome Message*/
class EmployeeWage{
    //Create non static function
    function welcomeProgram(){
        echo"...Welcome to Employee Wage Computation...";
    }
}
//call function through object
$emp=new EmployeeWage();
$emp->welcomeProgram();
?>