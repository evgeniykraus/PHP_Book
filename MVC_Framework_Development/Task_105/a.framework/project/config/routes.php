<?php

use \Core\Route;

return [
    new Route('/hello/', 'hello', 'index'),
    new Route('/test/:var1/:var2/', 'test', 'index')
];