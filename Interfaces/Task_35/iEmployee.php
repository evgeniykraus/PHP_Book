<?php

require_once 'iUser.php';
interface iEmployee extends iUser
{
    public function getSalary(): float;

    public function setSalary(float $salary): void;
}