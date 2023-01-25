<?php

/*
Задача №1
Сделайте класс Employee, в котором будут следующие свойства - name, age, salary.

Задача №2
Сделайте в классе Employee метод getName, который будет возвращать имя работника.

Задача №3
Сделайте в классе Employee метод getAge, который будет возвращать возраст работника.

Задача №4
Сделайте в классе Employee метод getSalary, который будет возвращать зарплату работника.

Задача №5
Сделайте в классе Employee метод checkAge, который будет проверять то, что работнику больше 18 лет и возвращать true, если это так, и false, если это не так.

Задача №6
Создайте два объекта класса Employee, запишите в их свойства какие-либо значения. С помощью метода getSalary найдите сумму зарплат созданных работников.
 */

class Employee
{
    public $name;
    public $age;
    public $salary;

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getSalary(): int
    {
        return $this->salary;
    }

    public function checkAge(): bool
    {
        return $this->age > 18;
    }
}

$employee_1 = new Employee();
$employee_1->salary = 1000;

$employee_2 = new Employee();
$employee_2->salary = 2000;


var_dump($employee_1->salary + $employee_2->salary);


// Задача №7 Сделайте класс User, в котором будут следующие свойства - name и age.
// Задача №8 Сделайте метод setAge, который параметром будет принимать новый возраст пользователя.
class User
{
    public $name;
    public $age;

    public function setAge(int $age): void
    {
        $this->age = $age;
    }
}

// Задача №9
// Создайте объект класса User с именем 'john' и возрастом 25. С помощью метода setAge поменяйте возраст на 30. Выведите новое значение возраста на экран.
$user = new User();
$user->name = 'john';
$user->age = 25;
$user->setAge(30);


/*
 * Задача №10
 * Модифицируйте метод setAge так, чтобы он вначале проверял, что переданный возраст больше или равен 18.
 * Если это так - пусть метод меняет возраст пользователя, а если не так - то ничего не делает.
 * */

class User_2
{
    public $name;
    public $age;

    public function setAge(int $age): void
    {
        $this->age = ($age >= 18) ? $age : $this->age;
    }
}

/*
 * Задача №11
 * Сделайте класс Employee, в котором будут следующие свойства работника - name, salary. Сделайте метод doubleSalary, который текущую зарплату будет увеличивать в 2 раза.
 * */

class Employee_2
{
    public $name;
    public $salary;

    public function doubleSalary(): void
    {
        $this > $this->salary *= 2;
    }
}

$employee = new Employee_2();
$employee->name = 'john';
$employee->salary = 1000;
$employee->doubleSalary();

/*
 * Задача №12
 * Сделайте класс Rectangle, в котором в свойствах будут записаны ширина и высота прямоугольника.
 *
 * Задача №13
 * В классе Rectangle сделайте метод getSquare, который будет возвращать площадь этого прямоугольника.
 *
 * Задача №14
 * В классе Rectangle сделайте метод getPerimeter, который будет возвращать периметр этого прямоугольника.
 * */

class Rectangle
{
    public $width;
    public $height;

    public function getSquare(): int
    {
        return $this->width * $this->height;
    }

    public function getPerimeter(): int
    {
        return 2 * ($this->width * $this->height);
    }
}

$rectangle = new Rectangle();
$rectangle->width = 10;
$rectangle->height = 5;

var_dump($rectangle->getSquare());
var_dump($rectangle->getPerimeter());