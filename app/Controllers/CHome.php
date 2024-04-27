<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class CHome extends BaseController
{
    public function index()
    {
        $session = session();
        return view('v_home');
    }
}
