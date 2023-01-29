<?php

require_once 'project/Controller.php';
require_once 'core/Controller.php';
require_once 'modules/marketCart.php';
require_once 'modules/shopCart.php';
require_once 'modules/cart/Cart.php';
require_once 'modules/shop/cart/Cart.php';

$core = new \core\Controller();
$project = new \project\Controller();

$cart1 = new \Market\Cart\Cart();
$cart2 = new \Shop\Cart\Cart();
$cart3 = new \modules\shop\cart\Cart();
$cart4 = new \modules\cart\Cart();