<?php

class User
{
    protected $name;
    protected $age;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        strlen($name) > 3 ? $this->name = $name : $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }
}