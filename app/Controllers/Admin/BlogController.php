<?php

namespace App\Controllers\Admin;

use Core\Controller;

class BlogController extends Controller
{
    public function listBlog()
    {
        $this->loadView('Admin/blog/list-blog', 'admin');
    }
    public function catBlog()
    {
        $this->loadView('Admin/blog/cat-blog', 'admin');
    }
    public function addBlog()
    {
        $this->loadView('Admin/blog/add-blog', 'admin');
    }
}
