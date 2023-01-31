<?php

use \Core\Route;

return [
    new Route('/hello/', 'hello', 'index'),
    new Route('/test/', 'test', 'act'),
    new Route('/nums/:n1/:n2/:n3/', 'num', 'sum'),
    new Route('/page/act/', 'page', 'act'),
    new Route('/page/show/:n/', 'page', 'show'),
    new Route('/page/test/', 'page', 'test'),
    new Route('/user/first/:n/', 'user', 'first'),
    new Route('/user/all/', 'user', 'all'),
    new Route('/user/:id/', 'user', 'show'),
    new Route('/user/:id/:key/', 'user', 'info'),
    new Route('/page/:id/', 'page', 'one'),
    new Route('/pages/',   'page', 'all'),
    new Route('/product/:id/', 'product', 'one'),
    new Route('/products/',   'product', 'all'),
];

