<?php

class Programmer extends Employee
{
    private $langs = array();


    public function setLangs(array $langs): void
    {
        $this->langs = $langs;
    }

    public function getLangs(): array
    {
        return $this->langs;
    }
}