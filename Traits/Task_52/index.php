<?php

trait Trait1
{
    private function method1(): int
    {
        return 1;
    }

    private function method2(): int
    {
        return 2;
    }
}

var_dump(trait_exists('Trait1'));
var_dump(trait_exists('Trait2'));

var_dump(get_declared_traits());