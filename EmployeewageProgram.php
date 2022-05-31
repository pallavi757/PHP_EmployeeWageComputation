<?php
/* To dispaly Welcome Message to */
class EmployeeWage{
    //Create non static function
    function welcomeProgram(){
        echo"...Welcome to Employee Wage Computation...";
    }
      //UC1-Check Employee Attendence by using random function
    function attendance(){    
    $check=rand(0,2);//To get 0 and 1
    //UC3-Add Part time to calulate daily employee wage
    $is_PartTime=1; //Declare two constant is_PartTime and is_FullTime
    $is_FullTime=2;
    $empRatePerHrs=20;
    if($check== $is_PartTime){
        echo"\n Employee is working as part time base";
        $empHrs=4;
        $this->computeEmpDailyWage($empRatePerHrs, $empHrs);/*if employee is half day present then Call computeEmpDailyWage funtion 
        to calculate emloyee daily wage */
    }
    elseif($check== $is_FullTime){
        echo"\n Employee is working as full time base";
        $empHrs=8;
        $this->computeEmpDailyWage($empRatePerHrs, $empHrs);/*if employee is full day present then Call computeEmpDailyWage funtion 
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