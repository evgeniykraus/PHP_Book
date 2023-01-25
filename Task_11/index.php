<?php

require_once 'Arr.php';

$arr = new Arr();

var_dump($arr->getAvg());

$arr->add([1, 2, 3]);

var_dump($arr->getAvg());
