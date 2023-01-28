<?php

/*
 * Задача №1
 * Сделайте класс City, в котором будут следующие свойства - name, foundation (дата основания), population (население). Создайте объект этого класса.

 * Задача №2
 * Пусть дана переменная $props, в которой хранится массив названий свойств класса City. Переберите этот массив циклом foreach и выведите на экран значения соответствующих свойств.

 * */

class City
{
    public $name = 'Кемерово';
    public $foundation = 1321;
    public $population = 12345;
}

$city = new City();
$props = ['name', 'foundation', 'population'];

foreach ($props as $prop){
    echo $city->$prop . '<br>';
}
