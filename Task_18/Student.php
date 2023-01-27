<?php

class Student extends User
{
    private $course = 1;

    public function setName(string $name): void
    {
        if (strlen($name) < 10) {
            parent::setName($name);
        }
    }

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