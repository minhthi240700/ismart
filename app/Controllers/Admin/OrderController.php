<?php

namespace App\Controllers\Admin;

use Core\Controller;

class OrderController extends Controller
{
    public function index()
    {
        $this->loadView('Admin/order/index', 'admin');
    }
}
