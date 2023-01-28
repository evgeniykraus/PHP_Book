<?php

require_once 'User.php';

$user1 = new User('Oleg');
$user2 = new User('Oleg');
$user3 = new User('Oleg');

var_dump(User::getCount());