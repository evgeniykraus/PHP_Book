<?php

require_once 'User.php';
require_once 'Date.php';

$user = new User('John', 12);
var_dump($user->name);
var_dump($user->age);

$date = new Date(28, 1, 2023);
var_dump($date->weekDay);