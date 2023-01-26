<?php
require_once 'Test.php';
require_once 'Test1.php';
require_once 'Test2.php';

/*
 * Сделайте объект какого-нибудь класса.
 * Примените к объекту функцию get_class и узнайте имя класса, которому принадлежит объект.
 * */
$test1 = new Test1('TEST');
//var_dump(get_class($test1));


/*
 * Сделайте два класса: Test1 и Test2.
 * Пусть оба класса имеют свойство name.
 * Создайте некоторое количество объектов этих классов и запишите в массив $arr в произвольном порядке.
 * Переберите этот массив циклом и для каждого объекта выведите значение его свойства name и имя класса, которому принадлежит объект.
 * */

$arr = array();

for ($i = 1; $i < 4; $i++) {
    array_push($arr, new Test1("TEST_1_$i"), new Test2("TEST_2_$i"));
}

foreach ($arr as $value) {
//    echo 'Имя: ' . $value->name . '  Класс: ' . get_class($value) . '<br>';
}

/*
 * Сделайте класс Test с методами method1, method2 и method3.
 * С помощью функции get_class_methods получите массив названий методов класса Test.
 * */

$test = new Test();
var_dump(get_class_methods($test));
