<?php

namespace Project\Data;

use Controller\Page as PageController;
use Model\Page as PageModel;

class Test
{
    public function __construct()
    {
        $pageController = new PageController();
        $pageModel = new PageModel();
    }
}