<?php

class User
{
    private string $name;
    private string $surname;
    private string $birthday;
    private int $age;

    public function __construct(string $name, string $surname, string $birthday)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->birthday = $birthday;
        $this->calculateAge($birthday);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getBirthday(): string
    {
        return $this->birthday;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    private function calculateAge(string $birthday): void
    {
        $today = new DateTime();
        $birthday = new DateTime($birthday);
        $this->age = $today->diff($birthday)->y;
    }
}