<?php

class User
{
    private static int $count = 0;
    private string $name;

    public function __construct($name)
    {
        $this->name = $name;
        self::$count++;
    }

    public static function getCount(): int
    {
        return self::$count;
    }
}