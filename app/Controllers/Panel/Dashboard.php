<?php

namespace App\Controllers\Panel;

class Dashboard extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
}