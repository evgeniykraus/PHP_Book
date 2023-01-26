<?php

require_once 'Arr.php';
require_once 'SumHelper.php';
require_once 'AvgHelper.php';

$numbers = new Arr();
$numbers->add(2);

var_dump($numbers->getSum23());
var_dump($numbers->getAvgMeanSum());

