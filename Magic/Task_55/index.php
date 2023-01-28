<?php

require_once 'User.php';

$user = new User();

$user->name = 'John';
$user->age = 23;

var_dump($user->name);
var_dump($user->age);
