<?php

namespace App\Controllers\Admin;

use Core\Controller;

class UserController extends Controller
{
    public function index()
    {
        $this->loadView('Admin/user/index', 'admin');
    }
    public function addUser()
    {
        $this->loadView('Admin/user/add-user', 'admin');
    }
}
