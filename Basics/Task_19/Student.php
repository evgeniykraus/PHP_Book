<?php

class Student extends User
{
    private int $course;

    public function __construct(string $name, string $surname, string $birthday, int $course)
    {
        parent::__construct($name, $surname, $birthday);
        $this->course = $course;
    }

    public function getCourse(): int
    {
        return $this->course;
    }
}