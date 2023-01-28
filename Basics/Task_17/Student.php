<?php

class Student extends User
{
    private $course = 1;

    public function getCourse(): int
    {
        return $this->course;
    }

    public function setCourse(int $course): void
    {
        $this->course = $course;
    }

    public function addOneYear(): void
    {
        $this->age++;
    }
}