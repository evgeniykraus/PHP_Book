<?php

require_once 'Product.php';

$product1 = new Product('apple', 10);

$product2 = $product1;

var_dump($product1);
var_dump($product2);
