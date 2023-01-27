<?php

/*
 * Сделайте класс Driver (водитель), который будет наследовать от класса Employee.
 * Пусть новый класс добавляет следующие свойства: водительский стаж, категория вождения (A, B, C, D), а также геттеры и сеттеры к ним.
 * */

class Driver extends Employee
{
    private $drivingExp = 0;
    private $drivingCategory = array();

    public function getDrivingExp(): int
    {
        return $this->drivingExp;
    }

    public function setDrivingExp(int $year): void
    {
        $this->drivingExp = $year;
    }

    public function getDrivingCategory(): array
    {
        return $this->drivingCategory;
    }

    public function setDrivingCategory(array $category): void
    {
        $this->drivingCategory = $category;
    }
}