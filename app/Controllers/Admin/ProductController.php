<?php

namespace App\Controllers\Admin;

use Core\Controller;

class ProductController extends Controller
{
    public function listProducts()
    {
        $this->loadView('Admin/product/list-product', 'admin');
    }
    public function catProduct()
    {
        $this->loadView('Admin/product/cat-product', 'admin');
    }
    public function addProduct()
    {
        $this->loadView('Admin/product/add-product', 'admin');
    }
}
