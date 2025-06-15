<?php
namespace App\Controllers;

use Core\Controller;

class ProductController extends Controller
{

    public function index()
    {
        $this->loadView('Product/index');
    }

    public function detail($id)
    {
        echo "Chi tiết sản phẩm có ID: $id";
    }
}
