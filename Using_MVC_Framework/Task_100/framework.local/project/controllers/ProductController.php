<?php

namespace Project\Controllers;

use \Core\Controller;
use \Project\Models\Product;

class ProductController extends Controller
{

    public function one($params)
    {
        $product = (new Product)->getById($params['id']);

        $this->title = 'Действие one контроллера products';

        return $this->render('product/one', [
            'product' => $product,
        ]);
    }

    public function all(): object
    {
        $this->title = 'Действие all контроллера products';
        $products = (new Product)->getAll();

        return $this->render('product/all', [
            'header' => 'Продукты',
            'products' => $products,
        ]);
    }
}