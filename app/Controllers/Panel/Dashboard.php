<?php

namespace App\Controllers\Panel;

class Dashboard extends BaseController
{
    public function index()
    {
        echo view('panel/includes/_header');
        echo view('panel/index');
        echo view('panel/includes/_footer');
    }
}