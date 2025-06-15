<?php

namespace App\Controllers;

use Core\Controller;

class PageController extends Controller
{
    public function gioiThieu()
    {
        $this->loadView('pages/aboutUs', [], 'pageNoSidebar');
    }
    public function lienHe()
    {
        $this->loadView('pages/contact', [], 'pageNoSidebar');
    }
}
