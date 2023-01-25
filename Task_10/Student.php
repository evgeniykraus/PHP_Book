<?php

/*
 * Задача №1
 * Создайте класс Student с двумя свойствами - name и course (курс студента).
 * Сделайте так, чтобы имя студента приходило параметром при создании объекта, а курс автоматически принимал значение 1.
 * Пусть имя созданного студента будет неизменяемым и доступным только для чтения, а вот для курса сделайте метод, который будет переводить нашего студента на следующий курс:

 * Задача №2
 * Модифицируйте метод transferToNextCourse так, чтобы при переводе на новый курс выполнялась проверка того, что новый курс не будет больше 5.

 * */

class Student
{
    public $name;
    public $course;

    public function __construct(string $name)
    {
        $this->name = $name;
        $this->course = 1;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getCourse(): int
    {
        return $this->course;
    }

    public function transferToNextCourse(): void
    {
        $this->course = $this->courseIsCorrect($this->course + 1);
    }

    private function courseIsCorrect(int $course): int
    {
        return ($course < 6) ? $course : $this->course;
    }
}