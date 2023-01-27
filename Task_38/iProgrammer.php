<?php

interface iProgrammer
{
    public function __construct(string $name, float $salary);

    public function getName(): string;

    public function getSalary(): float;

    public function getLangs(): array;

    public function addLang(array $lang): void;
}