<?php

require_once 'Student.php';

$student = new Student('Erick');

var_dump($student->getName());
var_dump($student->getCourse());
$student->transferToNextCourse();
$student->transferToNextCourse();
var_dump($student->getCourse());
$student->transferToNextCourse();
$student->transferToNextCourse();
$student->transferToNextCourse();
$student->transferToNextCourse();
$student->transferToNextCourse();
$student->transferToNextCourse();
$student->transferToNextCourse();
var_dump($student->getCourse());
