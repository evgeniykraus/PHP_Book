<?php

require_once 'Trait2.php';

class Test
{
    use Trait2;

    public function getSum(): int
    {
        return $this->method1() + $this->method2() + $this->method3();
    }
}