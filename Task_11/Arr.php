<?php

/*
 * Задача №1
 * Реализуйте класс Arr, метод add вашего класса параметром должен принимать массив чисел.
 * Все числа из этого массива должны добавляться в конец массива $this->numbers.

 * Задача №2
 * Реализуйте также метод getAvg, который будет находить среднее арифметическое чисел.
 *
 * */

class Arr
{
    private array $numbers = [];

    public function add(array $numbersArray): void
    {
        $this->numbers = array_merge($this->numbers, $numbersArray);
    }

    public function getAvg(): int
    {
        $numbersSum = array_sum($this->numbers);
        return ($numbersSum > 0) ? $numbersSum / count($this->numbers) : 0;
    }
}