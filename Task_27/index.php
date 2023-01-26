<?php

require_once 'Num.php';
require_once 'Geometry.php';

echo Num::$num1 + Num::$num2;
echo "<br>";
echo Num::getSum();
echo "<br>";

echo Geometry::$pi;
echo "<br>";
echo Geometry::getVolumeSphere(10);
echo "<br>";
echo Geometry::getCircleCircuit(10);
echo "<br>";
echo Geometry::getCircleSquare(10);