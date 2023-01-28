<?php

interface iUser
{
    public function setName(string $name): void; // установить имя

    public function getName(): string;      // получить имя

    public function setAge(int $age): void;   // установить возраст

    public function getAge(): int;       // получить возраст
}