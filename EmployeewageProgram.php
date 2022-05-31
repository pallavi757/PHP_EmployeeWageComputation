<?php
/* To dispaly Welcome Message*/
class EmployeeWage{
    //Create non static function
    function welcomeProgram(){
        echo"...Welcome to Employee Wage Computation...";
    }
      //UC1-Check Employee Attendence by using random function
    function attendance(){
    $check=rand(0,1);//To get 0 and 1
    if($check==1){
        echo"\n Employee is present";
    }
    else{
        echo"\n Employee is absent";
    }
}
}
//call non static function through object
$emp=new EmployeeWage();
$emp->welcomeProgram();
$emp->attendance();
?>