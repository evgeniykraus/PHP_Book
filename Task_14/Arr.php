<?php

/*
 * Задача №1
 * Создайте класс Arr, который хранит в себе массив чисел и может вычислять сумму этих чисел с помощью метода getSum. Числа
 * могут добавляться по одному с помощью метода add, либо группой с помощью метода push.

 * Задача №2
 * Вызовите методы класса в виде цепочки.

 * */

class Arr
{
    private $numbers = array();

    public function __construct(array $numbers)
    {
        $this->numbers = $numbers;
    }

    public function add(int $number): Arr
    {
        $this->numbers[] = $number;
        return $this;
    }

    public function push(array $numbers): Arr
    {
        $this->numbers = array_merge($this->numbers, $numbers);
        return $this;
    }

    public function getSum(): int
    {
        return array_sum($this->numbers);
    }
}

var_dump((new Arr([1, 2, 3]))->add(1)->push([1, 2])->getSum());