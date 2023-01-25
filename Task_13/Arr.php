<?php

/*
 * Задача №1
 * Создайте класс Arr, который хранит в себе массив чисел и может вычислять сумму этих чисел с помощью метода getSum. Сами
 * числа приходят в виде массива в конструктор объекта, а также могут добавляться по одному с помощью метода add.

 * Задача №2
 * Вызовите его метод getSum сразу после создания объекта.
 * */

class Arr
{
    private $numbers = array();

    public function __construct(array $numbers)
    {
        $this->numbers = $numbers;
    }

    public function add(int $number): void
    {
        $this->numbers[] = $number;
    }

    public function getSum(): int
    {
        return array_sum($this->numbers);
    }
}

var_dump((new Arr([1, 2, 3]))->getSum());