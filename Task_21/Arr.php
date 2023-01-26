<?php

class Arr
{
    private array $numbers;
    private object $sumHelper;
    private object $avgHelper;

    public function __construct()
    {
        $this->sumHelper = new SumHelper();
        $this->avgHelper = new AvgHelper();
    }

    public function add(float $number): void
    {
        $this->numbers[] = $number;
    }

    // Находим сумму квадратов и кубов элементов массива:
    public function getSum23()
    {
        $numbers = $this->numbers;
        return $this->sumHelper->getSum2($numbers) + $this->sumHelper->getSum3($numbers);
    }

    public function getAvgMeanSum()
    {
        $numbers = $this->numbers;
        return $this->avgHelper->getAvg($numbers) + $this->avgHelper->getMeanSquare($numbers);
    }
}