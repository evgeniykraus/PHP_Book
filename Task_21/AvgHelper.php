<?php

class AvgHelper
{
    private object $sumHelper;

    public function __construct()
    {
        $this->sumHelper = new SumHelper();
    }

    //Задача №4
    public function getAvg(array $numbers): float
    {
        return $this->sumHelper->getSum($numbers, 1) / count($numbers);
    }

    //Задача №5
    public function getMeanSquare(array $numbers): float
    {
        return pow($this->sumHelper->getSum2($numbers), 1 / 2) / count($numbers);
    }
}