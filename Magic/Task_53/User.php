<?php

class User
{
    private string $name;
    private string $surname;
    private string $patronymic;

    public function __construct(string $surname, string $name, string $patronymic)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->patronymic = $patronymic;
    }

    public function __toString(): string
    {
        return "$this->surname $this->name $this->patronymic";
    }
}