<?php

require_once 'Cube.php';
require_once 'Rectangle.php';
require_once 'Quadrate.php';

$arr = [];

for ($i = 1; $i < 4; $i++) {
    $cube = new Cube($i, $i * 2);
    $rectangle = new Rectangle($i * 3, $i * 4);
    $quadrate = new Quadrate($i * 5, $i * 6);

    array_push($arr, $cube, $rectangle, $quadrate);
}

foreach ($arr as $figure) {
    if ($figure instanceof iFigure) {
        echo $figure->getPerimeter() . '<br>';
    }
}

foreach ($arr as $figure) {
    if ($figure instanceof iFigure) {
        echo '2D - ' . $figure->getSquare() . '<br>';
    }

    if ($figure instanceof Figure3d) {
        echo '3D - ' . $figure->getSurfaceSquare() . '<br>';
    }
}