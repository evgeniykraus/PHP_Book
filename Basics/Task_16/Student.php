<?php

class Student extends User
{
    private $course;

    public function setCourse($course): void
    {
        $this->course = $course;
    }

    public function getCourse(): int
    {
        return $this->course;
    }
}