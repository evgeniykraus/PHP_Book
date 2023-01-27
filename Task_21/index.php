<?php

require_once 'Arr.php';

$numbers = new Arr();
$numbers->add(2);

var_dump($numbers->getSum23());
var_dump($numbers->getAvgMeanSum());

