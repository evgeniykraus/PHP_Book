<?php

require_once 'iFigure.php';
require_once 'Disk.php';
require_once 'FiguresCollection.php';

$disk = new Disk(2);
var_dump($disk->getPerimeter());


$figuresCollection = new FiguresCollection();

$figuresCollection->addFigure(new Disk(2));
$figuresCollection->addFigure(new Disk(2));


var_dump($figuresCollection->getTotalPerimeter());