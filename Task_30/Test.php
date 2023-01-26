<?php

/*Сделайте класс Test с методами method1, method2 и method3.
С помощью функции get_class_methods получите массив названий методов класса Test.
 * */

class Test
{
    public int $prop1 = 1;
    public int $prop2 = 2;
    private int $prop3 = 3;
    private int $prop4 = 4;

    public function __construct()
    {
        //var_dump(get_class_vars(__CLASS__));
    }

    public function method1()
    {
        return true;
    }

    public function method2()
    {
        return true;
    }

    public function method3()
    {
        return true;
    }
}