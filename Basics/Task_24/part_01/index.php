<?php

require_once 'Employee.php';
require_once 'Student.php';

//Создайте по 3 объекта каждого класса и в произвольном порядке запишите их в массив $arr.
$arr = array();
$scholarshipSum = 0;
$salarySum = 0;

for ($i = 1; $i < 4; $i++) {
    $employee = new Employee("Employee_$i", $i+1);
    $student = new Student("Student_$i", $i);

    array_push($arr, $employee, $student);
}

foreach ($arr as $employee) {
    if ($employee instanceof Employee) {
        echo $employee->name . '<br>';
    }
}

foreach ($arr as $employee) {
    if ($employee instanceof Student) {
        echo $employee->name . '<br>';
    }
}

foreach ($arr as $employee) {
    if ($employee instanceof Student) {
        $scholarshipSum += $employee->scholarship;
    } else {
        $salarySum += $employee->salary;
    }
}

echo "Зарплата: $salarySum";
echo "<br>";
echo "Стипендия: $scholarshipSum";
