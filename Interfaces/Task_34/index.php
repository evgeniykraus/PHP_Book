<?php

require_once 'Cube.php';
require_once 'User.php';

$user = new User('Danil', 25);
var_dump($user->getName());
var_dump($user->getAge());

$cube = new Cube(2);
var_dump($cube->getArea());
var_dump($cube->getVolume());