<?php

class ArraySumHelper
{
    /*
        Находит сумму первых
        степеней элементов массива:
    */
    public function getAvg1(array $arr): int
    {
        return array_sum($arr);
    }

    /*
        Находит сумму вторых степеней
        элементов массива и извлекает
        из нее квадратный корень:
    */
    public function getAvg2(array $arr): float
    {
        return $this->calcSqrt($this->getSum($arr, 2), 2);
    }

    /*
        Находит сумму третьих степеней
        элементов массива и извлекает
        из нее кубический корень:
    */

    public function getAvg3(array $arr): float
    {
        return $this->calcSqrt($this->getSum($arr, 3), 3);
    }

    /*
        Находит сумму четвертых степеней
        элементов массива и извлекает
        из нее корень четвертой степени:
    */
    public function getAvg4(array $arr): float
    {
        return $this->calcSqrt($this->getSum($arr, 4), 4);
    }

    /*
        Вспомогательный метод, который параметром
        принимает массив и степень и возвращает
        сумму степеней элементов массива:
    */
    private function getSum(array $arr, int $power): int
    {
        $sum = 0;
        foreach ($arr as $number) {
            $sum += pow($number, $power);
        }
        return $sum;
    }

    /*
        Вспомогательный метод, который параметром
        принимает целое число и степень и возвращает
        корень заданной степени из числа:
    */
    private function calcSqrt(int $num, int $power): float
    {
        return pow($num, 1 / $power);
    }
}


var_dump((new ArraySumHelper())->getAvg4([1, 2, 3, 3]));