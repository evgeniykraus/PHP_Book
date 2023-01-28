<?php

require_once 'Student.php';
require_once 'Employee.php';
require_once 'UsersCollection.php';

$usersCollection = new UsersCollection();

for ($i = 1; $i < 4; $i++) {
    $employee = new Employee("Employee_$i", $i + 1);
    $student = new Student("Student_$i", $i);

    $usersCollection->add($employee);
    $usersCollection->add($student);
}

var_dump($usersCollection->getTotalSalary());
var_dump($usersCollection->getTotalScholarship());
var_dump($usersCollection->getTotalSum());

