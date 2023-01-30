<?php

use \Core\Route;

return [
    new Route('/hello/', 'hello', 'index'),
    new Route('/test/', 'test', 'act'),
    new Route('/nums/:n1/:n2/:n3/', 'num', 'sum'),
    new Route('/page/act/', 'page', 'act'),
    new Route('/page/show/:n/', 'page', 'show'),
    new Route('/user/first/:n/', 'user', 'first'),
    new Route('/user/all/', 'user', 'all'),
    new Route('/user/:id/', 'user', 'show'),
    new Route('/user/:id/:key/', 'user', 'info'),
    new Route('/products/all/', 'product', 'all'),
    new Route('/products/:n/', 'product', 'show'),
];

