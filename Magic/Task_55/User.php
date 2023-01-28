<?php

class User
{
    private $name;
    private $age;

    public function __set(string $name, $value): void
    {
        switch ($name) {
            case 'name':
                if (trim($value) != '') {
                    $this->name = $value;
                }
                break;

            case 'age':
                if ($value >= 0 and $value <= 70) {
                    $this->age = $value;
                }
                break;
        }
    }

    public function __get(string $name)
    {
        $names = ['name', 'age'];
        if (in_array($name, $names)) {
            return $this->$name;
        }
    }
}