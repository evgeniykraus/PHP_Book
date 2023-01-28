<?php

require_once 'User.php';
require_once 'Arr.php';

$user = new User('Petrov', 'John', 'Vasilevich');
echo $user;

$arr = new Arr();
$arr->add(1);
$arr->add(2);
$arr->add(3);

echo $arr;