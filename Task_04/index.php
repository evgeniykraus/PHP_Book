<?php
/*
 * Задача №1
 * Сделайте класс Student со свойствами $name и $course (курс студента, от 1-го до 5-го).

 * Задача №2
 * В классе Student сделайте public метод transferToNextCourse, который будет переводить студента на следующий курс.

 * Задача №3
 * Выполните в методе transferToNextCourse проверку на то, что следующий курс не больше 5.

 * Задача №4
 * Вынесите проверку курса в отдельный private метод isCourseCorrect.
 * */

class Student
{
    public $name;
    public $course;

    public function transferToNextCourse(): void
    {
        $this->course = $this->isCourseCorrect($this->course + 1);
    }

    private function isCourseCorrect(int $course): int
    {
        return ($course > 5 || $course < 1) ? $this->course : $course;
    }
}