<?php

require_once 'Trait1.php';

trait Trait2
{
    use Trait1;

    private function method3(): int
    {
        return 3;
    }
}