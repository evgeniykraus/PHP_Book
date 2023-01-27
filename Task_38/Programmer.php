<?php

require_once 'iProgrammer.php';
require_once 'Employee.php';

class Programmer extends Employee implements iProgrammer
{
    private array $langs;


    public function getLangs(): array
    {
        return $this->langs;
    }

    public function addLang(array $lang): void
    {
        $this->langs = $lang;
    }
}