<?php

namespace Project\Controllers;

use \Core\Controller;

class PageController extends Controller
{
    private $pages;

    public function __construct()
    {
        $this->pages = [
            1 => 'страница 1',
            2 => 'страница 2',
            3 => 'страница 3',
        ];
    }

    public function show($params)
    {
        echo $this->pages[$params['id']];
    }

    public function act($params)
    {
        var_dump($params);
    }

    public function show1()
    {
        echo '1';
    }

    public function show2()
    {
        echo '2';
    }
}