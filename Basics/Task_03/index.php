<?php
/*
 * Задача №1
 * Не подсматривая в мой код создайте такой же класс User с такими же методами.

 * Задача №2
 * Создайте объект этого класса User проверьте работу методов setAge и addAge.

 * Задача №3
 * Добавьте также метод subAge, который будет выполнять уменьшение текущего возраста на переданное количество лет.
 * */

class User
{
    public $name;
    public $age;

    public function setAge(int $age): void
    {
        $this->age = $this->isAgeCorrect($age);
    }

    public function addAge(int $year): void
    {
        $this->age = $this->isAgeCorrect($this->age + $year);
    }

    public function subAge(int $year): void
    {
        $this->age = $this->isAgeCorrect($this->age - $year);
    }

    private function isAgeCorrect(int $age): int
    {
        return ($age >= 18 && $age <= 60) ? $age : $this->age;
    }
}

$user = new User();
$user->setAge(20);
$user->subAge(11);
$user->addAge(11);
var_dump($user->age);


