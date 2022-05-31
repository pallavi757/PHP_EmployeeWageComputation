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
    $empRatePerHrs=20;
    if($check==1){
        echo"\n Employee is present";
        $empHrs=8;
        $this->computeEmpDailyWage($empRatePerHrs, $empHrs);/*if employee is present then Call computeEmpDailyWage funtion 
        to calculate emloyee daily wage */
    }
    else{
        echo"\n Employee is absent";
        $empHrs=0;
        $this->computeEmpDailyWage($empRatePerHrs, $empHrs);
    }
}
//UC2-Compute daily employee wage
function computeEmpDailyWage($empRatePerHrs,$empHrs) {
    $empWage = $empRatePerHrs * $empHrs;
    echo "\n Daily Employee Wage is:", $empWage;
}
}
//call non static function through object
$emp=new EmployeeWage();
$emp->welcomeProgram();
$emp->attendance();
?>