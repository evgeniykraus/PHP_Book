<?php

namespace Project\Controllers;

use \Core\Controller;

class NumController
{
    public function sum($params)
    {
        var_dump(array_sum($params));
    }
}