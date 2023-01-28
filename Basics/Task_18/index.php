<?php

require_once 'User.php';
require_once 'Student.php';


$student = new Student();

$student->setName('Nurik');
var_dump($student->getName());

$student->setName('123');
var_dump($student->getName());

$student->setName('123456789');
var_dump($student->getName());

$student->setName('Nurik123456789');
var_dump($student->getName());
