<?php

namespace Project;

use \Resource\Controller\Page as PageController;
use \Resource\Model\Page as PageModel;

class Test
{
    public function __construct()
    {
        $pageController = new PageController();
        $pageModel = new PageModel();
    }
}
