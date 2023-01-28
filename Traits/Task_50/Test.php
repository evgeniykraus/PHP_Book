<?php

require_once 'TestTrait.php';

class Test
{
    use TestTrait;

    public function method2(): int
    {
        return 2;
    }
}