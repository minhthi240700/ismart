<?php
namespace App\Controllers;

use Core\Controller;

class BlogController extends Controller
{

    public function index()
    {
        $this->loadView('Blog/index');
    }

    public function detail($id)
    {
        echo "Chi tiết bài viết có ID: $id";
    }
}
