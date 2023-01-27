<?php

require_once 'Programmer.php';

$programmer = new Programmer('Vasya', 200);

$programmer->addLang(['PHP', 'JS']);

var_dump($programmer->getName());
var_dump($programmer->getSalary());
var_dump($programmer->getLangs());