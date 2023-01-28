<?php

require_once 'Country.php';
require_once 'Test.php';

$country = new Country('Minsk', 23, 200);
var_dump($country->getName());
var_dump($country->getAge());
var_dump($country->getPopulation());

$test = new Test();
var_dump($test->getSum());
