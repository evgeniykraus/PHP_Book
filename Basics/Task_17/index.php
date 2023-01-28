<?php

require_once 'User.php';
require_once 'Student.php';


$student = new Student();

$student->setName('Nurik');
$student->setAge(29);
$student->setCourse(1);

var_dump($student->getName());
var_dump($student->getAge());
var_dump($student->getCourse());

$student->addOneYear();
var_dump($student->getAge());
