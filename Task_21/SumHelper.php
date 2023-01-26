<?php

class SumHelper
{
// Сумма квадратов:
    public function getSum2(array $numbers): float
    {
        return $this->getSum($numbers, 2);
    }

// Сумма кубов:
    public function getSum3(array $numbers): float
    {
        return $this->getSum($numbers, 3);
    }

// Вспомогательная функция для нахождения суммы:
    public function getSum(array $numbers, float $power): float
    {
        $sum = 0;

        foreach ($numbers as $number) {
            $sum += pow($number, $power);
        }

        return $sum;
    }
}