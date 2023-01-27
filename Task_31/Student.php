<?php

class Student extends User
{
    private int $scholarship;

    public function __construct(string $name, int $scholarship)
    {
        $this->scholarship = $scholarship;
        parent::__construct($name);
    }

    public function getScholarship(): int
    {
        return $this->scholarship;
    }

    public function setScholarship($scholarship): void
    {
        $this->scholarship = $scholarship;
    }

    public function increaseRevenue($value): void
    {
        $this->scholarship += $value;
    }

    public function decreaseRevenue($value): void
    {
        $this->scholarship -= $value;
    }
}