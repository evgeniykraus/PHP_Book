<?php

require_once 'Product.php';
require_once 'Cart.php';

$products = new Cart();
$products->add(new Product('product1', 10, 1));
$products->add(new Product('product2', 10, 2));
$products->add(new Product('product3', 10, 3));
$products->add(new Product('product4', 10, 4));

$products->remove('product4');
var_dump($products->getTotalQuantity());
var_dump($products->getTotalCost());


