<?php

require_once 'User.php';

$user = new User();

$user->setName('Vadik');
var_dump($user->getName());

$user->setAge(20);
var_dump($user->getAge());