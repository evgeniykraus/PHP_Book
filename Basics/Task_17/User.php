<?php
class User
{
    private $name;
    protected $age;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge($age): void
    {
        $this->age = $age;
    }
}