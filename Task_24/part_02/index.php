<?php

require_once 'User.php';
require_once 'Employee.php';
require_once 'City.php';

$arr = array();

for ($i = 1; $i < 4; $i++) {
    $employee = new Employee("Employee_$i", "E_Name_$i", $i + 1);
    $user = new User("User_$i", "U_Name_$i");
    $city = new City("City_$i", rand(1, 100));

    array_push($arr, $employee, $user, $city);
}

foreach ($arr as $user) {
    if ($user instanceof User) {
        echo $user->name . '<br>';
    }
}

foreach ($arr as $user) {
    if (!$user instanceof User) {
        echo $user->name . '<br>';
    }
}

foreach ($arr as $user) {
    if ($user instanceof User && !$user instanceof Employee) {
        echo $user->name . '<br>';
    }
}

