<?php

require_once 'User.php';
require_once 'Employee.php';
require_once 'Student.php';
require_once 'Figure.php';
require_once 'Rectangle.php';

$student = new Student('Vasya', 10);

$student->increaseRevenue(10);
var_dump($student->getScholarship());

$student->decreaseRevenue(5);
var_dump($student->getScholarship());

$rectangle = new Rectangle(2, 2);
var_dump($rectangle->getPerimeter());
var_dump($rectangle->getSquarePerimeterSum());