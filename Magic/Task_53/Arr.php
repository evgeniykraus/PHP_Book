<?php

class Arr
{
    private array $numbers = [];

    public function add(float $num): void
    {
        $this->numbers[] = $num;
    }

    public function __toString(): string
    {
        return (string)array_sum($this->numbers);
    }
}